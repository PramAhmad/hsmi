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
            <div class="flex items-center justify-center gap-2 md:gap-3 mb-4 md:mb-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-8 h-8 md:w-12 md:h-12 bg-sky-500 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-upload text-white text-sm md:text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-xs md:text-sm">KONTRIBUSI MATERI</h5>
                <div class="w-8 h-8 md:w-12 md:h-12 bg-blue-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-share text-white text-sm md:text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Upload
                <span class="text-sky-500 relative inline-block">
                    Materi Baru
                </span>
                <div class="inline-flex items-center gap-2 md:gap-3 ml-2 md:ml-3">
                    <span class="text-2xl md:text-4xl animate-bounce">📚</span>
                    <span class="text-2xl md:text-4xl animate-pulse">✨</span>
                </div>
            </h1>
            
            <div class="mt-6 md:mt-8 text-sm md:text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-1 md:space-y-2">
                    <li class="flex items-center justify-center gap-2 md:gap-3">
                        <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span class="text-center">Bagikan pengetahuanmu dengan teman-teman SI Unsil!</span>
                    </li>
                    <li class="flex items-center justify-center gap-2 md:gap-3">
                        <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold text-center">Sharing is Caring 💙</span>
                    </li>
                    <li class="flex items-center justify-center gap-2 md:gap-3">
                        <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span class="text-center">Bantu mahasiswa lain untuk belajar lebih baik ⭐</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-4 mt-8 md:mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#upload-form" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 md:gap-3 bg-sky-500 hover:bg-sky-600 text-white px-6 md:px-8 py-3 md:py-4 rounded-lg font-semibold text-base md:text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-upload text-lg md:text-xl"></i>
                    <span class="text-white">Mulai Upload</span>
                </a>
                
                <a href="{{ route('bank-materi') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 md:gap-3 bg-white/10 backdrop-blur-sm text-slate-900 px-4 md:px-6 py-3 md:py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-arrow-left text-sm md:text-lg"></i>
                    <span class="text-sm md:text-base">Kembali ke Bank Materi</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="banner-five__cloud-shape image">
        <img src="{{ asset('learnit/assets/images/bg/cloud-bottom.png') }}" alt="shape">
    </div>
</section>

