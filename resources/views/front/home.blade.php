@extends('front.layout')

@section('content')
<!-- Home Section -->
<section class="banner-six-area bg-image paralax__animation"
    data-background="{{ asset('learnit/assets/images/bg/banner-six-bg.jpg') }}">
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
        <div class="banner-two__content">
            <h5 class="mb-4 text-sky-500 text-sm font-semibold uppercase tracking-widest wow fadeInUp" data-wow-delay="00ms"
                data-wow-duration="1500ms">HIMPUNAN MAHASISWA SISTEM INFORMASI</h5>
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Teknologi Adalah Masa Depan
                <span class="text-sky-500 relative inline-block">
                    Inovasi 
                    <img src="{{ asset('learnit/assets/images/shape/banner-span-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                </span>
            </h1>
            <p class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Wadah kreativitas dan inovasi mahasiswa Sistem Informasi Universitas Siliwangi untuk berkembang dan berkarya dalam dunia teknologi informasi.
            </p>
            <a href="activities" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                Jelajahi Kegiatan
                <i class="fa-light fa-arrow-right-long text-xl"></i>
            </a>
        </div>
    </div>
    <div class="banner-six__image">
        <img class="w-100 rounded-3xl animation__arryLeftRight" src="{{ asset('images/hmsi.png') }}" alt="HMSI Unsil">
        <img class="shape1 animation__arryUpDown" src="{{ asset('learnit/assets/images/shape/banner-six-image-shape1.png') }}" alt="image">
        <img class="shape3" src="{{ asset('learnit/assets/images/shape/banner-six-image-shape3.png') }}" alt="image">
    </div>
    <div class="banner-five__cloud-shape image">
        <img src="{{ asset('learnit/assets/images/bg/cloud-bottom.png') }}" alt="shape">
    </div>
</section>

<!-- About Section -->
<section class="about-five-area pt-32 pb-32">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-five__image">
                    <img class="shape slide-up-down" src="{{ asset('learnit/assets/images/shape/about-five-shape.png') }}" alt="image">
                    <img class="w-100" src="{{ asset('images/SC.png') }}" alt="image">
                    <img class="w-100 bg-shape" src="{{ asset('learnit/assets/images/bg/about-five-image-bg.png') }}" alt="shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header-three">
                    <h5 class="text-sky-500 text-sm font-semibold uppercase tracking-widest mb-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Tentang Kami</h5>
                    <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Himpunan Mahasiswa
                        <span class="text-sky-500 relative inline-block">
                            Sistem Informasi 
                        </span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        HMSI Universitas Siliwangi adalah organisasi kemahasiswaan yang bergerak dalam bidang teknologi informasi dan sistem informasi, menjadi wadah pengembangan potensi mahasiswa.
                    </p>
                </div>
                <div class="about-two__item mt-8 mb-10">
                    <div class="grid md:grid-cols-2 gap-6">
                        <ul class="space-y-4 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-sky-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="white" />
                                    </svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-800">Pengembangan Soft Skills</h4>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-sky-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="white" />
                                    </svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-800">Jaringan Alumni</h4>
                            </li>
                        </ul>
                        <ul class="space-y-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-sky-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="white" />
                                    </svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-800">Project Kolaboratif</h4>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-sky-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg width="12" height="10" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="white" />
                                    </svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-800">Kompetisi & Event</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-6 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <a href="/about" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        Tentang Kami
                        <i class="fa-light fa-arrow-right-long"></i>
                    </a>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-sky-500 rounded-full flex items-center justify-center">
                            <span class="pxl__zigzag">
                                <svg width="24" height="24" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_918_1337)">
                                        <path d="M5.41667 4.33337H9.75L11.9167 9.75004L9.20833 11.375C10.3685 13.7275 12.2725 15.6315 14.625 16.7917L16.25 14.0834L21.6667 16.25V20.5834C21.6667 21.158 21.4384 21.7091 21.0321 22.1154C20.6257 22.5218 20.0746 22.75 19.5 22.75C15.2742 22.4932 11.2885 20.6987 8.2949 17.7051C5.3013 14.7115 3.5068 10.7258 3.25 6.50004C3.25 5.9254 3.47827 5.3743 3.8846 4.96798C4.29093 4.56165 4.84203 4.33337 5.41667 4.33337Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.25 7.58337C16.8246 7.58337 17.3757 7.81165 17.7821 8.21798C18.1884 8.6243 18.4167 9.1754 18.4167 9.75004" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.25 3.25C17.9739 3.25 19.6272 3.93482 20.8462 5.15381C22.0652 6.37279 22.75 8.02609 22.75 9.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="26" height="26" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <span class="text-sm font-medium text-gray-500">Hubungi Kami</span>
                            <h5 class="text-lg font-bold text-gray-800">@hmsi_unsil</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menfess Section -->
