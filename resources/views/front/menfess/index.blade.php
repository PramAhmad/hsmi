@extends('front.layout')

@section('content')
<!-- Hero Section -->
<section class="banner-six-area bg-image paralax__animation md:pt-48 pt-36 pb-28" data-background="{{ asset('learnit/assets/images/bg/banner-six-bg.jpg') }}">
    <div class="banner-six__shape1" data-depth="0.03">
        <img class="animation__sunMove" src="{{ asset('learnit/assets/images/shape/banner-six-shape1.png') }}" alt="image">
    </div>
    <div class="banner-six__shape2" data-depth="0.03">
        <img class="animation__arryLeftRight" src="{{ asset('learnit/assets/images/shape/banner-six-shape2.png') }}" alt="image">
    </div>
    <div class="banner-six__shape3" data-depth="0.03">
        <img class="animation__arryUpDown" src="{{ asset('learnit/assets/images/shape/banner-six-shape3.png') }}" alt="image">
    </div>
    
    <div class="container" style="transform: scale(0.9); transform-origin: top center; width: 100%; margin: 0 auto;">
        <div class="text-center">
            <div class="flex items-center justify-center gap-3 mb-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-comments text-white text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">SIFESS HMSI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-heart text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Cerita & Curhat 
                <span class="text-sky-500 relative inline-block">
                    Anonim
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">💭</span>
                    <span class="text-4xl animate-pulse">💝</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Tempat yang aman untuk berbagi cerita, curhat, atau perasaan secara anonim</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Ekspresikan dirimu tanpa takut!</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>100% privasi terjamin ✨</span>
                    </li>
                </ul>
            </div>
            
            <!-- Update Hero Section Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <button onclick="openMenfessModal()" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-paper-plane text-xl"></i>
                    Kirim Menfess
                </button>
                
                <a href="#menfess-list" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-slate-900 px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-list text-lg"></i>
                    Lihat Semua
                </a>
            </div>
        </div>
    </div>
    
    <div class="banner-five__cloud-shape image">
        <img src="{{ asset('learnit/assets/images/bg/cloud-bottom.png') }}" alt="shape">
    </div>
</section>

<!-- Stats Section -->


