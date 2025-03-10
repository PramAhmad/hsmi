<div>
    @if($getRecord()->file_path)
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " style="color: oklch(0.637 0.237 25.331);" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M7 10a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            <a 
                href="{{ asset('storage/' . $getRecord()->file_path) }}" 
                target="_blank"
                class="inline-flex items-center px-2 py-1 text-xs font-medium rounded bg-gray-100 text-slate-900 hover:bg-gray-200"
            >
                Lihat PDF
            </a>
        </div>
    @else
        <span class="text-gray-400 text-xs">Tidak ada file</span>
    @endif
</div>
