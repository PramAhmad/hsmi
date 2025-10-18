@extends('front.layout')

@section('content')


<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-sky-50 pt-48 pb-28 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 left-10 opacity-20">
        <div class="w-40 h-40 bg-sky-500 rounded-full animate-pulse-slow"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-32 h-32 bg-blue-400 rounded-full animate-bounce" style="animation-duration: 6s;"></div>
    </div>
    <div class="absolute top-1/3 right-1/4 opacity-10">
        <div class="w-48 h-48 bg-sky-300 rounded-full animate-blob"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-blue-500 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-users text-white text-xl"></i>
                </div>
                <h5 class="text-sky-600 uppercase tracking-widest font-semibold text-sm">PROFIL KAMI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-graduation-cap text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl font-bold text-gray-800 leading-tight mb-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <span class="text-sky-500 relative inline-block">
                    HMSI Unsil
                    <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full" onerror="this.style.display='none'">
                </span> 
                Tasikmalaya
                <div class="inline-flex items-center gap-2 ml-2">
                    <span class="text-3xl animate-bounce">🚀</span>
                    <span class="text-3xl animate-pulse">✨</span>
                </div>
            </h1>
            
            <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mb-8 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Himpunan Mahasiswa Sistem Informasi Universitas Siliwangi — wadah pengembangan diri, kolaborasi, dan inovasi untuk
                <span class="text-sky-600 font-semibold">mahasiswa yang siap menjadi pemimpin masa depan!</span> 🎓
            </p>
            
            <!-- Action Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#about-section" onclick="scrollToNextSection()" class="group inline-flex items-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <span class="text-white">Kenali Kami</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
                
                <!-- <a href="#" class="inline-flex items-center gap-2 bg-white text-sky-600 border border-sky-100 px-6 py-3 rounded-xl font-semibold hover:bg-sky-50 transition-all duration-300 shadow-md hover:shadow-lg">
                    <span class="text-xl">🔍</span>
                    <span>Lihat Kegiatan</span>
                </a> -->
            </div>
        </div>

        <!-- Stats Cards -->
        <!-- <div class="grid md:grid-cols-4 gap-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-sky-500/10 to-blue-500/10 transform scale-0 group-hover:scale-100 transition-transform origin-bottom-left rounded-2xl"></div>
                <div class="text-center relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 transform group-hover:rotate-12 transition-transform">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-1 counter" data-target="10">0</h3>
                    <p class="text-gray-600 text-sm font-medium">Tahun Berkarya</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-sky-500/10 to-blue-500/10 transform scale-0 group-hover:scale-100 transition-transform origin-bottom-left rounded-2xl"></div>
                <div class="text-center relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 transform group-hover:rotate-12 transition-transform">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-1 counter" data-target="30">0</h3>
                    <p class="text-gray-600 text-sm font-medium">Penghargaan</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-sky-500/10 to-blue-500/10 transform scale-0 group-hover:scale-100 transition-transform origin-bottom-left rounded-2xl"></div>
                <div class="text-center relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 transform group-hover:rotate-12 transition-transform">
                        <span class="text-2xl">👥</span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-1 counter" data-target="250">0</h3>
                    <p class="text-gray-600 text-sm font-medium">Anggota Aktif</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-sky-500/10 to-blue-500/10 transform scale-0 group-hover:scale-100 transition-transform origin-bottom-left rounded-2xl"></div>
                <div class="text-center relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 transform group-hover:rotate-12 transition-transform">
                        <span class="text-2xl">🚀</span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-1 counter" data-target="20">0</h3>
                    <p class="text-gray-600 text-sm font-medium">Program Unggulan</p>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Wave Shape Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16 text-white">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- About HMSI Section -->
