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
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">KURIKULUM SISTEM INFORMASI</h5>
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-book text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Daftar 
                <span class="text-sky-500 relative inline-block">
                    Mata Kuliah
                    <img src="{{ asset('learnit/assets/images/shape/banner-span-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">📚</span>
                    <span class="text-4xl animate-pulse">🎓</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Kurikulum lengkap Program Studi Sistem Informasi</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Total {{ $mataKuliah->count() }} mata kuliah tersedia!</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>Dari semester 1 hingga semester 8 ✨</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#matakuliah-table" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-list text-xl"></i>
                    Lihat Semua Mata Kuliah
                </a>
                
                <a href="{{ route('bank-materi') }}" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-gray-900 px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-folder text-lg"></i>
                    Bank Materi
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
                <h3 class="text-2xl font-bold text-gray-800">{{ $mataKuliah->count() }}</h3>
                <p class="text-gray-600 font-medium">Total Mata Kuliah</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $mataKuliah->sum('sks') }}</h3>
                <p class="text-gray-600 font-medium">Total SKS</p>
            </div>
            
            <div class="text-center p-6 bg-sky-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-sky-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📝</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $mataKuliah->max('semester') ?? '8' }}</h3>
                <p class="text-gray-600 font-medium">Total Semester</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎓</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $mataKuliah->where('is_active', true)->count() }}</h3>
                <p class="text-gray-600 font-medium">Mata Kuliah Aktif</p>
            </div>
        </div>
    </div>
</section>