<section class="relative bg-slate-50 pt-32 pb-32">
    <!-- Background Shapes -->
    <div class="absolute top-10 left-10 opacity-20">
        <div class="w-20 h-20 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute top-1/2 right-10 opacity-10">
        <div class="w-32 h-32 bg-sky-400 rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-10">
                    <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm mb-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">HMSI MENFESS</h5>
                    <h2 class="text-4xl font-bold text-gray-800 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Cerita & Curhat <span class="text-sky-500 relative">
                            Anonim
                            <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                        </span>
                    </h2>
                </div>
                
              <div class="space-y-6">
    @forelse($recentMenfess ?? [] as $index => $menfess)
    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 wow fadeInDown border border-gray-100" data-wow-delay="{{ $index * 200 }}ms" data-wow-duration="1500ms">
        <!-- Header Card -->
        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-100">
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 bg-sky-500 rounded-full animate-pulse"></div>
                <span class="text-sm font-medium text-gray-700">{{ $menfess->sender_name }}</span>
            </div>
            <span class="text-xs text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                {{ $menfess->created_at->diffForHumans() }}
            </span>
        </div>
        
        <!-- From & To Section -->
        <div class="mb-4 space-y-2">
        
            <div class="flex items-center gap-2 text-sm">
                <span class="text-gray-500 font-medium w-12">Untuk:</span>
                <span class="bg-gradient-to-r from-sky-100 to-sky-100 text-sky-700 px-3 py-1 rounded-full text-xs font-medium">
                    {{  $menfess->to_name ?: 'Semua' }}
                </span>
            </div>
        </div>
        
        <!-- Message Content -->
        <div class="mb-4">
            <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-xl p-4 border-l-4 border-sky-500">
                <div class="text-gray-700 leading-relaxed prose prose-sm max-w-none">
                    {!! Str::limit($menfess->content, 200) !!}
                </div>
            </div>
        </div>
        
        <!-- Spotify Embed -->
        @if($menfess->spotify_link)
        <div class="mb-4">
            @php
                $spotifyId = null;
                $isValidSpotify = false;
                
                // Check for Spotify track URL patterns
                if (preg_match('/spotify\.com\/track\/([a-zA-Z0-9]+)/', $menfess->spotify_link, $matches)) {
                    $spotifyId = $matches[1];
                    $isValidSpotify = true;
                } elseif (preg_match('/open\.spotify\.com\/track\/([a-zA-Z0-9]+)/', $menfess->spotify_link, $matches)) {
                    $spotifyId = $matches[1];
                    $isValidSpotify = true;
                } elseif (preg_match('/spotify:track:([a-zA-Z0-9]+)/', $menfess->spotify_link, $matches)) {
                    $spotifyId = $matches[1];
                    $isValidSpotify = true;
                }
            @endphp
            
            @if($isValidSpotify && $spotifyId)
            <div class="bg-gradient-to-r from-green-400 to-green-500 rounded-xl overflow-hidden shadow-lg">
                
                <div class="bg-white">
                    <iframe src="https://open.spotify.com/embed/track/{{ $spotifyId }}?utm_source=generator&theme=0" 
                            width="100%" 
                            height="152" 
                            frameborder="0" 
                            allowfullscreen="" 
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                            loading="lazy"
                            class="rounded-b-xl">
                    </iframe>
                </div>
            </div>
            @endif
        </div>
        @endif
        
        <!-- Tags & Footer -->
        <div class="flex items-center justify-between pt-3 border-t border-gray-100">
            <!-- Tags -->
            @if(isset($menfess->tags) && $menfess->tags->count() > 0)
            <div class="flex flex-wrap gap-2">
                @foreach($menfess->tags->take(3) as $tag)
                <span class="bg-gradient-to-r from-sky-400 to-sky-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                    #{{ $tag->name }}
                </span>
                @endforeach
            </div>
            @else
            <div class="flex items-center gap-2 text-gray-400">
                <i class="fa-regular fa-heart text-sm"></i>
                <span class="text-xs">Pesan dari hati</span>
            </div>
            @endif
            
            <!-- Status Badge -->
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                <span class="text-xs text-gray-500 font-medium">Terkirim</span>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center py-16 bg-white rounded-2xl border border-gray-100">
        <div class="mb-6">
            <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-regular fa-envelope text-3xl text-sky-500"></i>
            </div>
        </div>
        <h5 class="text-xl font-bold text-gray-800 mb-3">Belum ada menfess</h5>
        <p class="text-gray-500 mb-6 max-w-sm mx-auto">Jadilah yang pertama berbagi cerita, curhat, atau perasaan secara anonim!</p>
        <a href="{{ route('sifess.index') }}" 
           class="inline-flex items-center gap-2 bg-gradient-to-r from-sky-500 to-sky-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-sky-600 hover:to-sky-700 transition-all duration-300 shadow-lg hover:shadow-xl">
            <i class="fa-regular fa-paper-plane"></i>
            Kirim Menfess Pertama
        </a>
    </div>
    @endforelse
    
    @if(isset($recentMenfess) && $recentMenfess->count() > 0)
    <div class="text-center pt-8">
        <a href="{{ route('sifess.index') }}" 
           class="inline-flex items-center gap-3 bg-gradient-to-r from-sky-500 to-sky-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-sky-600 hover:to-sky-700 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
            <i class="fa-regular fa-comments text-lg"></i>
            Lihat Semua Menfess
            <i class="fa-light fa-arrow-right-long text-lg"></i>
        </a>
    </div>
    @endif
