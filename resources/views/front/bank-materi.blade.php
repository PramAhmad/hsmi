@extends('front.layout')

@section('content')
<!-- Hero Section -->
<section class="banner-six-area bg-image paralax__animation" data-background="{{ asset('learnit/assets/images/bg/banner-six-bg.jpg') }}">
    <div class="banner-six__shape1" data-depth="0.03">
        <img class="animation__sunMove" src="{{ asset('learnit/assets/images/shape/banner-six-shape1.png') }}" alt="image">
    </div>
    <div class="banner-six__shape2" data-depth="0.03">
        <img class="animation__arryLeftRight" src="{{ asset('learnit/assets/images/shape/banner-six-shape2.png') }}" alt="image">
    </div>
    <div class="banner-six__shape3" data-depth="0.03">
        <img class="animation__arryUpDown" src="{{ asset('learnit/assets/images/shape/banner-six-shape3.png') }}" alt="image">
    </div>
    
    <div class="container">
        <div class="text-center">
            <div class="flex items-center justify-center gap-3 mb-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-sky-500 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-graduation-cap text-white text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">BANK MATERI AKADEMIK</h5>
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-book text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Koleksi 
                <span class="text-sky-500 relative inline-block">
                    Materi Kuliah
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">📚</span>
                    <span class="text-4xl animate-pulse">💡</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Materi pembelajaran, latihan soal, dan referensi akademik lengkap</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Akses gratis untuk semua mahasiswa SI!</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>Dikurasi oleh tim HMSI dan dosen berpengalaman ✨</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#materials-list" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-books text-xl"></i>
                    Jelajahi Materi
                </a>
                
                <a href="#" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-upload text-lg"></i>
                    Kontribusi Materi
                </a>
            </div>
        </div>
    </div>
    
    <div class="banner-five__cloud-shape image">
        <img src="{{ asset('learnit/assets/images/bg/cloud-bottom.png') }}" alt="shape">
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-sky-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📚</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $materials->total() ?? '0' }}</h3>
                <p class="text-gray-600 font-medium">Total Materi</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📝</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $totalSoal ?? '0' }}</h3>
                <p class="text-gray-600 font-medium">Bank Soal</p>
            </div>
            
            <div class="text-center p-6 bg-sky-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-sky-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📄</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $totalPdf ?? '0' }}</h3>
                <p class="text-gray-600 font-medium">File PDF</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">👥</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $downloadCount ?? '1000+' }}</h3>
                <p class="text-gray-600 font-medium">Total Download</p>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Materials List -->
