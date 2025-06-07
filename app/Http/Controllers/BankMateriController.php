<?php

namespace App\Http\Controllers;

use App\Models\BankMateri;
use App\Models\BankMateriFile;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class BankMateriController extends Controller
{
    public function index(Request $request)
    {
        $query = BankMateri::where('is_draft', false)
                           ->with(['mataKuliah', 'files' => function($query) {
                               $query->orderBy('urutan');
                           }]);

        // Search filter
        if ($request->has('search') && !empty($request->search)) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', "%{$request->search}%")
                  ->orWhere('deskripsi', 'like', "%{$request->search}%")
                  ->orWhere('penulis', 'like', "%{$request->search}%");
            });
        }

        // Mata Kuliah filter
        if ($request->has('mata_kuliah_id') && !empty($request->mata_kuliah_id)) {
            $query->where('mata_kuliah_id', $request->mata_kuliah_id);
        }

        // Kategori filter
        if ($request->has('kategori') && !empty($request->kategori)) {
            $query->where('kategori', $request->kategori);
        }

        // Sort
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'oldest':
                $query->oldest();
                break;
            case 'popular':
                $query->orderBy('view_count', 'desc');
                break;
            case 'most_downloaded':
                $query->orderBy('download_count', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $materials = $query->paginate(12);
        $mataKuliah = MataKuliah::orderBy('nama')->get();
        
        // Additional stats
        $totalSoal = BankMateri::where('is_draft', false)->sum('total_soal');
        $totalPdf = BankMateriFile::where('tipe_file', 'pdf')->count();
        $downloadCount = BankMateri::where('is_draft', false)->sum('download_count');

        return view('front.bank-materi', compact('materials', 'totalSoal', 'totalPdf', 'downloadCount', 'mataKuliah'));
    }
    
    // Download all files as ZIP
    public function download($id)
    {
        $material = BankMateri::with('files')->findOrFail($id);
        $material->incrementDownload();

        $files = $material->files;

        if ($files->count() === 0) {
            return back()->with('error', 'Tidak ada file yang tersedia untuk didownload.');
        }

        // Jika hanya 1 file, download langsung
        if ($files->count() === 1) {
            $file = $files->first();
            return $this->downloadSingleFile($file);
        }

        // Jika multiple files, buat ZIP
        return $this->downloadAsZip($material, $files);
    }

    // Download single file
    public function downloadFile($fileId)
    {
        $file = BankMateriFile::findOrFail($fileId);
        
        // Increment download count for the material
        $file->bankMateri->incrementDownload();
        
        return $this->downloadSingleFile($file);
    }

    private function downloadSingleFile(BankMateriFile $file)
    {
        $filePath = storage_path('app/public/' . $file->file_path);
        
        if (!file_exists($filePath)) {
            return back()->with('error', 'File tidak ditemukan.');
        }

        return Response::download($filePath, $file->nama_file);
    }

    private function downloadAsZip(BankMateri $material, $files)
    {
        $zip = new \ZipArchive();
        $zipFileName = 'materi_' . \Str::slug($material->judul) . '_' . now()->format('Ymd_His') . '.zip';
        $zipPath = storage_path('app/temp/' . $zipFileName);

        // Create temp directory if not exists
        if (!file_exists(storage_path('app/temp'))) {
            mkdir(storage_path('app/temp'), 0755, true);
        }

        if ($zip->open($zipPath, \ZipArchive::CREATE) === TRUE) {
            foreach ($files as $file) {
                $filePath = storage_path('app/public/' . $file->file_path);
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, $file->nama_file);
                }
            }
            $zip->close();

            return Response::download($zipPath, $zipFileName)->deleteFileAfterSend(true);
        }

        return back()->with('error', 'Gagal membuat file ZIP.');
    }

    // API endpoint for modal detail
    public function apiDetail($id)
    {
        try {
            $material = BankMateri::with(['mataKuliah', 'files' => function($query) {
                $query->orderBy('urutan');
            }])->findOrFail($id);

            $material->incrementView();

            return response()->json([
                'success' => true,
                'materi' => [
                    'id' => $material->id,
                    'judul' => $material->judul,
                    'deskripsi' => $material->deskripsi,
                    'kategori' => $material->kategori,
                    'total_halaman' => $material->total_halaman,
                    'total_soal' => $material->total_soal,
                    'tingkat_kesulitan' => $material->tingkat_kesulitan,
                    'penulis' => $material->penulis,
                    'tanggal_publikasi' => $material->tanggal_publikasi,
                    'download_count' => $material->download_count,
                    'view_count' => $material->view_count,
                    'mata_kuliah' => $material->mataKuliah,
                    'files' => $material->files->map(function($file) {
                        return [
                            'id' => $file->id,
                            'nama_file' => $file->nama_file,
                            'ukuran_file' => $file->ukuran_file,
                            'tipe_file' => $file->tipe_file,
                            'urutan' => $file->urutan,
                        ];
                    })
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Materi tidak ditemukan.'
            ], 404);
        }
    }
}