</div>
            </div>
            
            <!-- Illustration -->
            <div class="order-1 lg:order-2 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="relative flex items-center justify-center p-10">
                    <!-- Main illustration container -->
                    <div class="relative w-full max-w-md bg-gradient-to-br from-sky-400 to-sky-600 rounded-3xl min-h-96 flex items-center justify-center overflow-hidden">
                        <!-- Background pattern -->
                        <div class="absolute inset-0 opacity-10">
                            <div class="w-full h-full bg-repeat opacity-20" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.1\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
                        </div>
                        
                        <!-- Main icon -->
                        <div class="relative z-10 w-48 h-48 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-solid fa-comments text-6xl text-white/80"></i>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute top-16 -right-4 bg-white px-4 py-3 rounded-full shadow-lg flex items-center gap-2 font-semibold text-gray-700 animate-bounce z-20">
                            <i class="fa-solid fa-heart text-sky-500"></i>
                            <span class="text-sm">Anonymous</span>
                        </div>
                        
                        <div class="absolute top-64 -left-6 bg-white px-4 py-3 rounded-full shadow-lg flex items-center gap-2 font-semibold text-gray-700 animate-bounce z-20" style="animation-delay: 1s;">
                            <i class="fa-brands fa-spotify text-green-500"></i>
                            <span class="text-sm">Music</span>
                        </div>
                        
                        <div class="absolute bottom-20 right-10 bg-white px-4 py-3 rounded-full shadow-lg flex items-center gap-2 font-semibold text-gray-700 animate-bounce z-20" style="animation-delay: 2s;">
                            <i class="fa-solid fa-comment text-sky-500"></i>
                            <span class="text-sm">Story</span>
                        </div>
                        
                        <!-- Additional decorative elements -->
                        <div class="absolute top-1/4 left-4 w-6 h-6 bg-white/30 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                        <div class="absolute bottom-1/3 right-6 w-4 h-4 bg-white/40 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activities Section -->
<section class="courses-six-area pt-32 pb-32">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm mb-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Kegiatan Terbaru</h5>
            <h2 class="text-4xl font-bold text-gray-800 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Program & <span class="text-sky-500 relative inline-block">
                    Kegiatan
                    <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                </span> HMSI
            </h2>
        </div>
        
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($recentActivities ?? [] as $index => $activity)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 wow fadeInUp" data-wow-delay="{{ $index * 200 }}ms" data-wow-duration="1500ms">
                <div class="relative">
                    @if($activity->image)
                        <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" class="w-full h-60 object-cover">
                    @else
                        <img src="{{ asset('learnit/assets/images/courses/courses-six-image1.png') }}" alt="{{ $activity->title }}" class="w-full h-60 object-cover">
                    @endif
                   
                </div>
                
                <div class="p-6">
           
                    
                    <h3 class="text-xl font-bold text-gray-800 mb-4 hover:text-sky-500 transition-colors">
                        <a href="#" class="line-clamp-2">{{ $activity->title }}</a>
                    </h3>
                    <!-- desc -->
                    <p class="text-gray-600 mb-4 ">{!!  Str::limit($activity->description, 100) !!}</p>
                    
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                      
                        <div class="flex items-center gap-1">
                            <i class="fa-regular fa-clock text-sky-500"></i>
                            <span>{{ $activity->start_date}} </span>
                        </div>
                    </div>
                    
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
            <div class="col-span-full text-center py-12">
                <div class="mb-4">
                    <i class="fa-regular fa-calendar text-5xl text-gray-300"></i>
                </div>
                <h5 class="text-xl font-semibold text-gray-600 mb-2">Belum ada kegiatan</h5>
                <p class="text-gray-400">Kegiatan akan segera hadir!</p>
            </div>
            @endforelse
        </div>
        
        @if(isset($recentActivities) && $recentActivities->count() > 0)
        <div class="text-center mt-12">
            <a href="{{ route('activities') }}" 
               class="inline-flex items-center gap-2 bg-sky-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-sky-600 transition-colors">
                Lihat Semua Kegiatan
                <i class="fa-light fa-arrow-right-long"></i>
            </a>
        </div>
        @endif
    </div>
</section>