<section id="about-section" class="py-20 bg-white relative">
    <!-- Fun background pattern -->
    <div class="absolute inset-0 opacity-5 pattern-dots"></div>
    
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Image Column with Interactive Elements -->
            <div class="relative wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="relative z-10 group perspective">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Tim HMSI Unsil" 
                         class="w-full rounded-2xl shadow-xl transform transition-transform duration-500 group-hover:rotate-y-6" 
                         onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'">
                    
                    <!-- Hover Overlay with Fun Facts -->
                    <div class="absolute inset-0 bg-sky-500/70 flex items-center justify-center rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white text-center p-6">
                            <h4 class="text-xl font-bold mb-3">Fun Fact!</h4>
                            <p class="text-white/90">Kami minum sekitar 100+ gelas kopi seminggu saat mengerjakan project bersama! ☕</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-sky-500 rounded-2xl -z-10 animate-pulse-slow"></div>
                <div class="absolute -top-6 -left-6 w-40 h-40 bg-blue-500 rounded-2xl -z-10 animate-pulse-slow animation-delay-2"></div>
                
                <!-- Floating Badge -->
                <div class="absolute -top-10 -right-5 bg-white rounded-full shadow-xl p-3 animate-float">
                    <div class="bg-gradient-to-r from-sky-500 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center">
                        <span class="text-3xl">🎓</span>
                    </div>
                </div>
            </div>
            
            <!-- Content Column -->
            <div class="wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-16 h-1 bg-sky-500 rounded-full"></div>
                    <h6 class="text-sky-500 font-semibold uppercase tracking-wider">Siapa Kami</h6>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                    HMSI Unsil <span class="text-sky-500">Mengembangkan Teknologi</span> dan Membangun Komunitas
                </h2>
                
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Himpunan Mahasiswa Sistem Informasi (HMSI) Universitas Siliwangi merupakan organisasi kemahasiswaan yang menjadi wadah bagi mahasiswa program studi Sistem Informasi untuk mengembangkan diri dalam bidang akademik dan non-akademik.
                </p>
                
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Didirikan pada tahun 2022, HMSI telah berperan aktif dalam membangun ekosistem teknologi informasi di lingkungan kampus dan masyarakat sekitar melalui berbagai kegiatan pengembangan keilmuan, pengabdian masyarakat, dan kewirausahaan.
                </p>
                
                <!-- Interactive Card Grid -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex items-start gap-3 hover:bg-sky-50 p-3 rounded-xl transition-colors group">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-lg mb-1 group-hover:text-sky-500 transition-colors">Profesionalitas</h4>
                            <p class="text-gray-600">Bekerja dengan standar tinggi dan akuntabilitas</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3 hover:bg-sky-50 p-3 rounded-xl transition-colors group">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-lg mb-1 group-hover:text-sky-500 transition-colors">Kolaboratif</h4>
                            <p class="text-gray-600">Membangun sinergi untuk mencapai tujuan bersama</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3 hover:bg-sky-50 p-3 rounded-xl transition-colors group">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-lg mb-1 group-hover:text-sky-500 transition-colors">Inovatif</h4>
                            <p class="text-gray-600">Selalu mengembangkan solusi baru yang bermanfaat</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3 hover:bg-sky-50 p-3 rounded-xl transition-colors group">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-lg mb-1 group-hover:text-sky-500 transition-colors">Adaptif</h4>
                            <p class="text-gray-600">Cepat beradaptasi dengan perubahan teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->

