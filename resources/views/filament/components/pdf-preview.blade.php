<div>
    @if($getRecord() && $getRecord()->file_path)
        <div class="w-full bg-white rounded-lg shadow-sm">
            <div class="px-4 py-3 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Preview PDF</h3>
                <a 
                    href="{{ asset('storage/' . $getRecord()->file_path) }}" 
                    target="_blank" 
                    class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
                >
                    Buka di Tab Baru
                </a>
            </div>
            <div class="w-full p-3">
                <iframe
                    src="{{ asset('storage/' . $getRecord()->file_path) }}"
                    width="100%"
                    height="600"
                    class="border-0 rounded-md"
                ></iframe>
            </div>
        </div>
    @else
        <div class="w-full p-4 bg-gray-50 rounded-lg text-center text-gray-500">
            File PDF belum diupload.
        </div>
    @endif
</div>