<section class="relative bg-gradient-to-br from-sky-50 via-white to-sky-50 pt-32 pb-32 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-10 opacity-20">
        <div class="w-24 h-24 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-10 opacity-10">
        <div class="w-32 h-32 bg-sky-400 rounded-full animate-bounce"></div>
    </div>
    <div class="absolute top-1/2 left-1/4 opacity-5">
        <div class="w-40 h-40 bg-sky-300 rounded-full animate-ping"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm mb-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <i class="fa-solid fa-graduation-cap mr-2"></i>
                BANK MATERI AKADEMIK
            </h5>
            <h2 class="text-4xl font-bold text-gray-800 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Koleksi <span class="text-sky-500 relative inline-block">
                    Materi Kuliah
                </span> & Referensi
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto mt-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Akses berbagai materi pembelajaran, latihan soal, dan referensi akademik untuk mendukung perjalanan studimu di Sistem Informasi
            </p>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-book text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalMateri ?? '50+' }}</h3>
                        <p class="text-gray-600 text-sm">Materi Kuliah</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-clipboard text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalSoal ?? '500+' }}</h3>
                        <p class="text-gray-600 text-sm">Bank Soal</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-sky-400 to-sky-500 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-file-pdf text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalPdf ?? '100+' }}</h3>
                        <p class="text-gray-600 text-sm">File PDF</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-sky-400 to-sky-500 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-users text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalMahasiswa ?? '200+' }}</h3>
                        <p class="text-gray-600 text-sm">Mahasiswa Aktif</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Material Grid -->
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($recentBankMateri ?? [] as $index => $materi)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 wow fadeInUp" data-wow-delay="{{ $index * 200 }}ms" data-wow-duration="1500ms">
                
                <!-- Content -->
                <div class="p-6">
                    <!-- Header with Icon -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-xl flex items-center justify-center">
                                @if($materi->files && $materi->files->first() && Str::endsWith($materi->files->first()->file_path, '.pdf'))
                                    <i class="fa-solid fa-file-pdf text-white text-xl"></i>
                                @else
                                    <i class="fa-solid fa-book text-white text-xl"></i>
                                @endif
                            </div>
                            <div>
                                <span class="bg-gradient-to-r from-sky-500 to-sky-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase">
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
                        <span class="bg-gradient-to-r from-sky-100 to-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">
                            {{ $materi->mataKuliah->nama ?? 'Sistem Informasi' }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-sky-600 transition-colors line-clamp-2">
                        <a href="#" class="">{{ $materi->judul }}</a>
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed line-clamp-3">
                        {{ Str::limit($materi->deskripsi, 120) }}
                    </p>

                    <!-- Meta Info -->
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-star text-yellow-500"></i>
                                <span>{{ $materi->tingkat_kesulitan ?? 'Menengah' }}</span>
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

                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">{{ substr($materi->penulis ?? 'HMSI', 0, 1) }}</span>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-700">{{ $materi->penulis ?? 'Tim HMSI' }}</span>
                                <p class="text-xs text-gray-500">Kontributor</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-2">
                            <button class="w-8 h-8 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg flex items-center justify-center transition-colors">
                                <i class="fa-solid fa-download text-sm"></i>
                            </button>
                            <button class="w-8 h-8 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-lg flex items-center justify-center transition-colors">
                                <i class="fa-solid fa-eye text-sm"></i>
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
                <h5 class="text-xl font-bold text-gray-800 mb-3">Bank Materi Sedang Disiapkan</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Koleksi materi pembelajaran akan segera tersedia untuk mendukung studimu!</p>
                <a href="#" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-sky-500 to-sky-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-sky-600 hover:to-sky-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-bell"></i>
                    Beritahu Saya
                </a>
            </div>
            @endforelse
        </div>

        <!-- CTA Section -->
        @if(isset($recentBankMateri) && $recentBankMateri->count() > 0)
        <div class="text-center mt-12">
            <div class="bg-gradient-to-r from-sky-500 to-sky-600 rounded-2xl p-8 text-white">
                <h4 class="text-2xl text-white font-bold mb-4">Jelajahi Semua Materi</h4>
                <p class="text-sky-100 mb-6 max-w-md mx-auto">
                    Akses koleksi lengkap materi pembelajaran, latihan soal, dan referensi akademik untuk semua mata kuliah
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('bank-materi') ?? '#' }}" 
                       class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                        <i class="fa-solid fa-books text-lg"></i>
                        Lihat Semua Materi
                        <i class="fa-solid fa-arrow-right text-lg"></i>
                    </a>
                    <a href="{{ route('bank-materi.create') ?? '#' }}" 
                       class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                        <i class="fa-solid fa-upload text-lg"></i>
                        Kontribusi Materi
                    </a>
                </div>
            </div>
        </div>
        @endif

        <!-- Quick Categories -->
        <div class="mt-16 grid md:grid-cols-6 gap-4">
            @php
            $categories = [
                ['icon' => 'fa-code', 'name' => 'Programming', 'color' => 'sky'],
                ['icon' => 'fa-database', 'name' => 'Database', 'color' => 'sky'],
                ['icon' => 'fa-network-wired', 'name' => 'Jaringan', 'color' => 'sky'],
                ['icon' => 'fa-chart-line', 'name' => 'Algoritma', 'color' => 'sky'],
                ['icon' => 'fa-shield-alt', 'name' => 'Keamanan', 'color' => 'sky'],
                ['icon' => 'fa-mobile-alt', 'name' => 'Mobile Dev', 'color' => 'sky'],
            ];
            @endphp
            
            @foreach($categories as $category)
            <div class="bg-white rounded-xl p-4 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-{{ $category['color'] }}-400 to-{{ $category['color'] }}-600 rounded-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fa-solid {{ $category['icon'] }} text-white text-lg"></i>
                    </div>
                    <h6 class="font-semibold text-gray-800 text-sm">{{ $category['name'] }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Team Section -->
<section class="relative bg-gradient-to-br from-sky-50 via-white to-sky-50 pt-32 pb-32 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 left-10 opacity-20">
        <div class="w-32 h-32 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-24 h-24 bg-sky-400 rounded-full animate-bounce"></div>
    </div>
    <div class="absolute top-1/3 right-1/4 opacity-10">
        <div class="w-40 h-40 bg-sky-300 rounded-full animate-ping"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-users text-white text-xl"></i>
                </div>
                <h5 class="text-sky-600 uppercase tracking-widest font-semibold text-sm">TIM KEREN KAMI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-star text-white text-xl"></i>
                </div>
            </div>
            
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Kenal Yuk Sama <span class="text-sky-600 relative inline-block">
                    Pengurus HMSI
                </span> 
                <div class="inline-flex items-center gap-2 ml-2">
                    <span class="text-2xl animate-bounce">🚀</span>
                    <span class="text-2xl animate-pulse">✨</span>
                </div>
            </h2>
            
            <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Tim solid yang siap membantu kalian berkembang di dunia teknologi! 
                <span class="text-sky-600 font-semibold">Jangan malu buat nyapa ya!</span> 😊
            </p>
        </div>

        <!-- Fun Stats -->
        <div class="grid md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🧠</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">{{ $teamMembers->count() }}+</h3>
                    <p class="text-gray-600 text-sm font-medium">Otak Jenius</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">☕</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">100+</h3>
                    <p class="text-gray-600 text-sm font-medium">Cup Kopi/Hari</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-400 to-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎉</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">24/7</h3>
                    <p class="text-gray-600 text-sm font-medium">Siap Bantu</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-400 to-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">💡</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">∞</h3>
                    <p class="text-gray-600 text-sm font-medium">Ide Kreatif</p>
                </div>
            </div>
        </div>

        <!-- Team Grid -->
  <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-8">
    @forelse($teamMembers as $index => $member)
    @php
        $roleInfo = $member->getRoleDisplayName();
        $socialMedia = $member->getFormattedSocialMedia();
    @endphp
    
    <div class="group wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms" data-wow-duration="1500ms">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 hover:rotate-1 relative">
            <!-- Cute Badge -->
            <div class="absolute -top-3 -right-3 w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center z-10 shadow-lg group-hover:animate-bounce">
                <span class="text-xl">{{ $roleInfo['emoji'] }}</span>
            </div>

            <!-- Avatar Section - Full Image -->
            <div class="relative h-full bg-gradient-to-br from-sky-100 to-sky-100 overflow-hidden">
                @if($member->avatar_url)
                    <img src="{{ $member->getFilamentAvatarUrl() }}" 
                         alt="{{ $member->name }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                @else
                    <!-- Fallback with initials -->
                    <div class="w-full h-full bg-gradient-to-br from-sky-500 to-sky-600 flex items-center justify-center">
                        <span class="text-white text-6xl font-bold">
                            {{ substr($member->name, 0, 1) }}
                        </span>
                    </div>
                @endif
                
                <!-- Online Status - positioned on image -->
                <div class="absolute bottom-4 right-4 w-6 h-6 bg-green-500 rounded-full border-3 border-white flex items-center justify-center shadow-lg">
                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                </div>
                
                <!-- Role Badge on image -->
                <div class="absolute bottom-4 left-4">
                    <span class="bg-gradient-to-r from-sky-500 to-sky-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase backdrop-blur-sm bg-opacity-90">
                        {{ $roleInfo['name'] }}
                    </span>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-6">
                <!-- Name -->
                <div class="text-center mb-4">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">{{ $member->name }}</h4>
                    <div class="w-12 h-1 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full mx-auto"></div>
                </div>

                <!-- Fun Fact -->
                @if($member->fun_fact)
                <div class="mb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-lg">🌟</span>
                        <span class="text-sm font-semibold text-sky-600">Fun Fact:</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{ $member->fun_fact }}</p>
                </div>
                @endif

                <!-- Hobby -->
                @if($member->hobby)
                <div class="mb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-lg">🎯</span>
                        <span class="text-sm font-semibold text-sky-600">Hobi:</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{ $member->hobby }}</p>
                </div>
                @endif

                <!-- Bio -->
                @if($member->bio)
                <div class="mb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-lg">💬</span>
                        <span class="text-sm font-semibold text-sky-600">About:</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{ Str::limit($member->bio, 80) }}</p>
                </div>
                @endif

                <!-- Social Media -->
              <div class="flex items-center justify-between pt-4 border-t border-gray-100">
    <div class="flex items-center gap-2">
        <span class="text-xs text-gray-500 font-medium">Let's Connect!</span>
        <span class="text-sm">👋</span>
    </div>
    
    <div class="flex items-center gap-2">
        @php
            $socialMediaArray = $socialMedia instanceof \Illuminate\Support\Collection 
                ? $socialMedia->take(3)->toArray() 
                : array_slice($socialMedia->toArray(), 0, 3);
        @endphp
        
        @forelse($socialMediaArray as $social)
        <a href="{{ $social['url'] }}" target="_blank" 
           class="w-8 h-8 bg-gradient-to-r from-sky-100 to-sky-100 hover:from-sky-500 hover:to-sky-600 text-sky-600 hover:text-white rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
            <i class="{{ $social['icon'] }} text-sm"></i>
        </a>
        @empty
        <div class="flex items-center gap-1 text-gray-400">
            <i class="fa-solid fa-heart text-sm"></i>
            <span class="text-xs">Tim HMSI</span>
        </div>
        @endforelse
    </div>
