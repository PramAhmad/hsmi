<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMSI Unsil - Himpunan Mahasiswa Sistem Informasi</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('images/logo_hmsi.png') }}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/bootstrap.min.css') }}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{asset('learnit/assets/css/meanmenu.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/magnific-popup.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/animate.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('learnit/assets/css/style.css') }}">
    @stack('css')
    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="{{ asset('images/logo_hmsi.png') }}" alt="HMSI Unsil">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Top header area start here -->
    <div class="header-top-two-area d-none d-lg-block">
        <div class="container">
            <div class="header-top-two__wrp">
                <ul class="info">
                    <li>
                        <svg width="47" height="25" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_906_35)">
                                <path
                                    d="M7.50005 0C4.44464 0 1.95898 2.48566 1.95898 5.54107C1.95898 6.54694 2.41009 7.62875 2.429 7.67438C2.57469 8.02021 2.86218 8.55737 3.06948 8.87223L6.8687 14.6287C7.02417 14.8647 7.25429 15 7.50005 15C7.74582 15 7.97593 14.8647 8.13141 14.6291L11.931 8.87223C12.1386 8.55737 12.4257 8.02021 12.5714 7.67438C12.5903 7.62907 13.0411 6.54726 13.0411 5.54107C13.0411 2.48566 10.5555 0 7.50005 0ZM11.9704 7.42145C11.8403 7.73142 11.5727 8.23109 11.3866 8.51336L7.58708 14.2702C7.51211 14.384 7.48832 14.384 7.41335 14.2702L3.61381 8.51336C3.42769 8.23109 3.16009 7.73109 3.03004 7.42112C3.0245 7.40776 2.61087 6.41199 2.61087 5.54107C2.61087 2.84518 4.80416 0.65189 7.50005 0.65189C10.1959 0.65189 12.3892 2.84518 12.3892 5.54107C12.3892 6.4133 11.9746 7.41167 11.9704 7.42145Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                                <path
                                    d="M7.50016 2.60788C5.88249 2.60788 4.56665 3.92405 4.56665 5.54139C4.56665 7.15873 5.88249 8.47489 7.50016 8.47489C9.11782 8.47489 10.4337 7.15873 10.4337 5.54139C10.4337 3.92405 9.11782 2.60788 7.50016 2.60788ZM7.50016 7.823C6.24233 7.823 5.21854 6.79954 5.21854 5.54139C5.21854 4.28324 6.24233 3.25977 7.50016 3.25977C8.75798 3.25977 9.78177 4.28324 9.78177 5.54139C9.78177 6.79954 8.75798 7.823 7.50016 7.823Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                            </g>
                            <defs>
                                <clipPath id="clip0_906_35">
                                    <rect width="15" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <a href="https://maps.google.com/?q=Universitas+Siliwangi+Tasikmalaya" target="_blank">Jl. Siliwangi No.24, Tasikmalaya, Jawa Barat</a>
                    </li>
                    <li><span></span></li>
                    <li>
                        <svg width="47" height="25" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_906_50)">
                                <path
                                    d="M13.5937 1.875H1.40626C0.6308 1.875 0 2.5058 0 3.28126V11.7188C0 12.4942 0.6308 13.125 1.40626 13.125H13.5937C14.3692 13.125 15 12.4942 15 11.7188V3.28126C15 2.5058 14.3692 1.875 13.5937 1.875ZM13.5937 2.8125C13.6574 2.8125 13.718 2.82571 13.7734 2.84879L7.5 8.28599L1.22656 2.84879C1.28346 2.82493 1.34453 2.8126 1.40623 2.8125H13.5937ZM13.5937 12.1875H1.40626C1.14763 12.1875 0.937496 11.9774 0.937496 11.7187V3.83926L7.19283 9.26056C7.2812 9.33699 7.3906 9.375 7.5 9.375C7.6094 9.375 7.7188 9.33702 7.80717 9.26056L14.0625 3.83926V11.7188C14.0625 11.9774 13.8524 12.1875 13.5937 12.1875Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                            </g>
                            <defs>
                                <clipPath id="clip0_906_50">
                                    <rect width="15" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <a href="mailto:hmsi@unsil.ac.id">hmsi@unsil.ac.id</a>
                    </li>
                </ul>
                <ul class="socila-link">
                    <li>Ikuti Kami :</li>
                    <li><a href="https://facebook.com/hmsi.unsil" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com/hmsi.unsil" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://linkedin.com/company/hmsi-unsil" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://youtube.com/@hmsi.unsil" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area header-two-area">
        <div class="container">
            <div class="header__main header-two__main">
                <!-- Logo Section with Better Styling -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <div class="relative">
                            <img src="{{ asset('images/logo_hmsi.png') }}" 
                                 class="h-12 w-12 rounded-lg group-hover:shadow-lg transition-all duration-300 group-hover:scale-105" 
                                 alt="Logo HMSI Unsil">
                            <!-- Subtle glow effect -->
                            <div class="absolute inset-0 bg-blue-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-sm -z-10"></div>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                HMSI Unsil
                            </h1>
                            <p class="text-sm text-gray-500 -mt-1">Sistem Informasi</p>
                        </div>
                    </a>
                </div>
                
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                            </li>
                            <li>
                                <a href="#0">Akademik <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('bank-materi') }}">Bank Materi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('journals') }}">Jurnal Ilmiah</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('matakuliah') }}">Mata Kuliah</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Tentang Kami <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('about.profil') }}">Profil HMSI</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about.visi-misi') }}">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about.struktur') }}">Struktur Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about.sejarah') }}">Sejarah</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">Kegiatan</a>
                            </li>
                            <li>
                                <a href="{{ route('sifess.index') }}" class="{{ request()->routeIs('sifess.*') ? 'active' : '' }}">SiFess</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-two__info">
                    <button class="search-trigger d-none d-lg-block mr-30">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1460_4184)">
                                <path
                                    d="M15.8178 14.9381L11.913 11.0334C12.8836 9.86621 13.4683 8.36744 13.4683 6.73438C13.4683 3.02103 10.4474 0 6.73421 0C3.02094 0 0 3.02103 0 6.73438C0 10.4475 3.02094 13.4683 6.73421 13.4683C8.36719 13.4683 9.86605 12.8836 11.0332 11.913L14.9381 15.8178C15.0595 15.9393 15.2188 16 15.3779 16C15.5371 16 15.6963 15.9393 15.8179 15.8178C16.0608 15.5748 16.0608 15.181 15.8178 14.9381ZM1.24414 6.73438C1.24414 3.70705 3.70696 1.24414 6.73421 1.24414C9.76137 1.24414 12.2241 3.70705 12.2241 6.73438C12.2241 9.76146 9.76137 12.2241 6.73421 12.2241C3.70696 12.2241 1.24414 9.76146 1.24414 6.73438Z"
                                    fill="#0F0D1D" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1460_4184">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <div class="menu-btns d-none d-lg-flex">
                        <a class="active" href="{{ route('membership.register') }}">Gabung HMSI</a>
                    </div>
                    <button class="menubars" type="button" data-bs-toggle="offcanvas" data-bs-target="#menubar">
                        <svg width="47" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 12H3" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 6H3" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 18H3" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div class="sidebar-area offcanvas offcanvas-end" id="menubar">
        <div class="offcanvas-header">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center gap-3">
                <img src="{{ asset('images/logo_hmsi.png') }}" class="h-10 w-10 rounded-lg" alt="Logo HMSI">
                <div>
                    <h3 class="text-white font-bold mb-0">HMSI</h3>
                    <p class="text-gray-300 text-sm mb-0">Unsil</p>
                </div>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i
                    class="fa-regular fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body sidebar__body">
            <!-- Mobile Menu Navigation -->
            <div class="mobile-menu overflow-hidden">
                <nav>
                    <ul>
                   
                    </ul>
                </nav>
            </div>

            <!-- About Section - Hidden on mobile -->
            <div class="d-none d-lg-block">
                <h5 class="text-white mb-20">Tentang HMSI</h5>
                <p class="paragraph-light fs-16">
                    Himpunan Mahasiswa Sistem Informasi Universitas Siliwangi yang berkomitmen memajukan bidang teknologi informasi dan mengembangkan potensi mahasiswa.
                </p>
            </div>

            <!-- Search Section - Mobile Only -->
            <div class="sidebar__search d-block d-lg-none">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="q" placeholder="Cari di HMSI...">
                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="sidebar__contact-info mt-30">
                <h5 class="text-white mb-20">Info Kontak</h5>
                <ul>
                    <li class="md:text-base text-sm"><i class="fa-solid fa-envelope"></i> <a href="mailto:hmsi@unsil.ac.id" class="md:text-base text-sm">hmsi@unsil.ac.id</a></li>
                    <li class="md:text-base text-sm py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+6285913484854" class="md:text-base text-sm">+62 859 1348 4854</a></li>
                    <li class="md:text-base text-sm"><i class="fa-solid fa-location-dot"></i> <a href="https://maps.google.com/?q=Universitas+Siliwangi+Tasikmalaya" target="_blank" class="md:text-base text-sm">Universitas Siliwangi, Tasikmalaya</a></li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="sidebar__btns my-4">
                <a href="{{ route('membership.register') }}">Daftar Anggota</a>
                <a class="sign-in" href="{{ route('login') }}">Masuk</a>
            </div>

            <!-- Social Links -->
            <div class="sidebar__socials">
                <ul>
                    <li>
                        <a href="https://facebook.com/hmsi.unsil" target="_blank">
                            <i class="fa-brands text-white fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/hmsi.unsil" target="_blank">
                            <i class="fa-brands text-white fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/company/hmsi-unsil" target="_blank">
                            <i class="fa-brands text-white fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@hmsi.unsil" target="_blank">
                            <i class="fa-brands text-white fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fa-light fa-xmark search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="GET" action="{{ route('search') }}">
                    <div class="search-field-holder">
                        <input type="search" name="q" class="main-search-input" placeholder="Cari materi, jurnal, kegiatan...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fullscreen search area end here -->

  @yield('content')
  
    <!-- Footer area start here -->
    <footer class="footer-six-area sub-bg-two">
        <div class="footer-six__shape">
            <img src="{{ asset('learnit/assets/images/shape/footer-six-shape.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="footer__wrp pt-100 pb-100">
                <div class="footer__item footer-about wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <a href="{{ route('home') }}" class="logo mb-30 flex items-center gap-3">
                        <img src="{{ asset('images/logo_hmsi.png') }}" class="h-12 w-12 rounded-lg" alt="Logo HMSI">
                        <div>
                            <h3 class="text-slate-900 font-bold text-lg">HMSI Unsil</h3>
                            <p class="text-gray-300 text-sm">Sistem Informasi</p>
                        </div>
                    </a>
                    <p class="mt-4">Himpunan Mahasiswa Sistem Informasi Universitas Siliwangi - Membangun masa depan teknologi informasi bersama mahasiswa yang berprestasi dan berkarakter.</p>
                    <ul class="mt-25">
                        <li>
                            <svg class="me-1" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.99991 0C3.92603 0 0.611816 3.31421 0.611816 7.38809C0.611816 8.72925 1.21329 10.1717 1.2385 10.2325C1.43276 10.6936 1.81608 11.4098 2.09248 11.8296L7.1581 19.505C7.3654 19.8196 7.67222 20 7.99991 20C8.32759 20 8.63442 19.8196 8.84172 19.5054L13.9078 11.8296C14.1846 11.4098 14.5675 10.6936 14.7618 10.2325C14.787 10.1721 15.388 8.72968 15.388 7.38809C15.388 3.31421 12.0738 0 7.99991 0ZM13.9604 9.89526C13.787 10.3086 13.4302 10.9748 13.182 11.3512L8.11594 19.0269C8.01599 19.1786 7.98426 19.1786 7.88431 19.0269L2.81825 11.3512C2.5701 10.9748 2.21329 10.3081 2.03989 9.89483C2.0325 9.87701 1.481 8.54933 1.481 7.38809C1.481 3.79357 4.40538 0.869187 7.99991 0.869187C11.5944 0.869187 14.5188 3.79357 14.5188 7.38809C14.5188 8.55106 13.966 9.88223 13.9604 9.89526Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                                <path
                                    d="M7.99972 3.47754C5.84283 3.47754 4.08838 5.23243 4.08838 7.38888C4.08838 9.54534 5.84283 11.3002 7.99972 11.3002C10.1566 11.3002 11.9111 9.54534 11.9111 7.38888C11.9111 5.23243 10.1566 3.47754 7.99972 3.47754ZM7.99972 10.431C6.32262 10.431 4.95757 9.06641 4.95757 7.38888C4.95757 5.71135 6.32262 4.34673 7.99972 4.34673C9.67682 4.34673 11.0419 5.71135 11.0419 7.38888C11.0419 9.06641 9.67682 10.431 7.99972 10.431Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                            </svg>
                            <a href="https://maps.google.com/?q=Universitas+Siliwangi+Tasikmalaya" target="_blank" class="p-0 md:text-base text-sm">Jl. Siliwangi No.24, Tasikmalaya, Jawa Barat</a>
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.7719 14.1213C18.7388 14.0938 14.9913 11.4275 13.9794 11.5906C13.4913 11.6769 13.2125 12.01 12.6531 12.6762C12.4985 12.8617 12.3403 13.0443 12.1788 13.2238C11.8252 13.1086 11.4804 12.9682 11.1469 12.8038C9.42533 11.9656 8.03437 10.5747 7.19625 8.85312C7.03179 8.51964 6.89143 8.1748 6.77625 7.82125C6.96 7.65312 7.2175 7.43625 7.3275 7.34375C7.99062 6.7875 8.32312 6.50812 8.40938 6.01937C8.58625 5.0075 5.90625 1.26125 5.87875 1.2275C5.7567 1.05441 5.59775 0.910578 5.41336 0.806386C5.22897 0.702193 5.02374 0.640241 4.8125 0.625C3.72625 0.625 0.625 4.6475 0.625 5.32562C0.625 5.365 0.681875 9.3675 5.6175 14.3881C10.6325 19.3181 14.635 19.375 14.6744 19.375C15.3519 19.375 19.375 16.2737 19.375 15.1875C19.3596 14.9762 19.2975 14.771 19.1932 14.5866C19.0889 14.4022 18.945 14.2433 18.7719 14.1213ZM14.605 18.1213C14.0625 18.075 10.7 17.6319 6.5 13.5063C2.35437 9.28563 1.9225 5.9175 1.87937 5.39563C2.69861 4.10978 3.68799 2.94064 4.82062 1.92C4.84562 1.945 4.87875 1.9825 4.92125 2.03125C5.78989 3.21702 6.53817 4.48642 7.155 5.82062C6.95441 6.02242 6.7424 6.21253 6.52 6.39C6.17512 6.65278 5.85843 6.95063 5.575 7.27875C5.52704 7.34604 5.4929 7.42217 5.47456 7.50274C5.45621 7.5833 5.45403 7.66671 5.46812 7.74813C5.60039 8.32108 5.80297 8.87549 6.07125 9.39875C7.03243 11.3725 8.62735 12.9672 10.6012 13.9281C11.1244 14.1968 11.6788 14.3996 12.2519 14.5319C12.3333 14.5463 12.4168 14.5443 12.4974 14.5259C12.578 14.5075 12.6541 14.4732 12.7213 14.425C13.0505 14.1404 13.3494 13.8225 13.6131 13.4762C13.8094 13.2425 14.0712 12.9306 14.1706 12.8425C15.5082 13.4587 16.7805 14.2079 17.9681 15.0787C18.02 15.1225 18.0569 15.1562 18.0812 15.1781C17.0606 16.3111 15.8912 17.3007 14.605 18.12V18.1213ZM14.375 9.375H15.625C15.6235 8.04937 15.0962 6.77847 14.1589 5.84111C13.2215 4.90375 11.9506 4.37649 10.625 4.375V5.625C11.6193 5.62599 12.5725 6.0214 13.2756 6.72445C13.9786 7.42749 14.374 8.38074 14.375 9.375Z"
                                    fill="oklch(0.685 0.169 237.323)" />
                            </svg>
                            <a href="tel:+6285913484854" class="p-0 md:text-base text-sm">+62 859 1348 4854</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Menu Utama</h3>
                    <ul>
                        <li><a href="{{ route('about.profil') }}"><i class="fa-regular fa-angles-right me-1"></i>Tentang HMSI</a></li>
                        <li><a href="{{ route('bank-materi') }}"><i class="fa-regular fa-angles-right me-1"></i>Bank Materi</a></li>
                        <li><a href="{{ route('journals') }}"><i class="fa-regular fa-angles-right me-1"></i>Jurnal Ilmiah</a></li>
                        <li><a href="{{ route('activities') }}"><i class="fa-regular fa-angles-right me-1"></i>Kegiatan</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fa-regular fa-angles-right me-1"></i>Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Sumber Daya</h3>
                    <ul>
                        <li><a href="{{ route('faq') }}"><i class="fa-regular fa-angles-right me-1"></i>FAQ</a></li>
                        <li><a href="{{ route('privacy') }}"><i class="fa-regular fa-angles-right me-1"></i>Kebijakan Privasi</a></li>
                        <li><a href="{{ route('terms') }}"><i class="fa-regular fa-angles-right me-1"></i>Syarat & Ketentuan</a></li>
                        <li><a href="{{ route('guide') }}"><i class="fa-regular fa-angles-right me-1"></i>Panduan Anggota</a></li>
                        <li><a href="{{ route('sifess.index') }}"><i class="fa-regular fa-angles-right me-1"></i>SiFess</a></li>
                    </ul>
                </div>
                <div class="footer__item newsletter-six wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Newsletter HMSI</h3>
                    <p class="mb-20">Dapatkan update terbaru tentang kegiatan dan informasi penting dari HMSI Unsil.</p>
                    <div class="footer-newsletter__six">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Alamat Email Anda" required>
                            <button type="submit">Berlangganan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div
                    class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                    <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">&copy; Hak Cipta 2024
                        oleh <a href="{{ route('home') }}" class="primary-color">HMSI Unsil</a></p>
                    <div class="social-icons wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <a href="https://facebook.com/hmsi.unsil" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://instagram.com/hmsi.unsil" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/company/hmsi-unsil" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://youtube.com/@hmsi.unsil" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <ul class="d-flex footer-six__info align-items-center gap-2 wow fadeInDown" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <li><a href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                        <li><span class="info-line"></span></li>
                        <li><a href="{{ route('terms') }}">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- jQuery -->
    <script src="{{ asset('learnit/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('learnit/assets/js/bootstrap.min.js') }}"></script>
    <!-- Mean menu Js -->
    <script src="{{ asset('learnit/assets/js/meanmenu.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('learnit/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('learnit/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('learnit/assets/js/wow.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('learnit/assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('learnit/assets/js/nice-select.min.js') }}"></script>
    <!-- Parallax Js -->
    <script src="{{ asset('learnit/assets/js/parallax.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('learnit/assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('learnit/assets/js/script.js') }}"></script>
    @stack('scripts')

</body>

</html>