<!-- Welcome Messages Section -->
<section class="py-16 bg-white relative">
    <!-- Fun Pattern Background -->
    <div class="absolute inset-0 opacity-5 pattern-zigzag"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-1 bg-sky-500 rounded-full"></div>
                <h6 class="text-sky-500 font-medium uppercase tracking-wider">SAMBUTAN</h6>
                <div class="w-8 h-1 bg-sky-500 rounded-full"></div>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Sambutan <span class="text-sky-500">Pimpinan</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Pesan dan harapan dari para pemimpin yang mendukung perkembangan HMSI Unsil
            </p>
        </div>
        
        <!-- Interactive Message Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Message from Department Chair -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-6 mb-8 relative">
                    <div class="relative">
                        <img src="{{ asset('images/bu_rahmi.png') }}" alt="Ketua Jurusan Sistem Informasi" 
                             class="w-24 h-24 rounded-full object-cover border-4 border-sky-500 group-hover:scale-105 transition-transform duration-300"
                             onerror="this.src='https://randomuser.me/api/portraits/men/32.jpg'">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center text-white text-sm">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1 group-hover:text-sky-500 transition-colors">Ir. Rahmi Nur Shofa S.t., M.T.</h3>
                        <p class="text-sky-500 font-medium">Kepala Jurusan Sistem Informasi</p>
                    </div>
                </div>
                
                <blockquote class="text-gray-600 text-lg italic mb-6 leading-relaxed relative">
                    <span class="text-6xl absolute -top-8 -left-2 text-sky-100">"</span>
                    <div class="relative z-10">
                        Program Studi Sistem Informasi Universitas Siliwangi berkomitmen untuk menghasilkan lulusan yang kompeten dan adaptif terhadap perkembangan teknologi. HMSI sebagai organisasi kemahasiswaan memiliki peran strategis dalam mengembangkan soft skill dan leadership mahasiswa yang akan melengkapi hard skill yang diperoleh dari perkuliahan.
                        <br><br>
                        <span class="text-sky-500 font-semibold">Saya mengapresiasi dedikasi dan komitmen pengurus HMSI yang konsisten menyelenggarakan berbagai kegiatan pengembangan diri mahasiswa. Mari terus berkarya dan berinovasi untuk kemajuan bersama.</span>
                    </div>
                    <span class="text-6xl absolute -bottom-16 -right-2 text-sky-100">"</span>
                </blockquote>
                
                <div class="w-24 h-1 bg-sky-500 rounded-full"></div>
            </div>
            
            <!-- Message from HMSI Chair -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-6 mb-8 relative">
                    <div class="relative">
                        <img src="{{ asset('images/heru.png ') }}" alt="Ketua HMSI" 
                             class="w-24 h-24 rounded-full object-cover border-4 border-sky-500 group-hover:scale-105 transition-transform duration-300"
                             onerror="this.src='https://randomuser.me/api/portraits/men/47.jpg'">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center text-white text-sm">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1 group-hover:text-sky-500 transition-colors">Heru Iskandar</h3>
                        <p class="text-sky-500 font-medium">Ketua Himpunan Mahasiswa Sistem Informasi <br> Periode 2024-2025</p>
                    </div>
                </div>
                
                <blockquote class="text-gray-600 text-lg italic mb-6 leading-relaxed relative">
                    <span class="text-6xl absolute -top-8 -left-2 text-sky-100">"</span>
                    <div class="relative z-10">
                        Menjadi bagian dari HMSI Unsil adalah sebuah kehormatan dan tanggung jawab besar. Kami berkomitmen untuk terus menciptakan program-program yang bermanfaat bagi anggota dan masyarakat luas, khususnya dalam bidang teknologi informasi.
                        <br><br>
                        <span class="text-sky-500 font-semibold">Di era transformasi digital yang begitu cepat, kami mengajak seluruh mahasiswa Sistem Informasi untuk aktif mengembangkan diri, membangun jaringan, dan memberikan kontribusi positif. Bersama kita wujudkan HMSI yang profesional, kolaboratif, dan inovatif!</span>
                    </div>
                    <span class="text-6xl absolute -bottom-16 -right-2 text-sky-100">"</span>
                </blockquote>
                
                <div class="w-24 h-1 bg-sky-500 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- Focus Areas Section with Tabs -->


<!-- Join Us CTA Section -->
<section class="py-20 bg-gradient-to-r from-sky-500 to-blue-600 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-40 h-40 bg-white/10 rounded-full mix-blend-overlay blur-3xl animate-blob"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 bg-white/10 rounded-full mix-blend-overlay blur-3xl animate-blob animation-delay-3"></div>
        
        <!-- Fun Elements -->
        <div class="absolute top-1/4 right-1/4 animate-float animation-delay-2">
            <div class="text-4xl">🌟</div>
        </div>
        <div class="absolute bottom-1/4 left-1/3 animate-float animation-delay-6">
            <div class="text-4xl">🔥</div>
        </div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    Bergabunglah dengan <span class="relative inline-block">
                        <span class="relative z-10 text-black ">HMSI Unsil</span>
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-sky-300/30 -z-10 rounded-lg"></span>
                    </span>
                </h2>
                <p class="text-sky-100 text-lg mb-6 max-w-lg mx-auto lg:mx-0 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    Mari jadikan masa perkuliahan lebih bermakna dengan mengembangkan potensi, membangun jaringan, dan memberikan kontribusi positif bersama HMSI Unsil!
                </p>
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <a href="/membership/register" class="group px-8 py-4 bg-white text-sky-500 font-bold rounded-xl hover:bg-sky-50 transition-all duration-300 shadow-lg hover:shadow-xl relative overflow-hidden">
                        <span class="relative z-10 text-black">Daftar Sekarang</span>
                        <span class="absolute inset-0 w-0 bg-gradient-to-r from-sky-100 to-white transition-all duration-300 group-hover:w-full -z-0"></span>
                    </a>
                    <a href="https://wa.me/6287719904732" class="group px-8 py-4 border-2 border-white text-white font-bold rounded-xl transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10 text-black">Hubungi Kami</span>
                        <span class="absolute inset-0 w-0 bg-white/10 transition-all duration-300 group-hover:w-full -z-0"></span>
                    </a>
                </div>
            </div>
            
            <div class="lg:w-1/2 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="relative group perspective">
                    <img src="{{ asset('images/ruang.jpg') }}" alt="Tim HMSI Bersama" 
                         class="w-full h-auto rounded-2xl shadow-xl border-4 border-white/20 transform transition-transform duration-500 group-hover:rotate-y-6"
                         onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'">
                    
                    <!-- Interactive Floating Elements -->
                    <div class="absolute -top-6 -left-6 bg-white rounded-full shadow-xl p-3 animate-float animation-delay-1">
                        <div class="bg-gradient-to-r from-sky-500 to-blue-500 rounded-full w-12 h-12 flex items-center justify-center">
                            <span class="text-xl">👨‍💻</span>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-full shadow-xl p-3 animate-float animation-delay-4">
                        <div class="bg-gradient-to-r from-sky-500 to-blue-500 rounded-full w-12 h-12 flex items-center justify-center">
                            <span class="text-xl">👩‍💻</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Interactive Elements -->
<script>
// Counter Animation for Statistics
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.target);
                let count = 0;
                const updateCount = () => {
                    const increment = target / speed;
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
                observer.unobserve(counter);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
    
    // Show the first tab by default
    showTab('keilmuan');
});

// Scroll to next section function
function scrollToNextSection() {
    const aboutSection = document.getElementById('about-section');
    if (aboutSection) {
        aboutSection.scrollIntoView({ behavior: 'smooth' });
    }
}

// Tab Functionality for Focus Areas
function showTab(tabName) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.focus-content');
    tabContents.forEach(content => {
        content.classList.add('hidden');
    });
    
    // Remove active class from all tabs
    const tabs = document.querySelectorAll('.focus-tab');
    tabs.forEach(tab => {
        tab.classList.remove('bg-sky-500', 'text-white');
        tab.classList.add('text-gray-500', 'hover:text-gray-700');
    });
    
    // Show selected tab content
    const selectedContent = document.getElementById(tabName + 'Content');
    if (selectedContent) {
        selectedContent.classList.remove('hidden');
        // Add animation
        selectedContent.classList.add('animate-fade-in');
    }
    
    // Add active class to selected tab
    const selectedTab = document.getElementById(tabName + 'Tab');
    if (selectedTab) {
        selectedTab.classList.remove('text-gray-500', 'hover:text-gray-700');
        selectedTab.classList.add('bg-sky-500', 'text-white');
    }
}

// Modal functionality for statistics details
function showStatDetails(statId) {
    // Hide all stat details
    const statDetails = document.querySelectorAll('.stat-details');
    statDetails.forEach(detail => {
        detail.classList.add('hidden');
    });
    
    // Show selected stat details
    const selectedStat = document.getElementById(statId + 'Details');
    if (selectedStat) {
        selectedStat.classList.remove('hidden');
    }
    
    // Show modal with animation
    const modal = document.getElementById('statDetailsModal');
    const modalContent = document.getElementById('modalContent');
    
    if (modal && modalContent) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Animate modal content
        setTimeout(() => {
            modalContent.classList.add('scale-100', 'opacity-100');
            modalContent.classList.remove('scale-90', 'opacity-0');
        }, 10);
    }
}

function closeStatDetails() {
    const modal = document.getElementById('statDetailsModal');
    const modalContent = document.getElementById('modalContent');
    
    if (modal && modalContent) {
        // Animate modal content
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-90', 'opacity-0');
        
        // Hide modal after animation
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }
}
</script>

<style>
/* Animations */
.animate-title {
    animation: fadeInDown 1.2s ease-out;
}

.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

.animate-pulse-slow {
    animation: pulse 4s infinite;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animation-delay-1 {
    animation-delay: 0.2s;
}

.animation-delay-2 {
    animation-delay: 0.4s;
}

.animation-delay-3 {
    animation-delay: 0.6s;
}

.animation-delay-4 {
    animation-delay: 0.8s;
}

.animation-delay-5 {
    animation-delay: 1s;
}

.animation-delay-6 {
    animation-delay: 1.2s;
}

.animation-delay-7 {
    animation-delay: 1.4s;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes pulse {
    0%, 100% {
        opacity: 0.6;
    }
    50% {
        opacity: 0.8;
    }
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-15px);
    }
    100% {
        transform: translateY(0px);
    }
}

@keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

/* Fun Patterns */
.pattern-dots {
    background-image: radial-gradient(currentColor 1px, transparent 1px);
    background-size: 20px 20px;
}

.pattern-zigzag {
    background-image: 
        linear-gradient(135deg, currentColor 25%, transparent 25%), 
        linear-gradient(225deg, currentColor 25%, transparent 25%), 
        linear-gradient(315deg, currentColor 25%, transparent 25%), 
        linear-gradient(45deg, currentColor 25%, transparent 25%);
    background-size: 20px 20px;
}

/* 3D Effects */
.perspective {
    perspective: 1000px;
}

.rotate-y-6 {
    transform: rotateY(6deg);
}

.text-shadow-lg {
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}
</style>
@endsection