</div>
            </div>

            <!-- Hover Effect Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-sky-500/0 to-sky-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl"></div>
        </div>
    </div>
    @empty
    <!-- Empty State -->
    <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
        <div class="mb-6">
            <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-users text-3xl text-sky-500"></i>
            </div>
        </div>
        <h5 class="text-xl font-bold text-gray-800 mb-3">Tim Sedang Disiapkan</h5>
        <p class="text-gray-500 mb-6 max-w-sm mx-auto">Pengurus HMSI akan segera diperkenalkan!</p>
    </div>
    @endforelse
</div>

        <!-- Fun CTA Section -->
        @if($teamMembers->count() > 0)
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-sky-500 to-sky-600 rounded-3xl p-8 text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
                </div>
                
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <span class="text-3xl animate-bounce">🤝</span>
                        <h4 class="text-2xl font-bold text-white">No one nothing can?</h4>
                        <span class="text-3xl animate-bounce">🚀</span>
                    </div>
                    
                    <p class="text-sky-100 mb-6 max-w-md mx-auto">
                        Kami selalu terbuka untuk anggota baru yang passionate dan siap berkontribusi!
                    </p>
                    
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('anggota.index') ?? '#' }}   " 
                           class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                            <span class="text-xl">📝</span>
                            Lihat Semua Anggota
                            <i class="fa-solid fa-arrow-right text-lg"></i>
                        </a>
                        
                      
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute top-10 left-10 w-8 h-8 bg-white/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-6 h-6 bg-white/30 rounded-full animate-bounce"></div>
                <div class="absolute top-1/2 right-20 w-4 h-4 bg-white/25 rounded-full animate-ping"></div>
            </div>
        </div>
        @endif

        <!-- Fun Quote -->
        <div class="text-center mt-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl p-6 shadow-lg max-w-2xl mx-auto">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="text-2xl">💭</span>
                    <h5 class="text-lg font-bold text-gray-800">Motto Tim Kami:</h5>
                    <span class="text-2xl">✨</span>
                </div>
                <p class="text-sky-600 text-xl font-semibold italic">
                    "Coding bareng, makan bareng, sukses bareng!" 
                </p>
                <div class="flex items-center justify-center gap-2 mt-4">
                    <span>🍕</span>
                    <span>💻</span>
                    <span>🎉</span>
                    <span>🏆</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Journal Section -->
