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
                    <i class="fa-solid fa-calendar text-white text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">KEGIATAN HMSI</h5>
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-users text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Program & 
                <span class="text-sky-500 relative inline-block">
                    Kegiatan
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">🎯</span>
                    <span class="text-4xl animate-pulse">🚀</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Workshop, seminar, dan pelatihan untuk mengembangkan skill teknologi</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Join dan upgrade kemampuanmu!</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>Networking dengan mahasiswa dan profesional IT ✨</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#activities-list" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-list text-xl"></i>
                    Lihat Kegiatan
                </a>
                
                <a href="#" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-black px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-plus text-lg"></i>
                    Daftar Event
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
                    <span class="text-2xl">📅</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $activities->total() ?? '0' }}</h3>
                <p class="text-gray-600 font-medium">Total Kegiatan</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $upcomingCount ?? '5' }}</h3>
                <p class="text-gray-600 font-medium">Akan Datang</p>
            </div>
            
            <div class="text-center p-6 bg-sky-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-sky-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">👥</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $participantsCount ?? '500+' }}</h3>
                <p class="text-gray-600 font-medium">Peserta Total</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">⭐</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">4.8</h3>
                <p class="text-gray-600 font-medium">Rating Event</p>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Activities List -->
<section id="activities-list" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-20 pb-32 overflow-hidden">
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
                <h3 class="text-xl font-bold text-gray-800">Filter Kegiatan</h3>
            </div>
            
            <form method="GET" action="{{ route('activities') }}" class="grid md:grid-cols-5 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari kegiatan..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Category Filter -->
                <select name="category" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Kategori</option>
                    <option value="workshop" {{ request('category') == 'workshop' ? 'selected' : '' }}>🔧 Workshop</option>
                    <option value="seminar" {{ request('category') == 'seminar' ? 'selected' : '' }}>🎤 Seminar</option>
                    <option value="kompetisi" {{ request('category') == 'kompetisi' ? 'selected' : '' }}>🏆 Kompetisi</option>
                    <option value="pelatihan" {{ request('category') == 'pelatihan' ? 'selected' : '' }}>📚 Pelatihan</option>
                    <option value="webinar" {{ request('category') == 'webinar' ? 'selected' : '' }}>💻 Webinar</option>
                    <option value="sosial" {{ request('category') == 'sosial' ? 'selected' : '' }}>🤝 Sosial</option>
                </select>
                
                <!-- Status Filter -->
                <select name="status" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Status</option>
                    <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>🔜 Akan Datang</option>
                    <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>🔴 Sedang Berlangsung</option>
                    <option value="finished" {{ request('status') == 'finished' ? 'selected' : '' }}>✅ Selesai</option>
                    <option value="open_registration" {{ request('status') == 'open_registration' ? 'selected' : '' }}>📝 Buka Pendaftaran</option>
                </select>
                
                <!-- Sort -->
                <select name="sort" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>🕒 Terbaru</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>⏰ Terlama</option>
                    <option value="start_date" {{ request('sort') == 'start_date' ? 'selected' : '' }}>📅 Tanggal Mulai</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>🔥 Populer</option>
                </select>
                
                <!-- Filter Button -->
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i>
                        Filter
                    </button>
                    <a href="{{ route('activities') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-refresh"></i>
                    </a>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'category', 'status', 'sort']))
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
                
                @if(request('status'))
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(str_replace('_', ' ', request('status'))) }}
                    <a href="{{ request()->fullUrlWithoutQuery('status') }}" class="hover:text-green-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                <a href="{{ route('activities') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
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
                        Ada {{ $activities->total() }} kegiatan
                    </h4>
                    @if(request()->hasAny(['search', 'category', 'status']))
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Hasil Filter
                    </span>
                    @endif
                </div>
                
                <a href="#" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-plus"></i>
                    Daftar Event
                </a>
            </div>
        </div>

        <!-- Activities Grid -->
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($activities as $index => $activity)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms" data-wow-duration="1500ms">
                <div class="relative">
                    @if($activity->image)
                        <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" class="w-full h-60 object-cover">
                    @else
                        <div class="w-full h-60 bg-gradient-to-br from-sky-100 to-blue-100 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fa-solid fa-calendar text-4xl text-sky-500 mb-2"></i>
                                <p class="text-sky-600 font-semibold">Event HMSI</p>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Status Badge -->
                    <div class="absolute top-4 left-4">
                        @php
                            $status = $activity->getStatus();
                            $statusColor = match($status) {
                                'upcoming' => 'bg-blue-500',
                                'ongoing' => 'bg-red-500',
                                'finished' => 'bg-gray-500',
                                'open_registration' => 'bg-green-500',
                                default => 'bg-sky-500'
                            };
                            $statusText = match($status) {
                                'upcoming' => '🔜 Akan Datang',
                                'ongoing' => '🔴 Berlangsung',
                                'finished' => '✅ Selesai',
                                'open_registration' => '📝 Daftar',
                                default => 'Event'
                            };
                        @endphp
                        <span class="{{ $statusColor }} text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $statusText }}
                        </span>
                    </div>
                    
                    <!-- Free Badge -->
                 
                    
                    <!-- Category Badge -->
                    @if($activity->category)
                    <div class="absolute bottom-4 left-4">
                        @php
                            $categoryEmoji = match($activity->category) {
                                'workshop' => '🔧',
                                'seminar' => '🎤',
                                'kompetisi' => '🏆',
                                'pelatihan' => '📚',
                                'webinar' => '💻',
                                'sosial' => '🤝',
                                default => '📅'
                            };
                        @endphp
                        <span class="bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-sm font-medium">
                            {{ $categoryEmoji }} {{ ucfirst($activity->category) }}
                        </span>
                    </div>
                    @endif
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 hover:text-sky-500 transition-colors">
                        <a href="#" class="line-clamp-2">{{ $activity->title }}</a>
                    </h3>
                    
                    <!-- Description -->
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed line-clamp-3">
                        {!! Str::limit(strip_tags($activity->description), 120) !!}
                    </p>
                    
                    <!-- Event Info -->
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <i class="fa-regular fa-calendar text-sky-500 w-4"></i>
                            <span>{{ \Carbon\Carbon::parse($activity->start_date)->format('d M Y') }}</span>
                            @if($activity->end_date && $activity->end_date !== $activity->start_date)
                                <span class="text-gray-400">-</span>
                                <span>{{ \Carbon\Carbon::parse($activity->end_date)->format('d M Y') }}</span>
                            @endif
                        </div>
                        
                        @if($activity->start_time)
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <i class="fa-regular fa-clock text-sky-500 w-4"></i>
                            <span>{{ \Carbon\Carbon::parse($activity->start_time)->format('H:i') }} WIB</span>
                        </div>
                        @endif
                        
                        @if($activity->location)
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <i class="fa-solid fa-location-dot text-sky-500 w-4"></i>
                            <span class="line-clamp-1">{{ $activity->location }}</span>
                        </div>
                        @endif
                        
                        @if($activity->max_participants)
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <i class="fa-solid fa-users text-sky-500 w-4"></i>
                            <span>Maks {{ $activity->max_participants }} peserta</span>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('learnit/assets/images/courses/courses-user1.jpg') }}" 
                                 alt="HMSI" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium text-gray-700">Tim HMSI</span>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-regular fa-calendar text-3xl text-sky-500"></i>
                    </div>
                </div>
                @if(request()->hasAny(['search', 'category', 'status']))
                <h5 class="text-xl font-bold text-gray-800 mb-3">Tidak ada kegiatan yang sesuai</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Coba ubah filter atau kata kunci pencarian!</p>
                <a href="{{ route('activities') }}" 
                   class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-refresh"></i>
                    Reset Filter
                </a>
                @else
                <h5 class="text-xl font-bold text-gray-800 mb-3">Belum ada kegiatan</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Kegiatan menarik akan segera hadir! Stay tuned di media sosial kami.</p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#" 
                       class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-bell"></i>
                        Beritahu Saya
                    </a>
                    <a href="#" 
                       class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-brands fa-instagram"></i>
                        Follow IG
                    </a>
                </div>
                @endif
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($activities->hasPages())
        <div class="mt-12 flex justify-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                {{ $activities->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-gradient-to-r from-sky-500 to-blue-600 pt-20 pb-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full bg-repeat" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="text-3xl animate-bounce">🚀</span>
                <h3 class="text-3xl font-bold">Jangan Sampai Terlewat!</h3>
                <span class="text-3xl animate-bounce" style="animation-delay: 0.5s;">⭐</span>
            </div>
            
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Ikuti terus kegiatan-kegiatan seru dari HMSI dan upgrade skill mu bersama teman-teman seperjuangan!
            </p>
            
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Join Grup WhatsApp
                </a>
                
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-brands fa-instagram text-lg"></i>
                    Follow Instagram
                </a>
            </div>
        </div>
    </div>
</section>
@endsection