<!-- Upload Form Section -->
<section id="upload-form" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-12 md:pt-20 pb-20 md:pb-32 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 md:top-20 left-5 md:left-10 opacity-20">
        <div class="w-16 h-16 md:w-24 md:h-24 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-10 md:bottom-20 right-8 md:right-16 opacity-15">
        <div class="w-20 h-20 md:w-32 md:h-32 bg-blue-400 rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Form Header -->
            <div class="bg-white rounded-xl md:rounded-2xl shadow-lg p-4 md:p-6 mb-6 md:mb-8 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
                    <div class="w-8 h-8 md:w-10 md:h-10 bg-sky-500 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-file-plus text-white text-sm md:text-base"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-800">Form Upload Materi</h3>
                </div>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                    Isi form di bawah ini untuk menambahkan materi baru ke bank materi HMSI. Pastikan semua informasi sudah benar sebelum mengirim.
                </p>
            </div>

            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="bg-green-50 border border-green-200 rounded-lg p-3 md:p-4 mb-4 md:mb-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="flex items-center gap-2 md:gap-3">
                        <div class="w-6 h-6 md:w-8 md:h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-check text-white text-xs md:text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-green-800 font-medium text-sm md:text-base">{{ session('success') }}</p>
                        </div>
                        <button onclick="this.parentElement.parentElement.remove()" 
                                class="text-green-600 hover:text-green-800 transition-colors p-1">
                            <i class="fa-solid fa-times text-sm"></i>
                        </button>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-50 border border-red-200 rounded-lg p-3 md:p-4 mb-4 md:mb-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="flex items-center gap-2 md:gap-3">
                        <div class="w-6 h-6 md:w-8 md:h-8 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-exclamation text-white text-xs md:text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-red-800 font-medium text-sm md:text-base">{{ session('error') }}</p>
                        </div>
                        <button onclick="this.parentElement.parentElement.remove()" 
                                class="text-red-600 hover:text-red-800 transition-colors p-1">
                            <i class="fa-solid fa-times text-sm"></i>
                        </button>
                    </div>
                </div>
            @endif

            <!-- Upload Form -->
            <div class="bg-white rounded-xl md:rounded-2xl shadow-lg p-4 md:p-8 border border-gray-100 wow fadeInUp" data-wow-delay="400ms">
                <form action="{{ route('bank-materi.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm" class="space-y-6 md:space-y-8">
                    @csrf
                    
                    <!-- Basic Information -->
                    <div class="space-y-4 md:space-y-6">
                        <h4 class="text-base md:text-lg font-semibold text-gray-800 flex items-center gap-2 border-b border-gray-100 pb-2 md:pb-3">
                            <i class="fa-solid fa-info-circle text-sky-500 text-sm md:text-base"></i>
                            <span>Informasi Dasar</span>
                        </h4>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6">
                            <!-- Judul -->
                            <div class="lg:col-span-2">
                                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-heading text-sky-500 mr-2"></i>
                                    Judul Materi <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="judul" 
                                       name="judul" 
                                       value="{{ old('judul') }}" 
                                       placeholder="Contoh: Algoritma dan Struktur Data - Linked List"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('judul') border-red-500 bg-red-50 @enderror"
                                       required>
                                @error('judul')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Mata Kuliah -->
                            <div>
                                <label for="mata_kuliah_id" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-book text-sky-500 mr-2"></i>
                                    Mata Kuliah <span class="text-red-500">*</span>
                                </label>
                                <select id="mata_kuliah_id" 
                                        name="mata_kuliah_id" 
                                        class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('mata_kuliah_id') border-red-500 bg-red-50 @enderror" 
                                        required>
                                    <option value="">Pilih Mata Kuliah</option>
                                    @foreach($mataKuliah as $mk)
                                    <option value="{{ $mk->id }}" {{ old('mata_kuliah_id') == $mk->id ? 'selected' : '' }}>
                                        {{ $mk->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('mata_kuliah_id')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-tag text-sky-500 mr-2"></i>
                                    Kategori <span class="text-red-500">*</span>
                                </label>
                                <select id="kategori" 
                                        name="kategori" 
                                        class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('kategori') border-red-500 bg-red-50 @enderror" 
                                        required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="teori" {{ old('kategori') == 'teori' ? 'selected' : '' }}>📖 Teori</option>
                                    <option value="praktikum" {{ old('kategori') == 'praktikum' ? 'selected' : '' }}>💻 Praktikum</option>
                                    <option value="tugas" {{ old('kategori') == 'tugas' ? 'selected' : '' }}>📝 Tugas</option>
                                    <option value="ujian" {{ old('kategori') == 'ujian' ? 'selected' : '' }}>📋 Ujian</option>
                                    <option value="quiz" {{ old('kategori') == 'quiz' ? 'selected' : '' }}>❓ Quiz</option>
                                    <option value="lainnya" {{ old('kategori') == 'lainnya' ? 'selected' : '' }}>📁 Lainnya</option>
                                </select>
                                @error('kategori')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tingkat Kesulitan -->
                            <div>
                                <label for="tingkat_kesulitan" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-star text-sky-500 mr-2"></i>
                                    Tingkat Kesulitan <span class="text-red-500">*</span>
                                </label>
                                <select id="tingkat_kesulitan" 
                                        name="tingkat_kesulitan" 
                                        class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('tingkat_kesulitan') border-red-500 bg-red-50 @enderror" 
                                        required>
                                    <option value="">Pilih Tingkat</option>
                                    <option value="1" {{ old('tingkat_kesulitan') == '1' ? 'selected' : '' }}>⭐ Sangat Mudah</option>
                                    <option value="2" {{ old('tingkat_kesulitan') == '2' ? 'selected' : '' }}>⭐⭐ Mudah</option>
                                    <option value="3" {{ old('tingkat_kesulitan') == '3' ? 'selected' : '' }}>⭐⭐⭐ Sedang</option>
                                    <option value="4" {{ old('tingkat_kesulitan') == '4' ? 'selected' : '' }}>⭐⭐⭐⭐ Sulit</option>
                                    <option value="5" {{ old('tingkat_kesulitan') == '5' ? 'selected' : '' }}>⭐⭐⭐⭐⭐ Sangat Sulit</option>
                                </select>
                                @error('tingkat_kesulitan')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Penulis -->
                            <div>
                                <label for="penulis" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-user text-sky-500 mr-2"></i>
                                    Nama Penulis <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="penulis" 
                                       name="penulis" 
                                       value="{{ old('penulis') }}" 
                                       placeholder="Nama lengkap penulis atau sumber materi"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('penulis') border-red-500 bg-red-50 @enderror"
                                       required>
                                @error('penulis')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fa-solid fa-align-left text-sky-500 mr-2"></i>
                                Deskripsi Materi <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <textarea id="deskripsi" 
                                          name="deskripsi" 
                                          rows="3" 
                                          placeholder="Jelaskan secara singkat tentang materi ini, topik yang dibahas, dan manfaatnya untuk pembelajaran..."
                                          class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all resize-none @error('deskripsi') border-red-500 bg-red-50 @enderror" 
                                          required>{{ old('deskripsi') }}</textarea>
                                <div class="absolute bottom-2 md:bottom-3 right-2 md:right-3">
                                    <span id="deskripsiCount" class="text-xs text-gray-400 bg-white px-2 py-1 rounded-full border border-gray-200">
                                        0/300
                                    </span>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Maksimal 300 karakter</p>
                            @error('deskripsi')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-4 md:space-y-6">
                        <h4 class="text-base md:text-lg font-semibold text-gray-800 flex items-center gap-2 border-b border-gray-100 pb-2 md:pb-3">
                            <i class="fa-solid fa-list-check text-sky-500 text-sm md:text-base"></i>
                            <span>Informasi Tambahan</span>
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                            <!-- Total Halaman -->
                            <div>
                                <label for="total_halaman" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-file-lines text-sky-500 mr-2"></i>
                                    Total Halaman
                                </label>
                                <input type="number" 
                                       id="total_halaman" 
                                       name="total_halaman" 
                                       value="{{ old('total_halaman') }}" 
                                       min="1"
                                       placeholder="Contoh: 25"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('total_halaman') border-red-500 bg-red-50 @enderror">
                                <p class="text-xs text-gray-500 mt-1">Opsional - Jumlah halaman total dari semua file</p>
                                @error('total_halaman')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Total Soal -->
                            <div>
                                <label for="total_soal" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-question-circle text-sky-500 mr-2"></i>
                                    Jumlah Soal
                                </label>
                                <input type="number" 
                                       id="total_soal" 
                                       name="total_soal" 
                                       value="{{ old('total_soal') }}" 
                                       min="0"
                                       placeholder="Contoh: 20"
                                       class="w-full px-3 md:px-4 py-2 md:py-3 text-sm md:text-base border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('total_soal') border-red-500 bg-red-50 @enderror">
                                <p class="text-xs text-gray-500 mt-1">Opsional - Jika materi berisi soal latihan/ujian</p>
                                @error('total_soal')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- File Upload -->
                    <div class="space-y-4 md:space-y-6">
                        <h4 class="text-base md:text-lg font-semibold text-gray-800 flex items-center gap-2 border-b border-gray-100 pb-2 md:pb-3">
                            <i class="fa-solid fa-cloud-upload text-sky-500 text-sm md:text-base"></i>
                            <span>Upload File <span class="text-red-500">*</span></span>
                        </h4>
                        
                        <div class="bg-gray-50 rounded-xl p-4 md:p-6 border-2 border-dashed border-gray-300 hover:border-sky-500 transition-colors">
                            <div class="text-center mb-4">
                                <div class="w-12 h-12 md:w-16 md:h-16 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                                    <i class="fa-solid fa-cloud-upload text-xl md:text-2xl text-sky-600"></i>
                                </div>
                                <h5 class="text-base md:text-lg font-semibold text-gray-800 mb-2">Upload File Materi</h5>
                                <p class="text-gray-600 text-xs md:text-sm">
                                    Drag & drop file atau klik untuk memilih file. 
                                    <br>Format yang didukung: PDF, DOC, PPT, XLS, ZIP, dll.
                                </p>
                            </div>
                            
                            <div id="fileUploadContainer">
                                <div class="file-upload-item mb-3 md:mb-4 p-3 md:p-4 bg-white rounded-lg border border-gray-200">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 md:gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                File <span class="text-red-500">*</span>
                                            </label>
                                            <input type="file" 
                                                   name="files[]" 
                                                   accept=".pdf,.doc,.docx,.ppt,.pptx,.xls,.xlsx,.zip,.rar,.txt"
                                                   class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all file-input"
                                                   required>
                                            <p class="text-xs text-gray-500 mt-1">Maksimal 10MB per file</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Nama File (Opsional)
                                            </label>
                                            <input type="text" 
                                                   name="file_names[]" 
                                                   placeholder="Nama custom untuk file ini"
                                                   class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                                            <p class="text-xs text-gray-500 mt-1">Kosongkan untuk menggunakan nama asli</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-2 md:gap-3 mt-4">
                                <button type="button" 
                                        id="addFileBtn" 
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-3 md:px-4 py-2 rounded-lg font-medium text-sm md:text-base transition-colors">
                                    <i class="fa-solid fa-plus text-sm"></i>
                                    <span class="text-white">Tambah File Lain</span>
                                </button>
                                <span class="text-xs md:text-sm text-gray-500 hidden sm:block">atau</span>
                                <button type="button" 
                                        id="removeFileBtn" 
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-gray-400 hover:bg-gray-500 text-white px-3 md:px-4 py-2 rounded-lg font-medium text-sm md:text-base transition-colors"
                                        style="display: none;">
                                    <i class="fa-solid fa-minus text-sm"></i>
                                    <span>Hapus File Terakhir</span>
                                </button>
                            </div>
                        </div>
                        
                        @error('files.*')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 md:gap-4 pt-6 md:pt-8 border-t border-gray-100">
                        <a href="{{ route('bank-materi') }}" 
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 md:px-6 py-2 md:py-3 rounded-lg font-semibold text-sm md:text-base transition-all duration-300">
                            <i class="fa-solid fa-arrow-left text-sm"></i>
                            <span>Batal</span>
                        </a>
                        
                        <button type="submit" 
                                id="submitBtn"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 md:gap-3 bg-sky-500 hover:bg-sky-600 text-white px-6 md:px-8 py-3 md:py-4 rounded-lg font-semibold text-base md:text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            <i class="fa-solid fa-upload text-sm md:text-base"></i>
                            <span class="text-white">Upload Materi</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let fileCount = 1;
    const maxFiles = 5;

    // Character counter for deskripsi
    const deskripsiInput = document.getElementById('deskripsi');
    const deskripsiCount = document.getElementById('deskripsiCount');
    const maxLength = 300;
    
    function updateDeskripsiCounter() {
        const currentLength = deskripsiInput.value.length;
        deskripsiCount.textContent = `${currentLength}/${maxLength}`;
        
        if (currentLength > maxLength * 0.9) {
            deskripsiCount.className = 'text-xs text-orange-500 bg-orange-50 px-2 py-1 rounded-full border border-orange-200 font-medium';
        } else if (currentLength > maxLength) {
            deskripsiCount.className = 'text-xs text-red-500 bg-red-50 px-2 py-1 rounded-full border border-red-200 font-medium';
        } else {
            deskripsiCount.className = 'text-xs text-gray-400 bg-white px-2 py-1 rounded-full border border-gray-200';
        }
    }
    
    deskripsiInput.addEventListener('input', updateDeskripsiCounter);
    updateDeskripsiCounter(); // Initial call

    // File upload management
    const addFileBtn = document.getElementById('addFileBtn');
    const removeFileBtn = document.getElementById('removeFileBtn');
    const fileContainer = document.getElementById('fileUploadContainer');

    addFileBtn.addEventListener('click', function() {
        if (fileCount < maxFiles) {
            fileCount++;
            const newFileItem = document.createElement('div');
            newFileItem.className = 'file-upload-item mb-3 md:mb-4 p-3 md:p-4 bg-white rounded-lg border border-gray-200';
            newFileItem.innerHTML = `
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 md:gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            File ${fileCount} <span class="text-red-500">*</span>
                        </label>
                        <input type="file" 
                               name="files[]" 
                               accept=".pdf,.doc,.docx,.ppt,.pptx,.xls,.xlsx,.zip,.rar,.txt"
                               class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all file-input"
                               required>
                        <p class="text-xs text-gray-500 mt-1">Maksimal 10MB per file</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Nama File (Opsional)
                        </label>
                        <input type="text" 
                               name="file_names[]" 
                               placeholder="Nama custom untuk file ini"
                               class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                        <p class="text-xs text-gray-500 mt-1">Kosongkan untuk menggunakan nama asli</p>
                    </div>
                </div>
            `;
            fileContainer.appendChild(newFileItem);

            // Update button visibility
            if (fileCount >= maxFiles) {
                addFileBtn.style.display = 'none';
            }
            if (fileCount > 1) {
                removeFileBtn.style.display = 'inline-flex';
            }
        }
    });

    removeFileBtn.addEventListener('click', function() {
        if (fileCount > 1) {
            const fileItems = fileContainer.querySelectorAll('.file-upload-item');
            if (fileItems.length > 1) {
                fileItems[fileItems.length - 1].remove();
                fileCount--;
            }

            // Update button visibility
            if (fileCount < maxFiles) {
                addFileBtn.style.display = 'inline-flex';
            }
            if (fileCount <= 1) {
                removeFileBtn.style.display = 'none';
            }
        }
    });

    // Form submission with loading state
    const form = document.getElementById('uploadForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i><span>Mengupload...</span>';
        
        // Show SweetAlert loading
        Swal.fire({
            title: 'Mengupload Materi...',
            text: 'Mohon tunggu, file sedang diproses',
            icon: 'info',
            allowOutsideClick: false,
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
    });

    // File validation
    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('file-input')) {
            const file = e.target.files[0];
            if (file) {
                // Check file size (10MB = 10 * 1024 * 1024 bytes)
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        title: 'File Terlalu Besar!',
                        text: 'Ukuran file maksimal 10MB',
                        icon: 'error',
                        confirmButtonColor: '#0ea5e9'
                    });
                    e.target.value = '';
                    return;
                }

                // Auto-fill file name if empty
                const nameInput = e.target.closest('.file-upload-item').querySelector('input[name="file_names[]"]');
                if (!nameInput.value) {
                    nameInput.value = file.name;
                }
            }
        }
    });

    // Auto-hide alerts after 7 seconds
    const alerts = document.querySelectorAll('.bg-green-50, .bg-red-50');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.parentNode) {
                alert.style.transition = 'opacity 0.5s, transform 0.5s';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    if (alert.parentNode) {
                        alert.remove();
                    }
                }, 500);
            }
        }, 7000);
    });
});
</script>
@endpush
@endsection