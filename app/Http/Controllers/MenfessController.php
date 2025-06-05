<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenfessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Menfess::approved()->with('tags');

        // Search filter
        if ($request->has('search') && !empty($request->search)) {
            $query->search($request->search);
        }

        // Music filter
        if ($request->has('music') && !empty($request->music)) {
            if ($request->music === 'with_music') {
                $query->withMusic();
            } elseif ($request->music === 'without_music') {
                $query->withoutMusic();
            }
        }

        // Sort
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'oldest':
                $query->oldest();
                break;
            case 'popular':
                $query->orderBy('created_at', 'desc'); // Placeholder for actual like count
                break;
            default:
                $query->latest();
                break;
        }

        $menfess = $query->paginate(12);

        // Stats for dashboard
        $totalMenfess = Menfess::approved()->count();
        $withMusic = Menfess::approved()->withMusic()->count();
        $totalLikes = 0; // Placeholder - implement when like system is ready

        return view('front.menfess.index', compact('menfess', 'totalMenfess', 'withMusic', 'totalLikes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_name' => 'required|string|max:100',
            'to_name' => 'nullable|string|max:100',
            'content' => 'required|string|min:10|max:1000',
            'spotify_link' => 'nullable|url|regex:/^https:\/\/(open\.)?spotify\.com\/track\/[a-zA-Z0-9]+/'
        ], [
            'sender_name.required' => 'Nama pengirim wajib diisi',
            'sender_name.max' => 'Nama pengirim maksimal 100 karakter',
            'content.required' => 'Pesan wajib diisi',
            'content.min' => 'Pesan minimal 10 karakter',
            'content.max' => 'Pesan maksimal 1000 karakter',
            'spotify_link.url' => 'Link Spotify tidak valid',
            'spotify_link.regex' => 'Hanya link Spotify track yang diperbolehkan'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $menfess = Menfess::create([
                'sender_name' => $request->sender_name,
                'to_name' => $request->to_name ?: 'Semua',
                'content' => $request->content,
                'spotify_link' => $request->spotify_link,
                'status' => 'pending',
                'user_id' => auth()->id(), // If user is logged in
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Menfess berhasil dikirim! Akan ditampilkan setelah disetujui moderator.',
                'data' => [
                    'id' => $menfess->id,
                    'sender_name' => $menfess->sender_name,
                    'to_name' => $menfess->to_name,
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengirim menfess. Silakan coba lagi.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menfess = Menfess::approved()->with('tags')->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $menfess
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