<!-- Mata Kuliah Table Section -->
<section id="matakuliah-table" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-20 pb-32 overflow-hidden">
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
                <h3 class="text-xl font-bold text-gray-800">Filter Mata Kuliah</h3>
            </div>
            
            <form method="GET" action="{{ route('matakuliah') }}" class="grid md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari mata kuliah..." 
                           class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Semester Filter -->
                <select name="semester" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Semester</option>
                    @for($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}" {{ request('semester') == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
                    @endfor
                </select>
                
                <!-- SKS Filter -->
                <select name="sks" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua SKS</option>
                    <option value="1" {{ request('sks') == '1' ? 'selected' : '' }}>1 SKS</option>
                    <option value="2" {{ request('sks') == '2' ? 'selected' : '' }}>2 SKS</option>
                    <option value="3" {{ request('sks') == '3' ? 'selected' : '' }}>3 SKS</option>
                    <option value="4" {{ request('sks') == '4' ? 'selected' : '' }}>4 SKS</option>
                </select>
                
                <!-- Filter Button -->
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i>
                        Filter
                    </button>
                    <a href="{{ route('matakuliah') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-refresh"></i>
                    </a>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'semester', 'sks']))
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
                
                @if(request('semester'))
                <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                    Semester {{ request('semester') }}
                    <a href="{{ request()->fullUrlWithoutQuery('semester') }}" class="hover:text-blue-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif
                
                @if(request('sks'))
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ request('sks') }} SKS
                    <a href="{{ request()->fullUrlWithoutQuery('sks') }}" class="hover:text-green-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                <a href="{{ route('matakuliah') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
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
                        Ada {{ $filteredMataKuliah->count() }} mata kuliah
                    </h4>
                    @if(request()->hasAny(['search', 'semester', 'sks']))
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Hasil Filter
                    </span>
                    @endif
                </div>
                
                <a href="{{ route('bank-materi') }}" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-folder"></i>
                    Lihat Bank Materi
                </a>
            </div>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            @if($filteredMataKuliah->count() > 0)
            <!-- Table Header -->
            <div class="bg-gradient-to-r from-sky-500 to-blue-600 px-6 py-4">
                <h3 class="text-white text-lg font-bold flex items-center gap-2">
                    <i class="fa-solid fa-table"></i>
                    Daftar Mata Kuliah Program Studi Sistem Informasi
                </h3>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">📚</span>
                                    Mata Kuliah
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-lg">🔢</span>
                                    Kode
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-lg">📅</span>
                                    Semester
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-lg">⭐</span>
                                    SKS
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-lg">📊</span>
                                    Status
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-lg">🔗</span>
                                    Aksi
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($filteredMataKuliah as $index => $mk)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <!-- Nama Mata Kuliah -->
                            <td class="px-6 py-4">
                                <div class="flex items-start gap-3">
                                    <!-- Semester Badge -->
                                    <div class="flex-shrink-0">
                                        <span class="inline-flex items-center justify-center w-8 h-8 bg-sky-100 text-sky-600 rounded-full text-sm font-bold">
                                            {{ $mk->semester }}
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800 hover:text-sky-600 transition-colors">
                                            {{ $mk->nama }}
                                        </h4>
                                        @if($mk->deskripsi)
                                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">
                                            {{ Str::limit($mk->deskripsi, 120) }}
                                        </p>
                                        @endif
                                        <div class="flex items-center gap-4 mt-2 text-xs text-gray-500">
                                            @if($mk->program_studi)
                                            <span class="flex items-center gap-1">
                                                <i class="fa-solid fa-graduation-cap text-sky-500"></i>
                                                {{ $mk->program_studi }}
                                            </span>
                                            @endif
                                            @if($mk->fakultas)
                                            <span class="flex items-center gap-1">
                                                <i class="fa-solid fa-building text-blue-500"></i>
                                                {{ $mk->fakultas }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Kode -->
                            <td class="px-6 py-4 text-center">
                                <span class="inline-flex items-center px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm font-mono font-semibold">
                                    {{ $mk->kode ?? 'SI-' . str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}
                                </span>
                            </td>

                            <!-- Semester -->
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center">
                                    @php
                                        $semesterColors = [
                                            1 => 'bg-green-100 text-green-700',
                                            2 => 'bg-blue-100 text-blue-700',
                                            3 => 'bg-yellow-100 text-yellow-700',
                                            4 => 'bg-orange-100 text-orange-700',
                                            5 => 'bg-red-100 text-red-700',
                                            6 => 'bg-purple-100 text-purple-700',
                                            7 => 'bg-pink-100 text-pink-700',
                                            8 => 'bg-indigo-100 text-indigo-700',
                                        ];
                                        $colorClass = $semesterColors[$mk->semester] ?? 'bg-gray-100 text-gray-700';
                                    @endphp
                                    <span class="inline-flex items-center justify-center w-8 h-8 {{ $colorClass }} rounded-full text-sm font-bold">
                                        {{ $mk->semester }}
                                    </span>
                                </div>
                            </td>

                            <!-- SKS -->
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <span class="text-2xl font-bold text-sky-600">{{ $mk->sks }}</span>
                                    <span class="text-sm text-gray-500">SKS</span>
                                </div>
                            </td>

                            <!-- Status -->
                            <td class="px-6 py-4 text-center">
                                @if($mk->is_active)
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                    Aktif
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-semibold">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    Tidak Aktif
                                </span>
                                @endif
                            </td>

                            <!-- Aksi -->
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <!-- Lihat Materi -->
                                    <a href="{{ route('bank-materi', ['mata_kuliah' => strtolower($mk->nama)]) }}" 
                                       class="inline-flex items-center gap-1 px-3 py-2 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg text-sm font-semibold transition-all duration-300 hover:shadow-md"
                                       title="Lihat Bank Materi">
                                        <i class="fa-solid fa-folder text-xs"></i>
                                        <span>Materi</span>
                                    </a>
                                    
                                    <!-- Detail -->
                                    <button onclick="showMataKuliahDetail('{{ $mk->id }}')" 
                                            class="inline-flex items-center gap-1 px-3 py-2 bg-blue-100 hover:bg-blue-200 text-blue-600 rounded-lg text-sm font-semibold transition-all duration-300 hover:shadow-md"
                                            title="Lihat Detail">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Detail</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm text-gray-600">
                    <div class="flex items-center gap-4">
                        <span>Total: <strong>{{ $filteredMataKuliah->count() }}</strong> mata kuliah</span>
                        <span>Total SKS: <strong>{{ $filteredMataKuliah->sum('sks') }}</strong></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span>{{ $filteredMataKuliah->where('is_active', true)->count() }} Aktif</span>
                        <span class="w-2 h-2 bg-gray-400 rounded-full ml-3"></span>
                        <span>{{ $filteredMataKuliah->where('is_active', false)->count() }} Tidak Aktif</span>
                    </div>
                </div>
            </div>
            @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-search text-3xl text-sky-500"></i>
                    </div>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-3">Tidak ada mata kuliah yang sesuai</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Coba ubah filter atau kata kunci pencarian!</p>
                <a href="{{ route('matakuliah') }}" 
                   class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-refresh"></i>
                    Reset Filter
                </a>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Semester Overview -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Distribusi per Semester</h3>
            <p class="text-gray-600">Overview mata kuliah berdasarkan semester</p>
        </div>
        
        <div class="grid md:grid-cols-4 lg:grid-cols-8 gap-4">
            @for($sem = 1; $sem <= 8; $sem++)
            @php
                $semesterMk = $mataKuliah->where('semester', $sem);
                $semesterColors = [
                    1 => ['bg' => 'bg-green-500', 'hover' => 'hover:bg-green-600'],
                    2 => ['bg' => 'bg-blue-500', 'hover' => 'hover:bg-blue-600'],
                    3 => ['bg' => 'bg-yellow-500', 'hover' => 'hover:bg-yellow-600'],
                    4 => ['bg' => 'bg-orange-500', 'hover' => 'hover:bg-orange-600'],
                    5 => ['bg' => 'bg-red-500', 'hover' => 'hover:bg-red-600'],
                    6 => ['bg' => 'bg-purple-500', 'hover' => 'hover:bg-purple-600'],
                    7 => ['bg' => 'bg-pink-500', 'hover' => 'hover:bg-pink-600'],
                    8 => ['bg' => 'bg-indigo-500', 'hover' => 'hover:bg-indigo-600'],
                ];
                $colors = $semesterColors[$sem];
            @endphp
            <a href="{{ route('matakuliah', ['semester' => $sem]) }}" 
               class="block {{ $colors['bg'] }} {{ $colors['hover'] }} text-white rounded-xl p-6 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">{{ $sem }}</div>
                    <p class="text-sm opacity-90 mb-2">Semester</p>
                    <div class="bg-white/20 rounded-lg p-2">
                        <div class="text-lg font-bold">{{ $semesterMk->count() }}</div>
                        <div class="text-xs opacity-80">Mata Kuliah</div>
                    </div>
                    <div class="mt-2 text-xs opacity-80">
                        {{ $semesterMk->sum('sks') }} SKS
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </div>
</section>

<!-- Detail Modal -->
<div id="mataKuliahDetailModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-sky-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-book text-sky-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Detail Mata Kuliah</h3>
                    </div>
                    <button onclick="closeMataKuliahDetail()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-times text-gray-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div id="mataKuliahDetailContent" class="p-6">
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
function showMataKuliahDetail(id) {
    const modal = document.getElementById('mataKuliahDetailModal');
    const content = document.getElementById('mataKuliahDetailContent');
    
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
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Algoritma & Pemrograman</h4>
                    <p class="text-gray-600">Mata kuliah fundamental yang membahas konsep dasar algoritma dan pemrograman komputer...</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-3">Informasi Mata Kuliah</h5>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>🔢 Kode: SI-001</li>
                            <li>📅 Semester: 1</li>
                            <li>⭐ SKS: 3</li>
                            <li>🎓 Program Studi: Sistem Informasi</li>
                            <li>🏢 Fakultas: FTIK</li>
                            <li>📊 Status: Aktif</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-3">Bank Materi</h5>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-center justify-between">
                                <span class="text-gray-600">📚 Materi Kuliah</span>
                                <span class="text-sky-500 font-semibold">5 file</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-gray-600">📝 Latihan Soal</span>
                                <span class="text-sky-500 font-semibold">3 set</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-gray-600">💼 Project Template</span>
                                <span class="text-sky-500 font-semibold">2 template</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg font-semibold">
                        <i class="fa-solid fa-folder mr-2"></i>Lihat Bank Materi
                    </a>
                    <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-semibold">
                        <i class="fa-solid fa-bookmark mr-2"></i>Bookmark
                    </button>
                </div>
            </div>
        `;
    }, 1000);
}

function closeMataKuliahDetail() {
    document.getElementById('mataKuliahDetailModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('mataKuliahDetailModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeMataKuliahDetail();
    }
});

// Handle escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeMataKuliahDetail();
    }
});
</script>
@endpush
@endsection