<!-- Filter & Menfess List -->
<section id="menfess-list" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-16 md:pb-16 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-10 opacity-20">
        <div class="w-24 h-24 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-32 h-32 bg-blue-400 rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10" style="transform: scale(0.9); transform-origin: top center; width: 100%; margin: 0 auto;">
        <!-- Filter Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-12 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <!-- Update Filter Section Header -->
            <div class="flex items-center gap-4 mb-6">
                <div class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-filter text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800">Filter Menfess</h3>
            </div>
            
            <form method="GET" action="{{ route('sifess.index') }}" class="grid md:grid-cols-5 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari menfess..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Category Filter -->
                <select name="category" class="w-full px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Kategori</option>
                    <option value="curhat" {{ request('category') == 'curhat' ? 'selected' : '' }}>💭 Curhat</option>
                    <option value="cerita" {{ request('category') == 'cerita' ? 'selected' : '' }}>📖 Cerita</option>
                    <option value="confession" {{ request('category') == 'confession' ? 'selected' : '' }}>💝 Confession</option>
                    <option value="pertanyaan" {{ request('category') == 'pertanyaan' ? 'selected' : '' }}>❓ Pertanyaan</option>
                    <option value="motivasi" {{ request('category') == 'motivasi' ? 'selected' : '' }}>💪 Motivasi</option>
                </select>
                
                <!-- Music Filter -->
                <select name="music" class="w-full px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Musik</option>
                    <option value="with_music" {{ request('music') == 'with_music' ? 'selected' : '' }}>🎵 Dengan Musik</option>
                    <option value="without_music" {{ request('music') == 'without_music' ? 'selected' : '' }}>🔇 Tanpa Musik</option>
                </select>
                
                <!-- Sort -->
                <select name="sort" class="w-full px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>🕒 Terbaru</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>⏰ Terlama</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>🔥 Populer</option>
                </select>
                
                <!-- Update Filter Button -->
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i>
                        Filter
                    </button>
                    <a href="{{ route('sifess.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-refresh"></i>
                    </a>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'category', 'music', 'sort']))
        <div class="mb-8 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-sm font-medium text-gray-600">Filter aktif:</span>
                
                @if(request('search'))
                <span class="inline-flex items-center gap-2 bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">
                    <i class="fa-solid fa-search"></i>
                    "{{ request('search') }}"
                    <a href="{{ request()->fullUrlWithoutQuery('search') }}" class="hover:text-sky-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif
                
                @if(request('category'))
                <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(request('category')) }}
                    <a href="{{ request()->fullUrlWithoutQuery('category') }}" class="hover:text-blue-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif
                
                @if(request('music'))
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ request('music') == 'with_music' ? '🎵 Dengan Musik' : '🔇 Tanpa Musik' }}
                    <a href="{{ request()->fullUrlWithoutQuery('music') }}" class="hover:text-green-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                <a href="{{ route('sifess.index') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
                    Hapus semua filter
                </a>
            </div>
        </div>
        @endif

        <!-- Results Info -->
        <div class="mb-8 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <h4 class="text-lg font-semibold text-gray-800">
                        Ada {{ $menfess->total() }} sifess
                    </h4>
                    <!-- Update Results Section Button -->
                    @if(request()->hasAny(['search', 'category', 'music']))
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Hasil Filter
                    </span>
                    @endif
                </div>
                
                <button onclick="openMenfessModal()" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-plus"></i>
                    Kirim Menfess
                </button>
            </div>
        </div>

        <!-- Menfess Grid - Improved Compact Layout -->
        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($menfess as $index => $item)
            <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 wow fadeInUp border border-gray-100 h-fit" data-wow-delay="{{ $index * 50 }}ms" data-wow-duration="1500ms">
                <!-- Header Card -->
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-100">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-sky-500 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-700 truncate">{{ $item->sender_name }}</span>
                        
                        <!-- Category Badge -->
                        @if($item->category)
                        <span class="bg-gradient-to-r from-sky-100 to-blue-100 text-sky-700 px-2 py-1 rounded-full text-xs font-medium">
                            @switch($item->category)
                                @case('curhat') 💭 @break
                                @case('cerita') 📖 @break
                                @case('confession') 💝 @break
                                @case('pertanyaan') ❓ @break
                                @case('motivasi') 💪 @break
                                @default {{ substr($item->category, 0, 1) }}
                            @endswitch
                        </span>
                        @endif
                    </div>
                </div>
                
                <!-- From & To Section -->
                <div class="mb-4">
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-gray-500 font-medium text-xs">Untuk:</span>
                        <span class="bg-gradient-to-r from-sky-100 to-blue-100 text-sky-700 px-2 py-1 rounded-full text-xs font-medium">
                            {{ $item->to_name ?: 'Semua' }}
                        </span>
                    </div>
                </div>
                
                <!-- Message Content -->
                <div class="mb-4">
                    <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-lg p-3 border-l-4 border-sky-500">
                        <div class="text-gray-700 leading-relaxed text-sm line-clamp-4">
                            {!! Str::limit($item->content, 200) !!}
                        </div>
                        @if(strlen($item->content) > 200)
                        <div class="mt-2">
                            <span class="text-sky-600 text-xs font-medium">
                                Baca selengkapnya...
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Spotify Embed -->
                @if($item->spotify_link)
                <div class="mb-4">
                    @php
                        $spotifyId = null;
                        $isValidSpotify = false;
                        
                        // Check for Spotify track URL patterns
                        if (preg_match('/spotify\.com\/track\/([a-zA-Z0-9]+)/', $item->spotify_link, $matches)) {
                            $spotifyId = $matches[1];
                            $isValidSpotify = true;
                        } elseif (preg_match('/open\.spotify\.com\/track\/([a-zA-Z0-9]+)/', $item->spotify_link, $matches)) {
                            $spotifyId = $matches[1];
                            $isValidSpotify = true;
                        } elseif (preg_match('/spotify:track:([a-zA-Z0-9]+)/', $item->spotify_link, $matches)) {
                            $spotifyId = $matches[1];
                            $isValidSpotify = true;
                        }
                    @endphp
                    
                    @if($isValidSpotify && $spotifyId)
                    <div class="bg-gradient-to-r from-green-400 to-green-500 rounded-lg overflow-hidden shadow-md">
                        <div class="bg-white">
                            <iframe src="https://open.spotify.com/embed/track/{{ $spotifyId }}?utm_source=generator&theme=0" 
                                    width="100%" 
                                    height="152" 
                                    frameborder="0" 
                                    allowfullscreen="" 
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                                    loading="lazy"
                                    class="rounded-b-lg">
                            </iframe>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                
                <!-- Footer -->
                <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                    <!-- Time & Tags -->
                    <div class="flex items-center gap-3">
                        <span class="text-xs text-gray-500 font-medium">
                            {{ $item->created_at->diffForHumans() }}
                        </span>
                        
                        @if(isset($item->tags) && $item->tags->count() > 0)
                        <div class="flex gap-1">
                            @foreach($item->tags->take(1) as $tag)
                            <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded-full text-xs font-medium">
                                #{{ Str::limit($tag->name, 6) }}
                            </span>
                            @endforeach
                            @if($item->tags->count() > 1)
                            <span class="text-xs text-gray-400">+{{ $item->tags->count() - 1 }}</span>
                            @endif
                        </div>
                        @endif
                    </div>
                    
                    <!-- Detail Button -->
                    <button onclick="showMenfessDetail('{{ $item->id }}')" 
                            class="text-sky-500 hover:text-sky-400 text-sm bg-sky-100 rounded-full hover:scale-105 hover:transition duration-500 px-4 py-1 font-medium transition-colors">
                        Detail
                    </button>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-regular fa-envelope text-3xl text-sky-500"></i>
                    </div>
                </div>
                @if(request()->hasAny(['search', 'category', 'music']))
                <h5 class="text-xl font-bold text-gray-800 mb-3">Tidak ada menfess yang sesuai</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Coba ubah filter atau kata kunci pencarian!</p>
                <!-- Update Empty State Buttons -->
                <a href="{{ route('sifess.index') }}" 
                class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-refresh"></i>
                    Reset Filter
                </a>
                @else
                <h5 class="text-xl font-bold text-gray-800 mb-3">Belum ada menfess</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Jadilah yang pertama berbagi cerita, curhat, atau perasaan secara anonim!</p>
                <button onclick="openMenfessModal()" 
                    class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-regular fa-paper-plane"></i>
                    Kirim Menfess Pertama
                </button>
                @endif
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($menfess->hasPages())
        <div class="mt-12 flex justify-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                {{ $menfess->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Menfess Modal - Adjusted for Desktop -->
<div id="menfessModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden ">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[85vh] overflow-hidden flex flex-col">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100 flex-shrink-0">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <!-- Update Modal Header -->
                        <div class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-paper-plane text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Kirim Menfess</h3>
                    </div>
                    <button onclick="closeMenfessModal()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-times text-gray-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body - Scrollable -->
            <div class="flex-1 overflow-y-auto">
                <form id="menfessForm" class="p-6">
                    @csrf
                    
                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                        <!-- From -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fa-solid fa-user mr-2 text-sky-500"></i>
                                Nama Pengirim
                            </label>
                            <input type="text" name="sender_name" placeholder="Anonim / Nama samaran" 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all"
                                   required maxlength="100">
                        </div>
                        
                        <!-- To -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fa-solid fa-heart mr-2 text-sky-500"></i>
                                Untuk Siapa?
                            </label>
                            <input type="text" name="to_name" placeholder="Teman, crush, semua, dll..." 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all"
                                   maxlength="100">
                        </div>
                    </div>
                    
                    <!-- Message -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fa-solid fa-comment mr-2 text-sky-500"></i>
                            Pesan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="content" rows="5" placeholder="Tulis pesan, cerita, atau curhatmu di sini..." 
                                  class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all resize-none" 
                                  required maxlength="1000" oninput="updateCharCount(this)"></textarea>
                        <div class="flex justify-between items-center text-xs text-gray-500 mt-2">
                            <span>Minimal 10 karakter, maksimal 1000 karakter</span>
                            <span id="charCount" class="font-medium">0/1000</span>
                        </div>
                    </div>
                    
                    <!-- Spotify Link -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fa-brands fa-spotify mr-2 text-green-500"></i>
                            Link Spotify (Opsional)
                        </label>
                        <input type="url" name="spotify_link" placeholder="https://open.spotify.com/track/..." 
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                        <p class="text-xs text-gray-500 mt-2">Bagikan lagu yang menggambarkan perasaanmu</p>
                    </div>
                    
                    <!-- Submit Button Inside Form -->
                    <div class="flex gap-3">
                        <button type="button" onclick="closeMenfessModal()" 
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                            Batal
                        </button>
                        <button type="submit"
                                class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                            <i class="fa-solid fa-paper-plane mr-2"></i>
                            Kirim Menfess
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer - Fixed -->
            <div class="p-6 border-t border-gray-100 bg-gray-50 rounded-b-2xl flex-shrink-0">
                <!-- Footer content removed since buttons are now in form -->
                <div class="text-center text-gray-500 text-sm">
                    <i class="fa-solid fa-shield-check mr-2"></i>
                    Semua menfess akan direview sebelum dipublikasi
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Menfess Modal -->
<div id="detailMenfessModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-sky-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-envelope-open text-sky-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Detail Menfess</h3>
                    </div>
                    <button onclick="closeDetailModal()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-times text-gray-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div id="detailContent" class="p-6">
                <div class="flex items-center justify-center py-8">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-sky-500"></div>
                    <span class="ml-3 text-gray-600">Memuat...</span>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="p-6 border-t border-gray-100 bg-gray-50 rounded-b-2xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <button id="likeBtn" class="flex items-center gap-2 text-gray-500 hover:text-red-500 transition-colors group">
                            <i class="fa-regular fa-heart group-hover:fa-solid text-lg"></i>
                            <span class="font-medium">Suka</span>
                            <span id="likeCount" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-full text-xs font-bold">0</span>
                        </button>
                        
                        <button id="shareBtn" class="flex items-center gap-2 text-gray-500 hover:text-blue-500 transition-colors">
                            <i class="fa-solid fa-share text-lg"></i>
                            <span class="font-medium">Bagikan</span>
                        </button>
                    </div>
                    
                    <button onclick="closeDetailModal()" class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-2 rounded-lg font-medium transition-colors duration-200">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function openMenfessModal() {
    document.getElementById('menfessModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeMenfessModal() {
    document.getElementById('menfessModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
    const form = document.getElementById('menfessForm');
    if (form) {
        form.reset();
    }
    clearFormErrors();
    
    // Reset character counter
    const charCount = document.getElementById('charCount');
    if (charCount) {
        charCount.textContent = '0/1000';
        charCount.className = 'font-medium text-gray-500';
    }
}

function clearFormErrors() {
    // Clear all error messages
    document.querySelectorAll('.error-message').forEach(el => el.remove());
    document.querySelectorAll('.border-red-500').forEach(el => {
        el.classList.remove('border-red-500');
        el.classList.add('border-gray-200');
    });
}

function updateCharCount(textarea) {
    const charCount = document.getElementById('charCount');
    if (charCount) {
        const length = textarea.value.length;
        charCount.textContent = `${length}/1000`;
        charCount.className = length > 1000 ? 'font-medium text-red-500' : 
                             length > 900 ? 'font-medium text-yellow-500' : 
                             'font-medium text-gray-500';
    }
}

function showFormError(field, message) {
    const input = document.querySelector(`[name="${field}"]`);
    if (input) {
        input.classList.remove('border-gray-200');
        input.classList.add('border-red-500');
        
        // Add error message
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message text-red-500 text-xs mt-1';
        errorDiv.textContent = message;
        input.parentNode.appendChild(errorDiv);
    }
}

function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-sky-500' : 'bg-red-500';
    toast.className = `fixed bottom-4 right-4 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 100);
    
    // Animate out and remove
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => toast.remove(), 300);
    }, 5000);
}

function showMenfessDetail(id) {
    // Show modal
    const detailModal = document.getElementById('detailMenfessModal');
    if (detailModal) {
        detailModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Reset content
        const detailContent = document.getElementById('detailContent');
        if (detailContent) {
            detailContent.innerHTML = `
                <div class="flex items-center justify-center py-8">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-sky-500"></div>
                    <span class="ml-3 text-gray-600">Memuat...</span>
                </div>
            `;
        }
        
        // Find the menfess card
        const cards = document.querySelectorAll('[data-wow-delay]');
        let menfessCard = null;
        
        for (let card of cards) {
            const button = card.querySelector(`button[onclick*="${id}"]`);
            if (button) {
                menfessCard = card;
                break;
            }
        }
        
        if (menfessCard && detailContent) {
            // Extract data from card
            const senderNameEl = menfessCard.querySelector('span.truncate');
            const senderName = senderNameEl ? senderNameEl.textContent.trim() : 'Anonim';
            
            const categoryElement = menfessCard.querySelector('.bg-gradient-to-r.from-sky-100');
            const category = categoryElement ? categoryElement.textContent.trim() : '';
            
            const toNameEl = menfessCard.querySelector('.from-sky-100.to-blue-100');
            const toName = toNameEl ? toNameEl.textContent.trim() : 'Semua';
            
            const contentElement = menfessCard.querySelector('.line-clamp-4');
            const content = contentElement ? contentElement.textContent.trim() : '';
            
            const timeElement = menfessCard.querySelector('.text-xs.text-gray-500.font-medium');
            const timeAgo = timeElement ? timeElement.textContent.trim() : '';
            
            const hasSpotify = menfessCard.querySelector('iframe[src*="spotify"]') !== null;
            const spotifyEmbed = menfessCard.querySelector('iframe[src*="spotify"]');
            const tagsElements = menfessCard.querySelectorAll('.bg-sky-100.text-sky-700');
            
            // Simulate loading delay
            setTimeout(() => {
                let detailHTML = `
                    <div class="space-y-6">
                        <!-- Header Info -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 bg-sky-500 rounded-full animate-pulse"></div>
                                <span class="text-lg font-semibold text-gray-800">${senderName}</span>
                                ${category ? `<span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">${category}</span>` : ''}
                            </div>
                            <div class="flex items-center gap-2">
                                ${hasSpotify ? '<div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center"><i class="fa-brands fa-spotify text-green-600 text-sm"></i></div>' : ''}
                                <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">${timeAgo}</span>
                            </div>
                        </div>
                        
                        <!-- To Section -->
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600 font-medium">Untuk:</span>
                            <span class="bg-sky-100 text-sky-700 px-3 py-2 rounded-full font-medium">${toName}</span>
                        </div>
                        
                        <!-- Content -->
                        <div class="bg-sky-50 rounded-xl p-6 border-l-4 border-sky-500">
                            <div class="text-gray-700 leading-relaxed prose prose-sm max-w-none">
                                ${content.replace(/\\n/g, '<br>')}
                            </div>
                        </div>
                        
                        <!-- Spotify Section -->
                        ${hasSpotify && spotifyEmbed ? `
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fa-brands fa-spotify text-white"></i>
                                </div>
                                <span class="font-semibold text-green-800">Musik Pilihan</span>
                            </div>
                            <div class="bg-green-500 rounded-lg overflow-hidden shadow-md">
                                <div class="bg-white">
                                    ${spotifyEmbed.outerHTML}
                                </div>
                            </div>
                        </div>
                        ` : ''}
                        
                        <!-- Tags Section -->
                        ${tagsElements.length > 0 ? `
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600 font-medium text-sm">Tags:</span>
                            <div class="flex flex-wrap gap-2">
                                ${Array.from(tagsElements).map(tag => `
                                    <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded-full text-xs font-medium">
                                        ${tag.textContent.trim()}
                                    </span>
                                `).join('')}
                            </div>
                        </div>
                        ` : ''}
                        
                        <!-- Privacy Info -->
                        <div class="bg-sky-50 rounded-xl p-4 border border-sky-200">
                            <div class="flex items-center gap-3 text-sky-700">
                                <i class="fa-solid fa-shield-check"></i>
                                <span class="font-medium">100% Anonim & Aman</span>
                            </div>
                            <p class="text-sky-600 text-sm mt-2">Identitas pengirim terlindungi dengan aman. SiFess HMSI menjamin privasi setiap pengguna.</p>
                        </div>
                    </div>
                `;
                
                detailContent.innerHTML = detailHTML;
                
                // Update footer buttons
                const shareBtn = document.getElementById('shareBtn');
                if (shareBtn) {
                    shareBtn.onclick = () => shareMenfess(id);
                }
                const likeCount = document.getElementById('likeCount');
                if (likeCount) {
                    likeCount.textContent = Math.floor(Math.random() * 50);
                }
            }, 500);
        }
    }
}

function closeDetailModal() {
    const detailModal = document.getElementById('detailMenfessModal');
    if (detailModal) {
        detailModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
}

function shareMenfess(id) {
    if (navigator.share) {
        navigator.share({
            title: 'Menfess HMSI',
            text: 'Lihat menfess ini di SiFess HMSI',
            url: window.location.origin + '/sifess#' + id
        });
    } else {
        navigator.clipboard.writeText(window.location.origin + '/sifess#' + id);
        showToast('Link berhasil disalin!', 'success');
    }
}

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
    const menfessForm = document.getElementById('menfessForm');
    if (menfessForm) {
        menfessForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            clearFormErrors();
            
            // Basic client-side validation
            const content = this.querySelector('textarea[name="content"]').value.trim();
            const senderName = this.querySelector('input[name="sender_name"]').value.trim();
            
            if (!senderName) {
                showFormError('sender_name', 'Nama pengirim wajib diisi');
                return;
            }
            
            if (content.length < 10) {
                showFormError('content', 'Pesan minimal 10 karakter');
                return;
            }
            
            if (content.length > 1000) {
                showFormError('content', 'Pesan maksimal 1000 karakter');
                return;
            }
            
            // Add loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            if (!submitBtn) {
                return;
            }
            
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Mengirim...';
            submitBtn.disabled = true;
            
            // Get form data
            const formData = new FormData(this);
            
            // Send AJAX request
            fetch('{{ route("sifess.store") }}', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showToast(data.message, 'success');
                    closeMenfessModal();
                    
                    setTimeout(() => {
                        if (data.message.includes('disetujui')) {
                            // The menfess will appear after admin approval
                        } else {
                            window.location.reload();
                        }
                    }, 2000);
                } else {
                    if (data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            showFormError(field, data.errors[field][0]);
                        });
                    } else {
                        showToast(data.message || 'Terjadi kesalahan', 'error');
                    }
                }
            })
            .catch(error => {
                if (error.name === 'TypeError' && error.message.includes('fetch')) {
                    showToast('Tidak dapat terhubung ke server. Periksa koneksi internet Anda.', 'error');
                } else if (error.message.includes('HTTP error')) {
                    showToast('Server error: ' + error.message, 'error');
                } else {
                    showToast('Terjadi kesalahan jaringan. Silakan coba lagi.', 'error');
                }
            })
            .finally(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }
    
    const modals = ['menfessModal', 'detailMenfessModal'];
    modals.forEach(modalId => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    if (modalId === 'menfessModal') {
                        closeMenfessModal();
                    } else {
                        closeDetailModal();
                    }
                }
            });
        }
    });
    
    // Handle escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMenfessModal();
            closeDetailModal();
        }
    });
    
    // Like button functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('#likeBtn')) {
            const likeBtn = e.target.closest('#likeBtn');
            const heart = likeBtn.querySelector('i');
            const count = document.getElementById('likeCount');
            
            if (heart && count) {
                const currentCount = parseInt(count.textContent);
                
                if (heart.classList.contains('fa-regular')) {
                    heart.classList.remove('fa-regular');
                    heart.classList.add('fa-solid');
                    likeBtn.classList.remove('text-gray-500');
                    likeBtn.classList.add('text-red-500');
                    count.textContent = currentCount + 1;
                } else {
                    heart.classList.remove('fa-solid');
                    heart.classList.add('fa-regular');
                    likeBtn.classList.remove('text-red-500');
                    likeBtn.classList.add('text-gray-500');
                    count.textContent = currentCount - 1;
                }
            }
        }
    });
});
</script>
@endpush

@endsection