<section id="materials-list" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-20 pb-32 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-10 opacity-20">
        <div class="w-24 h-24 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-32 h-32 bg-blue-400 rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Filter Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-12 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-filter text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800">Filter Materi</h3>
            </div>
            
            <form method="GET" action="{{ route('bank-materi') }}" class="grid md:grid-cols-6 gap-4">
                <!-- Search -->
                <div class="relative md:col-span-2">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari materi..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Mata Kuliah Filter -->
                <select name="mata_kuliah" class="w-full py-3 px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Mata Kuliah</option>
                    <option value="algoritma" {{ request('mata_kuliah') == 'algoritma' ? 'selected' : '' }}>💻 Algoritma & Pemrograman</option>
                    <option value="database" {{ request('mata_kuliah') == 'database' ? 'selected' : '' }}>🗄️ Basis Data</option>
                    <option value="jaringan" {{ request('mata_kuliah') == 'jaringan' ? 'selected' : '' }}>🌐 Jaringan Komputer</option>
                    <option value="web" {{ request('mata_kuliah') == 'web' ? 'selected' : '' }}>🌍 Pemrograman Web</option>
                    <option value="mobile" {{ request('mata_kuliah') == 'mobile' ? 'selected' : '' }}>📱 Mobile Development</option>
                    <option value="keamanan" {{ request('mata_kuliah') == 'keamanan' ? 'selected' : '' }}>🔒 Keamanan Sistem</option>
                    <option value="analisis" {{ request('mata_kuliah') == 'analisis' ? 'selected' : '' }}>📊 Analisis Sistem</option>
                </select>
                
                <!-- Kategori Filter -->
                <select name="kategori" class="w-full py-3 px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Kategori</option>
                    <option value="materi" {{ request('kategori') == 'materi' ? 'selected' : '' }}>📖 Materi Kuliah</option>
                    <option value="latihan" {{ request('kategori') == 'latihan' ? 'selected' : '' }}>📝 Latihan Soal</option>
                    <option value="ujian" {{ request('kategori') == 'ujian' ? 'selected' : '' }}>📋 Soal Ujian</option>
                    <option value="project" {{ request('kategori') == 'project' ? 'selected' : '' }}>💼 Project Template</option>
                    <option value="referensi" {{ request('kategori') == 'referensi' ? 'selected' : '' }}>📚 Referensi</option>
                </select>
                
                <!-- Tingkat Kesulitan -->
                <select name="tingkat" class="w-full py-3 px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Tingkat</option>
                    <option value="pemula" {{ request('tingkat') == 'pemula' ? 'selected' : '' }}>🌱 Pemula</option>
                    <option value="menengah" {{ request('tingkat') == 'menengah' ? 'selected' : '' }}>🌿 Menengah</option>
                    <option value="lanjut" {{ request('tingkat') == 'lanjut' ? 'selected' : '' }}>🌳 Lanjut</option>
                    <option value="expert" {{ request('tingkat') == 'expert' ? 'selected' : '' }}>🏆 Expert</option>
                </select>
                
                <!-- Sort -->
                <select name="sort" class="w-full py-3 px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>🕒 Terbaru</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>⏰ Terlama</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>🔥 Populer</option>
                    <option value="most_downloaded" {{ request('sort') == 'most_downloaded' ? 'selected' : '' }}>⬇️ Paling Banyak Diunduh</option>
                </select>
                
                <!-- Filter Button -->
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i>
                        Filter
                    </button>
                    <a href="{{ route('bank-materi') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-refresh"></i>
                    </a>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'mata_kuliah', 'kategori', 'tingkat', 'sort']))
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
                
                @if(request('mata_kuliah'))
                <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(request('mata_kuliah')) }}
                    <a href="{{ request()->fullUrlWithoutQuery('mata_kuliah') }}" class="hover:text-blue-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif
                
                @if(request('kategori'))
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(request('kategori')) }}
                    <a href="{{ request()->fullUrlWithoutQuery('kategori') }}" class="hover:text-green-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                @if(request('tingkat'))
                <span class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(request('tingkat')) }}
                    <a href="{{ request()->fullUrlWithoutQuery('tingkat') }}" class="hover:text-purple-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                <a href="{{ route('bank-materi') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
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
                        Ada {{ $materials->total() }} materi
                    </h4>
                    @if(request()->hasAny(['search', 'mata_kuliah', 'kategori', 'tingkat']))
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Hasil Filter
                    </span>
                    @endif
                </div>
                
                <a href="#" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-plus"></i>
                    Upload Materi
                </a>
            </div>
        </div>

        <!-- Materials Grid -->
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($materials as $index => $materi)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms" data-wow-duration="1500ms">
                
                <!-- Content -->
                <div class="p-6">
                    <!-- Header with Icon -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-sky-500 rounded-xl flex items-center justify-center">
                                @php
                                    $fileType = 'book';
                                    if ($materi->files && $materi->files->first()) {
                                        $filePath = $materi->files->first()->file_path;
                                        if (Str::endsWith($filePath, '.pdf')) {
                                            $fileType = 'file-pdf';
                                        } elseif (Str::endsWith($filePath, ['.doc', '.docx'])) {
                                            $fileType = 'file-word';
                                        } elseif (Str::endsWith($filePath, ['.ppt', '.pptx'])) {
                                            $fileType = 'file-powerpoint';
                                        }
                                    }
                                @endphp
                                <i class="fa-solid fa-{{ $fileType }} text-white text-xl"></i>
                            </div>
                            <div>
                                <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase">
                                    {{ $materi->kategori ?? 'Materi' }}
                                </span>
                            </div>
                        </div>
                        
                        @if($materi->total_halaman)
                        <span class="text-xs bg-sky-100 text-sky-700 px-2 py-1 rounded-full font-medium">
                            {{ $materi->total_halaman }} hal
                        </span>
                        @endif
                    </div>

                    <!-- Mata Kuliah -->
                    <div class="mb-3">
                        <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">
                            {{ $materi->mataKuliah->nama ?? 'Sistem Informasi' }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-sky-600 transition-colors line-clamp-2">
                        <a href="#" onclick="showMateriDetail('{{ $materi->id }}')">{{ $materi->judul }}</a>
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed line-clamp-3">
                        {{ Str::limit($materi->deskripsi, 120) }}
                    </p>

                    <!-- Difficulty & Info -->
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-1">
                                @php
                                    $difficulty = $materi->tingkat_kesulitan ?? 'menengah';
                                    $stars = match($difficulty) {
                                        'pemula' => 2,
                                        'menengah' => 3,
                                        'lanjut' => 4,
                                        'expert' => 5,
                                        default => 3
                                    };
                                @endphp
                                @for($i = 1; $i <= 5; $i++)
                                <i class="fa-solid fa-star {{ $i <= $stars ? 'text-yellow-500' : 'text-gray-300' }} text-xs"></i>
                                @endfor
                                <span class="ml-1">{{ ucfirst($difficulty) }}</span>
                            </div>
                            @if($materi->total_soal)
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-question-circle text-sky-500"></i>
                                <span>{{ $materi->total_soal }} soal</span>
                            </div>
                            @endif
                        </div>
                        <span class="text-xs bg-gray-100 px-2 py-1 rounded">
                            {{ $materi->tanggal_publikasi ? $materi->tanggal_publikasi->format('M Y') : 'Terbaru' }}
                        </span>
                    </div>

                    <!-- Download Stats -->
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-1">
                            <i class="fa-solid fa-download text-sky-500"></i>
                            <span>{{ $materi->download_count ?? rand(10, 100) }}x</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="fa-solid fa-eye text-sky-500"></i>
                            <span>{{ $materi->view_count ?? rand(50, 500) }}x</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="fa-solid fa-heart text-red-500"></i>
                            <span>{{ $materi->like_count ?? rand(5, 50) }}</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">{{ substr($materi->penulis ?? 'HMSI', 0, 1) }}</span>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-700">{{ $materi->penulis ?? 'Tim HMSI' }}</span>
                                <p class="text-xs text-gray-500">Kontributor</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-2">
                            @if($materi->files && $materi->files->count() > 0)
                            <button onclick="downloadMateri('{{ $materi->id }}')" class="w-8 h-8 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg flex items-center justify-center transition-colors" title="Download">
                                <i class="fa-solid fa-download text-sm"></i>
                            </button>
                            @endif
                            <button onclick="showMateriDetail('{{ $materi->id }}')" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-lg flex items-center justify-center transition-colors" title="Detail">
                                <i class="fa-solid fa-eye text-sm"></i>
                            </button>
                            <button onclick="bookmarkMateri('{{ $materi->id }}')" class="w-8 h-8 bg-amber-100 hover:bg-amber-200 text-amber-600 rounded-lg flex items-center justify-center transition-colors" title="Bookmark">
                                <i class="fa-solid fa-bookmark text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-book-open text-3xl text-sky-500"></i>
                    </div>
                </div>
                @if(request()->hasAny(['search', 'mata_kuliah', 'kategori', 'tingkat']))
                <h5 class="text-xl font-bold text-gray-800 mb-3">Tidak ada materi yang sesuai</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Coba ubah filter atau kata kunci pencarian!</p>
                <a href="{{ route('bank-materi') }}" 
                   class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-refresh"></i>
                    Reset Filter
                </a>
                @else
                <h5 class="text-xl font-bold text-gray-800 mb-3">Bank Materi Sedang Disiapkan</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Koleksi materi pembelajaran akan segera tersedia untuk mendukung studimu!</p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#" 
                       class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-upload"></i>
                        Upload Materi Pertama
                    </a>
                    <a href="#" 
                       class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-bell"></i>
                        Beritahu Saya
                    </a>
                </div>
                @endif
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($materials->hasPages())
        <div class="mt-12 flex justify-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                {{ $materials->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Quick Categories -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Kategori Populer</h3>
            <p class="text-gray-600">Akses cepat materi berdasarkan kategori</p>
        </div>
        
        <div class="grid md:grid-cols-6 gap-4">
            @php
            $categories = [
                ['icon' => 'fa-code', 'name' => 'Programming', 'count' => '25+', 'color' => 'sky'],
                ['icon' => 'fa-database', 'name' => 'Database', 'count' => '15+', 'color' => 'blue'],
                ['icon' => 'fa-network-wired', 'name' => 'Jaringan', 'count' => '12+', 'color' => 'sky'],
                ['icon' => 'fa-chart-line', 'name' => 'Algoritma', 'count' => '20+', 'color' => 'blue'],
                ['icon' => 'fa-shield-alt', 'name' => 'Keamanan', 'count' => '8+', 'color' => 'sky'],
                ['icon' => 'fa-mobile-alt', 'name' => 'Mobile Dev', 'count' => '10+', 'color' => 'blue'],
            ];
            @endphp
            
            @foreach($categories as $category)
            <a href="{{ route('bank-materi', ['mata_kuliah' => strtolower($category['name'])]) }}" 
               class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer group border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 bg-{{ $category['color'] }}-500 rounded-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fa-solid {{ $category['icon'] }} text-white text-lg"></i>
                    </div>
                    <h6 class="font-semibold text-gray-800 text-sm mb-1">{{ $category['name'] }}</h6>
                    <p class="text-xs text-gray-500">{{ $category['count'] }} materi</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-sky-500 pt-20 pb-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full bg-repeat" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="text-3xl animate-bounce">🚀</span>
                <h3 class="text-3xl font-bold">Bergabung dengan Komunitas Belajar!</h3>
                <span class="text-3xl animate-bounce" style="animation-delay: 0.5s;">📚</span>
            </div>
            
            <p class="text-xl text-sky-100 mb-8 max-w-2xl mx-auto">
                Kontribusi materimu dan bantu teman-teman untuk belajar lebih baik. Sharing is caring!
            </p>
            
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <i class="fa-solid fa-upload text-lg"></i>
                    Upload Materi
                </a>
                
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-brands fa-discord text-lg"></i>
                    Join Discord
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Detail Modal -->
<div id="materiDetailModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-sky-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-book text-sky-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Detail Materi</h3>
                    </div>
                    <button onclick="closeDetailModal()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-times text-gray-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div id="materiDetailContent" class="p-6">
                <div class="flex items-center justify-center py-8">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-sky-500"></div>
                    <span class="ml-3 text-gray-600">Memuat...</span>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function showMateriDetail(id) {
    const modal = document.getElementById('materiDetailModal');
    const content = document.getElementById('materiDetailContent');
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    // Show loading
    content.innerHTML = `
        <div class="flex items-center justify-center py-8">
            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-sky-500"></div>
            <span class="ml-3 text-gray-600">Memuat...</span>
        </div>
    `;
    
    // Simulate loading and show detail
    setTimeout(() => {
        content.innerHTML = `
            <div class="space-y-6">
                <div class="bg-sky-50 rounded-xl p-6 border-l-4 border-sky-500">
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Algoritma Pemrograman Dasar</h4>
                    <p class="text-gray-600">Materi lengkap tentang konsep dasar algoritma dan pemrograman...</p>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-2">Informasi Materi</h5>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li>📚 Mata Kuliah: Algoritma & Pemrograman</li>
                            <li>📄 Total Halaman: 45</li>
                            <li>⭐ Tingkat: Pemula</li>
                            <li>📅 Dipublikasi: Oktober 2024</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-2">File Tersedia</h5>
                        <ul class="space-y-2">
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">📄 Materi.pdf</span>
                                <button class="text-sky-500 hover:text-sky-600">Download</button>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">💻 Source Code</span>
                                <button class="text-sky-500 hover:text-sky-600">Download</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        `;
    }, 1000);
}

function closeDetailModal() {
    document.getElementById('materiDetailModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function downloadMateri(id) {
    // Implement download functionality
    alert('Download materi ID: ' + id);
}

function bookmarkMateri(id) {
    // Implement bookmark functionality
    alert('Bookmark materi ID: ' + id);
}

// Close modal when clicking outside
document.getElementById('materiDetailModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeDetailModal();
    }
});

// Handle escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeDetailModal();
    }
});
</script>
@endpush
@endsection