<!-- Journal Section -->
<section class="relative bg-gradient-to-br from-sky-50 via-white to-sky-50 pt-32 pb-32 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-16 opacity-20">
        <div class="w-28 h-28 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-24 right-20 opacity-15">
        <div class="w-36 h-36 bg-sky-400 rounded-full animate-bounce"></div>
    </div>
    <div class="absolute top-1/2 left-1/3 opacity-10">
        <div class="w-20 h-20 bg-sky-300 rounded-full animate-ping"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-heart text-white text-xl"></i>
                </div>
                <h5 class="text-sky-600 uppercase tracking-widest font-semibold text-sm">REKOMENDASI SPESIAL</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-star text-white text-xl"></i>
                </div>
            </div>
            
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Rekomendasi <span class="text-sky-600 relative inline-block">
                    Jurnal dari Kami
                    <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                </span>
                <div class="inline-flex items-center gap-2 ml-2">
                    <span class="text-2xl animate-bounce">📖</span>
                    <span class="text-2xl animate-pulse">💝</span>
                </div>
            </h2>
            
            <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Tim HMSI telah kurasi jurnal-jurnal berkualitas tinggi yang cocok untuk mahasiswa Sistem Informasi
                <span class="text-sky-600 font-semibold">Bacaan wajib untuk upgrade skill kamu!</span> 🎯
            </p>
        </div>

        <!-- Recommendation Stats -->
        <div class="grid md:grid-cols-3 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">{{ $recentJournals->count() ?? '6' }}</h3>
                    <p class="text-gray-600 text-sm font-medium">Jurnal Terpilih</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">100%</h3>
                    <p class="text-gray-600 text-sm font-medium">Berkualitas Tinggi</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-400 to-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">SI</h3>
                    <p class="text-gray-600 text-sm font-medium">Fokus</p>
                </div>
            </div>
        </div>

        <!-- Journal Grid -->
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($recentJournals ?? [] as $index => $journal)
            <div class="group wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms" data-wow-duration="1500ms">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 hover:rotate-1 relative">
                    <!-- Recommendation Badge -->
                    <div class="absolute -top-3 -right-3 w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-600 rounded-full flex items-center justify-center z-10 shadow-lg group-hover:animate-bounce">
                        <span class="text-xl">⭐</span>
                    </div>

                    <!-- HMSI Recommended Badge -->
                    <div class="absolute -top-3 -left-3 bg-gradient-to-r from-sky-500 to-sky-600 text-white px-3 py-1 rounded-full text-xs font-bold z-10 shadow-lg">
                        HMSI PICK
                    </div>

                    <!-- Header Section -->
                    <div class="relative bg-gradient-to-br from-sky-100 to-sky-100 p-6">
                        <!-- DOI Badge -->
                        @if($journal->doi)
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-green-500 to-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase">
                                DOI
                            </span>
                        </div>
                        @endif
                        
                        <!-- Publication Year -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/80 backdrop-blur-sm text-sky-700 px-3 py-1 rounded-full text-sm font-bold">
                                {{ $journal->publication_year ?? date('Y') }}
                            </span>
                        </div>

                        <!-- Journal Icon -->
                        <div class="flex items-center justify-center mt-8 mb-4">
                            <div class="w-20 h-20 bg-gradient-to-br from-sky-500 to-sky-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-file-alt text-white text-3xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <!-- Journal Name -->
                        <div class="mb-3">
                            <span class="bg-gradient-to-r from-sky-100 to-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $journal->journal_name ?? 'Journal of Information Systems' }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-sky-600 transition-colors line-clamp-2">
                            <a href="#" class="">{{ $journal->title }}</a>
                        </h3>

                        <!-- HMSI Recommendation Note -->
                        <div class="mb-4">
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl p-3 border-l-4 border-amber-500">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">💡</span>
                                    <span class="text-sm font-semibold text-amber-700">Kenapa Kami Rekomendasikan:</span>
                                </div>
                                <p class="text-amber-700 text-sm leading-relaxed">
                                    @php
                                    $recommendations = [
                                        "Sangat relevan dengan kurikulum SI dan mudah dipahami",
                                        "Penelitian terbaru yang sesuai dengan trend teknologi",
                                        "Metodologi yang solid dan bisa dijadikan referensi skripsi",
                                        "Studi kasus yang applicable untuk project kuliah",
                                        "Insight mendalam tentang sistem informasi modern",
                                        "Best practice yang bisa diterapkan di industri"
                                    ];
                                    echo $recommendations[array_rand($recommendations)];
                                    @endphp
                                </p>
                            </div>
                        </div>

                        <!-- Authors -->
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">👥</span>
                                <span class="text-sm font-semibold text-sky-600">Penulis:</span>
                            </div>
                            <p class="text-gray-600 text-sm">{{ Str::limit($journal->authors, 80) }}</p>
                        </div>

                        <!-- Abstract -->
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">📝</span>
                                <span class="text-sm font-semibold text-sky-600">Abstract:</span>
                            </div>
                            <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-xl p-3 border-l-4 border-sky-500">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    {{ Str::limit($journal->abstract, 120) }}
                                </p>
                            </div>
                        </div>

                        <!-- Keywords -->
                        @if($journal->keywords)
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">🏷️</span>
                                <span class="text-sm font-semibold text-sky-600">Keywords:</span>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $journal->keywords) as $keyword)
                                <span class="bg-gradient-to-r from-sky-400 to-sky-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                                    {{ trim($keyword) }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Relevance Score -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-sky-600">Relevansi untuk Mahasiswa SI:</span>
                                <div class="flex items-center gap-1">
                                    @for($i = 1; $i <= 5; $i++)
                                    <i class="fa-solid fa-star text-amber-400 text-sm"></i>
                                    @endfor
                                    <span class="text-sm font-bold text-gray-700 ml-1">5.0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Journal Info -->
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <div class="flex items-center gap-4">
                                @if($journal->volume)
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-book text-sky-500"></i>
                                    <span>Vol. {{ $journal->volume }}</span>
                                </div>
                                @endif
                                @if($journal->issue)
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-hashtag text-sky-500"></i>
                                    <span>Issue {{ $journal->issue }}</span>
                                </div>
                                @endif
                            </div>
                            @if($journal->pages)
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">
                                pp. {{ $journal->pages }}
                            </span>
                            @endif
                        </div>

                        <!-- Footer -->
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-r from-sky-500 to-sky-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">📚</span>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-700">Tim Kurasi HMSI</span>
                                    <p class="text-xs text-gray-500">Recommended by</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                @if($journal->file_path)
                                <button class="w-8 h-8 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg flex items-center justify-center transition-colors" title="Download">
                                    <i class="fa-solid fa-download text-sm"></i>
                                </button>
                                @endif
                                @if($journal->doi)
                                <button class="w-8 h-8 bg-green-100 hover:bg-green-200 text-green-600 rounded-lg flex items-center justify-center transition-colors" title="DOI Link">
                                    <i class="fa-solid fa-external-link text-sm"></i>
                                </button>
                                @endif
                                <button class="w-8 h-8 bg-amber-100 hover:bg-amber-200 text-amber-600 rounded-lg flex items-center justify-center transition-colors" title="Save to Reading List">
                                    <i class="fa-solid fa-bookmark text-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Hover Effect Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-500/0 to-sky-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl"></div>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-heart text-3xl text-sky-500"></i>
                    </div>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-3">Rekomendasi Sedang Disiapkan</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Tim kurasi HMSI sedang memilih jurnal-jurnal terbaik untuk kalian!</p>
                <a href="#" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-sky-500 to-sky-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-sky-600 hover:to-sky-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-bell"></i>
                    Beritahu Kalau Ada Update
                </a>
            </div>
            @endforelse
        </div>

        <!-- CTA Section -->
        @if(isset($recentJournals) && $recentJournals->count() > 0)
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-sky-500 to-sky-600 rounded-3xl p-8 text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
                </div>
                
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <span class="text-3xl animate-bounce">📚</span>
                        <h4 class="text-2xl font-bold text-white">Jangan Lewatkan Rekomendasi Kami!</h4>
                        <span class="text-3xl animate-bounce" style="animation-delay: 0.5s;">💝</span>
                    </div>
                    
                    <p class="text-sky-100 mb-6 max-w-md mx-auto">
                        Setiap jurnal telah dipilih khusus oleh tim HMSI untuk mendukung perjalanan akademikmu
                    </p>
                    
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('journals') ?? '#' }}" 
                           class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                            <span class="text-xl">📖</span>
                            Lihat Semua Rekomendasi
                            <i class="fa-solid fa-arrow-right text-lg"></i>
                        </a>
                        
                    
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute top-10 left-10 w-8 h-8 bg-white/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-6 h-6 bg-white/30 rounded-full animate-bounce"></div>
                <div class="absolute top-1/2 right-20 w-4 h-4 bg-white/25 rounded-full animate-ping"></div>
            </div>
        </div>
        @endif

        <!-- Why Our Recommendations -->
        <div class="mt-16 grid md:grid-cols-4 gap-6">
            @php
            $whyRecommend = [
                ['icon' => 'fa-graduation-cap', 'title' => 'Akademik Friendly', 'desc' => 'Mudah dipahami mahasiswa'],
                ['icon' => 'fa-chart-line', 'title' => 'High Impact', 'desc' => 'Jurnal bereputasi tinggi'],
                ['icon' => 'fa-lightbulb', 'title' => 'Trending Topic', 'desc' => 'Topik yang sedang hot'],
                ['icon' => 'fa-users', 'title' => 'Community Tested', 'desc' => 'Diuji oleh senior HMSI'],
            ];
            @endphp
            
            @foreach($whyRecommend as $reason)
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-sky-400 to-sky-600 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid {{ $reason['icon'] }} text-white text-lg"></i>
                    </div>
                    <h6 class="font-bold text-gray-800 text-sm mb-2">{{ $reason['title'] }}</h6>
                    <p class="text-gray-600 text-xs">{{ $reason['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Fun Quote for Recommendations -->
        <div class="text-center mt-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl p-6 shadow-lg max-w-2xl mx-auto">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="text-2xl">💝</span>
                    <h5 class="text-lg font-bold text-gray-800">Filosofi Kurasi Kami:</h5>
                    <span class="text-2xl">📚</span>
                </div>
                <p class="text-sky-600 text-xl font-semibold italic">
                    "Bukan sekadar baca, tapi baca yang tepat untuk grow up!" 
                </p>
                <div class="flex items-center justify-center gap-2 mt-4">
                    <span>📖</span>
                    <span>🎯</span>
                    <span>💡</span>
                    <span>🚀</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection