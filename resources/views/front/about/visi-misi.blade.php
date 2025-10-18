@extends('front.layout')

@section('content')

<!-- Hero Section -->
<section class="relative mt-20 bg-gradient-to-br from-blue-50 via-white to-sky-50 pt-32 pb-20 overflow-hidden">
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
                    <i class="fa-solid fa-bullseye text-white text-xl"></i>
                </div>
                <h5 class="text-sky-600 uppercase tracking-widest font-semibold text-sm">ARAH ORGANISASI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-compass text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl font-bold text-gray-800 leading-tight mb-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <span class="text-sky-500 relative inline-block">
                    Visi & Misi
                    <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full" onerror="this.style.display='none'">
                </span> 
                HMSI Unsil
                <div class="inline-flex items-center gap-2 ml-2">
                    <span class="text-3xl animate-bounce">🧭</span>
                    <span class="text-3xl animate-pulse">🌟</span>
                </div>
            </h1>
            
            <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mb-8 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Landasan dan tujuan yang menjadi kompas perjalanan kami dalam 
                <span class="text-sky-600 font-semibold">membangun ekosistem teknologi informasi berkualitas!</span> 🎯
            </p>
        </div>
    </div>

    <!-- Wave Shape Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16 text-white">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- Vision Section -->
<section class="py-20 bg-white relative">
    <!-- Fun background pattern -->
    <div class="absolute inset-0 opacity-5 pattern-dots"></div>
    
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Vision Content Column -->
            <div class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-16 h-1 bg-sky-500 rounded-full"></div>
                    <h6 class="text-sky-500 font-semibold uppercase tracking-wider">Visi Kami</h6>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                    Menjadi <span class="text-sky-500">Penggerak Utama</span> Ekosistem Teknologi Informasi
                </h2>
                
                <div class="bg-gradient-to-r from-sky-500 to-blue-500 p-6 rounded-xl text-white mb-8 shadow-lg relative overflow-hidden group">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-white opacity-10 pattern-zigzag"></div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-white/10 rounded-full"></div>
                    <div class="absolute top-4 right-8 text-white/30 text-6xl opacity-50 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    
                    <div class="relative z-10">
                        <p class="text-lg font-medium leading-relaxed mb-4">
                            "Menjadi himpunan mahasiswa terdepan yang menghasilkan insan sistem informasi unggul yang berjiwa teknologi, berwawasan global, serta berkontribusi aktif dalam membangun ekosistem teknologi informasi di Indonesia."
                        </p>
                        
                        <div class="text-right">
                            <span class="italic text-white/80">— HMSI Unsil</span>
                        </div>
                    </div>
                </div>
                
                <!-- Key Vision Points -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-sky-50 p-4 rounded-xl hover:bg-sky-100 transition-all duration-300 hover:shadow-md group">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-md flex items-center justify-center mb-3 group-hover:bg-sky-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-gray-800 font-semibold mb-1">Unggul</h4>
                        <p class="text-gray-600 text-sm">Menjadi yang terdepan dalam pengembangan teknologi dan inovasi</p>
                    </div>
                    
                    <div class="bg-sky-50 p-4 rounded-xl hover:bg-sky-100 transition-all duration-300 hover:shadow-md group">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-md flex items-center justify-center mb-3 group-hover:bg-sky-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h4 class="text-gray-800 font-semibold mb-1">Global</h4>
                        <p class="text-gray-600 text-sm">Berwawasan internasional dengan standar kualitas dunia</p>
                    </div>
                    
                    <div class="bg-sky-50 p-4 rounded-xl hover:bg-sky-100 transition-all duration-300 hover:shadow-md group">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-md flex items-center justify-center mb-3 group-hover:bg-sky-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4 class="text-gray-800 font-semibold mb-1">Kolaboratif</h4>
                        <p class="text-gray-600 text-sm">Membangun kerjasama yang luas dengan berbagai pihak</p>
                    </div>
                    
                    <div class="bg-sky-50 p-4 rounded-xl hover:bg-sky-100 transition-all duration-300 hover:shadow-md group">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-md flex items-center justify-center mb-3 group-hover:bg-sky-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-gray-800 font-semibold mb-1">Berkontribusi</h4>
                        <p class="text-gray-600 text-sm">Memberikan dampak positif bagi masyarakat dan negara</p>
                    </div>
                </div>
            </div>
            
            <!-- Vision Illustration Column -->
            <div class="relative wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="relative z-10 group perspective">
                    <img src="{{ asset('images/poscast.jpg') }}" alt="Visi HMSI Unsil" 
                         class="w-full rounded-2xl shadow-xl transform transition-transform duration-500 group-hover:rotate-y-6" 
                         onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80'">
                    
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-r from-sky-500/70 to-blue-500/70 flex items-center justify-center rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="text-white text-center p-6">
                            <h4 class="text-xl font-bold mb-3">Terinspirasi dari Visi Kami</h4>
                            <p class="text-white/90">"Visi tanpa eksekusi adalah halusinasi. Kami berkomitmen mengeksekusi visi kami dengan sepenuh hati."</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-sky-500 rounded-2xl -z-10 animate-pulse-slow"></div>
                <div class="absolute -top-6 -left-6 w-40 h-40 bg-blue-500 rounded-2xl -z-10 animate-pulse-slow animation-delay-2"></div>
                
                <!-- Decorative Elements -->
                <div class="absolute top-1/2 -right-8 animate-float">
                    <div class="bg-white rounded-full shadow-xl p-3">
                        <div class="bg-gradient-to-r from-sky-500 to-blue-500 rounded-full w-12 h-12 flex items-center justify-center">
                            <span class="text-xl">🎯</span>
                        </div>
                    </div>
                </div>
                
                <div class="absolute -bottom-4 left-1/4 animate-float animation-delay-4">
                    <div class="bg-white rounded-full shadow-xl p-3">
                        <div class="bg-gradient-to-r from-sky-500 to-blue-500 rounded-full w-12 h-12 flex items-center justify-center">
                            <span class="text-xl">💡</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-gradient-to-br from-sky-50 via-white to-blue-50 relative overflow-hidden">
    <!-- Fun Background Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-1 bg-sky-500 rounded-full"></div>
                <h6 class="text-sky-500 font-medium uppercase tracking-wider">MISI KAMI</h6>
                <div class="w-8 h-1 bg-sky-500 rounded-full"></div>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Langkah <span class="text-sky-500">Strategis</span> Menuju Visi
            </h2>
            <p class="text-gray-600 text-lg">
                Kami menerjemahkan visi menjadi aksi nyata melalui serangkaian misi yang fokus dan terukur
            </p>
        </div>
        
        <!-- Mission Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission Card 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pengembangan Akademik</h3>
                
                <p class="text-gray-600 mb-6">
                    Menyelenggarakan program-program yang mendukung pengembangan kapasitas akademik mahasiswa Sistem Informasi dalam berbagai aspek keilmuan.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Workshop keterampilan teknis dan non-teknis</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Kelas-kelas pendalaman materi perkuliahan</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Studi kasus dan praktek langsung dengan industri</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pemberdayaan Potensi</h3>
                
                <p class="text-gray-600 mb-6">
                    Memfasilitasi pengembangan soft skill dan leadership mahasiswa melalui berbagai kegiatan kepemimpinan dan organisasi.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Latihan kepemimpinan dan manajemen organisasi</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Public speaking dan communication skills</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Program mentoring antar mahasiswa</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pengembangan Jaringan</h3>
                
                <p class="text-gray-600 mb-6">
                    Membangun kolaborasi strategis dengan berbagai pihak eksternal untuk memperluas kesempatan dan pengalaman mahasiswa.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Kerjasama dengan perusahaan teknologi</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Pertukaran mahasiswa dengan universitas lain</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Program magang dan kesempatan kerja</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pengembangan Inovasi</h3>
                
                <p class="text-gray-600 mb-6">
                    Mendorong budaya inovasi dan kewirausahaan digital melalui kompetisi, proyek riset, dan startup incubation.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Hackathon dan kompetisi pengembangan aplikasi</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Inkubasi startup mahasiswa</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Riset dan pengembangan produk teknologi</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card 5 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pengabdian Masyarakat</h3>
                
                <p class="text-gray-600 mb-6">
                    Berkontribusi pada penyelesaian masalah sosial melalui teknologi informasi dan edukasi digital untuk masyarakat.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Pelatihan literasi digital untuk masyarakat</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Pengembangan sistem informasi untuk UMKM</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Solusi teknologi untuk masalah sosial</p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Card 6 -->
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-500 rounded-xl -mt-12 mb-6 flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3">Penguatan Organisasi</h3>
                
                <p class="text-gray-600 mb-6">
                    Membangun sistem organisasi yang profesional, transparan, dan akuntabel untuk mencapai keberlangsungan dan kebermanfaatan organisasi.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Pengembangan sistem manajemen organisasi</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Peningkatan kapasitas pengurus organisasi</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <div class="text-sky-500 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-gray-600 text-sm">Evaluasi dan perbaikan berkelanjutan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-sky-500 to-blue-600 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-40 h-40 bg-white/10 rounded-full mix-blend-overlay blur-3xl animate-blob"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 bg-white/10 rounded-full mix-blend-overlay blur-3xl animate-blob animation-delay-3"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Jadilah Bagian dari Visi & Misi Kami
            </h2>
            
            <p class="text-sky-100 text-lg mb-8 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Bersama-sama kita bisa menciptakan ekosistem teknologi informasi yang lebih baik dan memberikan dampak positif bagi masyarakat. Mari bergabung dan berkontribusi!
            </p>
            
            <div class="flex flex-wrap gap-4 justify-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
            
                
                <a href="https://wa.me/6287719904732" class="group px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 flex items-center gap-2">
                    <span class="text-white">Kontak Kami</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Interactive Elements -->
<script>
// Counter Animation for Statistics
document.addEventListener('DOMContentLoaded', function() {
    // Add WOW.js initialization if needed
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }
});
</script>

<style>
/* Animations */
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
</style>
@endsection