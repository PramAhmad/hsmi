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
                    <i class="fa-solid fa-heart text-white text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">KOLEKSI REKOMENDASI JURNAL</h5>
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-star text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Rekomendasi 
                <span class="text-sky-500 relative inline-block">
                    Jurnal Akademik
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">📚</span>
                    <span class="text-4xl animate-pulse">⭐</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Jurnal berkualitas tinggi yang relevan dengan Sistem Informasi</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Dipilih khusus oleh tim kurasi HMSI!</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>Mendukung riset dan tugas akhir mahasiswa ✨</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#journals-list" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-book text-xl"></i>
                    Jelajahi Jurnal
                </a>
                
                <!-- <a href="#" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-slate-900 px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-bookmark text-lg"></i>
                    Reading List
                </a> -->
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
                <h3 class="text-2xl font-bold text-gray-800">{{ $journals->total() ?? '0' }}</h3>
                <p class="text-gray-600 font-medium">Total Jurnal</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">⭐</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{   '15+' }}</h3>
                <p class="text-gray-600 font-medium">High Impact</p>
            </div>
            
            <div class="text-center p-6 bg-sky-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-sky-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $siRelevantCount ?? '25+' }}</h3>
                <p class="text-gray-600 font-medium">SI Relevant</p>
            </div>
            
            <div class="text-center p-6 bg-blue-50 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🔗</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $withDoiCount ?? '20+' }}</h3>
                <p class="text-gray-600 font-medium">With DOI</p>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Journals List -->
<section id="journals-list" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-20 pb-32 overflow-hidden">
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
                <h3 class="text-xl font-bold text-gray-800">Filter Jurnal</h3>
            </div>
            
            <form method="GET" action="{{ route('journals') }}" class="grid md:grid-cols-6 gap-4">
                <!-- Search -->
                <div class="relative md:col-span-2">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari jurnal, penulis, atau kata kunci..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Category Filter -->
                <select name="category" class="w-full px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Kategori</option>
                    <option value="information_systems" {{ request('category') == 'information_systems' ? 'selected' : '' }}>🖥️ Information Systems</option>
                    <option value="software_engineering" {{ request('category') == 'software_engineering' ? 'selected' : '' }}>💻 Software Engineering</option>
                    <option value="data_science" {{ request('category') == 'data_science' ? 'selected' : '' }}>📊 Data Science</option>
                    <option value="cybersecurity" {{ request('category') == 'cybersecurity' ? 'selected' : '' }}>🔒 Cybersecurity</option>
                    <option value="artificial_intelligence" {{ request('category') == 'artificial_intelligence' ? 'selected' : '' }}>🤖 Artificial Intelligence</option>
                    <option value="human_computer_interaction" {{ request('category') == 'human_computer_interaction' ? 'selected' : '' }}>👤 HCI</option>
                </select>
                
                <!-- Publication Year -->
                <select name="year" class="w-full px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="">Semua Tahun</option>
                    @for($year = date('Y'); $year >= 2020; $year--)
                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
                </select>
                
           
                <!-- Sort -->
                <select name="sort" class="w-full  px-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>🕒 Terbaru</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>⏰ Terlama</option>
                    <option value="most_cited" {{ request('sort') == 'most_cited' ? 'selected' : '' }}>📈 Most Cited</option>
                    <option value="highest_impact" {{ request('sort') == 'highest_impact' ? 'selected' : '' }}>🎯 Highest Impact</option>
                    <option value="hmsi_recommended" {{ request('sort') == 'hmsi_recommended' ? 'selected' : '' }}>⭐ HMSI Pick</option>
                </select>
                
                <!-- Filter Button -->
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-sky-500 hover:bg-sky-600 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i>
                        Filter
                    </button>
                    <a href="{{ route('journals') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fa-solid fa-refresh"></i>
                    </a>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'category', 'year', 'quality', 'sort']))
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
                    {{ ucfirst(str_replace('_', ' ', request('category'))) }}
                    <a href="{{ request()->fullUrlWithoutQuery('category') }}" class="hover:text-blue-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif
                
                @if(request('year'))
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    Tahun {{ request('year') }}
                    <a href="{{ request()->fullUrlWithoutQuery('year') }}" class="hover:text-green-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                @if(request('quality'))
                <span class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ strtoupper(request('quality')) }}
                    <a href="{{ request()->fullUrlWithoutQuery('quality') }}" class="hover:text-purple-900">
                        <i class="fa-solid fa-times"></i>
                    </a>
                </span>
                @endif

                <a href="{{ route('journals') }}" class="text-sm text-gray-500 hover:text-gray-700 underline">
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
                        Ada {{ $journals->total() }} jurnal terpilih
                    </h4>
                    @if(request()->hasAny(['search', 'category', 'year', 'quality']))
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Hasil Filter
                    </span>
                    @endif
                </div>
                
                <a href="#" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-plus"></i>
                    Rekomendasikan Jurnal
                </a>
            </div>
        </div>

        <!-- Journals Grid -->
        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8">
            @forelse($journals as $index => $journal)
            <div class="group wow fadeInUp" data-wow-delay="{{ $index * 100 }}ms" data-wow-duration="1500ms">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 hover:rotate-1 relative">
                    <!-- HMSI Recommended Badge -->
                    @if($journal->is_hmsi_recommended ?? rand(0,1))
                    <div class="absolute -top-3 -right-3 w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-600 rounded-full flex items-center justify-center z-10 shadow-lg group-hover:animate-bounce">
                        <span class="text-xl">⭐</span>
                    </div>
                    @endif

                    <!-- Quality Badge -->
                    <div class="absolute -top-3 -left-3 z-10 shadow-lg">
                        @php
                            $qualities = ['q1' => ['color' => 'from-green-500 to-green-600', 'text' => 'Q1'], 
                                         'q2' => ['color' => 'from-blue-500 to-blue-600', 'text' => 'Q2'], 
                                         'q3' => ['color' => 'from-purple-500 to-purple-600', 'text' => 'Q3'],
                                         'peer_reviewed' => ['color' => 'from-gray-500 to-gray-600', 'text' => 'PR']];
                            $quality = $journal->quality ?? array_rand($qualities);
                            $qualityInfo = $qualities[$quality] ?? $qualities['peer_reviewed'];
                        @endphp
                        <span class="bg-gradient-to-r {{ $qualityInfo['color'] }} text-white px-3 py-1 rounded-full text-xs font-bold">
                            {{ $qualityInfo['text'] }}
                        </span>
                    </div>

                    <!-- Header Section -->
                    <div class="relative bg-gradient-to-br from-sky-100 to-blue-100 p-6">
                        <!-- Publication Year -->
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/80 backdrop-blur-sm text-blue-700 px-3 py-1 rounded-full text-sm font-bold">
                                {{ $journal->publication_year ?? date('Y') }}
                            </span>
                        </div>

                        <!-- Journal Icon -->
                        <div class="flex items-center justify-center mt-4 mb-4">
                            <div class="w-20 h-20 bg-gradient-to-br from-sky-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-file-alt text-white text-3xl"></i>
                            </div>
                        </div>

                        <!-- DOI Badge -->
                        @if($journal->doi)
                        <div class="text-center">
                            <span class="bg-gradient-to-r from-green-500 to-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase">
                                DOI Available
                            </span>
                        </div>
                        @endif
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <!-- Journal Name -->
                        <div class="mb-3">
                            <span class="bg-gradient-to-r from-sky-100 to-blue-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $journal->journal_name ?? 'Journal of Information Systems' }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-sky-600 transition-colors line-clamp-2">
                            <a href="#" onclick="showJournalDetail('{{ $journal->id }}')">{{ $journal->title }}</a>
                        </h3>

                        <!-- HMSI Recommendation Note -->
                        @if($journal->is_hmsi_recommended ?? rand(0,1))
                        <div class="mb-4">
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl p-3 border-l-4 border-amber-500">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">💡</span>
                                    <span class="text-sm font-semibold text-amber-700">HMSI Pick:</span>
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
                        @endif

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
                                <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
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
                                @foreach(array_slice(explode(',', $journal->keywords), 0, 3) as $keyword)
                                <span class="bg-gradient-to-r from-sky-400 to-blue-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                                    {{ trim($keyword) }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Relevance Score -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-sky-600">Relevansi SI:</span>
                                <div class="flex items-center gap-1">
                                    @php $relevanceScore = $journal->relevance_score ?? rand(4,5); @endphp
                                    @for($i = 1; $i <= 5; $i++)
                                    <i class="fa-solid fa-star {{ $i <= $relevanceScore ? 'text-amber-400' : 'text-gray-300' }} text-sm"></i>
                                    @endfor
                                    <span class="text-sm font-bold text-gray-700 ml-1">{{ $relevanceScore }}.0</span>
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
                                    <span>{{ $journal->issue }}</span>
                                </div>
                                @endif
                            </div>
                            @if($journal->pages)
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">
                                pp. {{ $journal->pages }}
                            </span>
                            @endif
                        </div>

                        <!-- Citation Count -->
                        @if($journal->citation_count)
                        <div class="mb-4">
                            <div class="flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-quote-left text-green-500"></i>
                                <span class="text-gray-600">Dikutip {{ $journal->citation_count }}x</span>
                            </div>
                        </div>
                        @endif

                        <!-- Footer -->
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">📚</span>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-700">
                                        {{ $journal->is_hmsi_recommended ? 'HMSI Curated' : 'Academic Source' }}
                                    </span>
                                    <p class="text-xs text-gray-500">Quality Assured</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                @if($journal->file_path)
                                <button onclick="downloadJournal('{{ $journal->id }}')" class="w-8 h-8 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg flex items-center justify-center transition-colors" title="Download">
                                    <i class="fa-solid fa-download text-sm"></i>
                                </button>
                                @endif
                                @if($journal->doi)
                                <button onclick="openDoi('{{ $journal->doi }}')" class="w-8 h-8 bg-green-100 hover:bg-green-200 text-green-600 rounded-lg flex items-center justify-center transition-colors" title="DOI Link">
                                    <i class="fa-solid fa-external-link text-sm"></i>
                                </button>
                                @endif
                                <button onclick="bookmarkJournal('{{ $journal->id }}')" class="w-8 h-8 bg-amber-100 hover:bg-amber-200 text-amber-600 rounded-lg flex items-center justify-center transition-colors" title="Bookmark">
                                    <i class="fa-solid fa-bookmark text-sm"></i>
                                </button>
                                <button onclick="shareJournal('{{ $journal->id }}')" class="w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-600 rounded-lg flex items-center justify-center transition-colors" title="Share">
                                    <i class="fa-solid fa-share text-sm"></i>
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
                @if(request()->hasAny(['search', 'category', 'year', 'quality']))
                <h5 class="text-xl font-bold text-gray-800 mb-3">Tidak ada jurnal yang sesuai</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Coba ubah filter atau kata kunci pencarian!</p>
                <a href="{{ route('journals') }}" 
                   class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-refresh"></i>
                    Reset Filter
                </a>
                @else
                <h5 class="text-xl font-bold text-gray-800 mb-3">Koleksi Jurnal Sedang Disiapkan</h5>
                <p class="text-gray-500 mb-6 max-w-sm mx-auto">Tim kurasi HMSI sedang memilih jurnal-jurnal terbaik untuk kalian!</p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#" 
                       class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-heart"></i>
                        Rekomendasikan Jurnal
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
        @if($journals->hasPages())
        <div class="mt-12 flex justify-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                {{ $journals->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Quick Categories -->
<!-- <section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Kategori Populer</h3>
            <p class="text-gray-600">Akses cepat jurnal berdasarkan bidang kajian</p>
        </div>
        
        <div class="grid md:grid-cols-6 gap-4">
            @php
            $categories = [
                ['icon' => 'fa-desktop', 'name' => 'Information Systems', 'count' => '15+', 'color' => 'sky', 'key' => 'information_systems'],
                ['icon' => 'fa-code', 'name' => 'Software Engineering', 'count' => '12+', 'color' => 'blue', 'key' => 'software_engineering'],
                ['icon' => 'fa-chart-bar', 'name' => 'Data Science', 'count' => '10+', 'color' => 'sky', 'key' => 'data_science'],
                ['icon' => 'fa-shield-alt', 'name' => 'Cybersecurity', 'count' => '8+', 'color' => 'blue', 'key' => 'cybersecurity'],
                ['icon' => 'fa-brain', 'name' => 'AI & ML', 'count' => '6+', 'color' => 'sky', 'key' => 'artificial_intelligence'],
                ['icon' => 'fa-users', 'name' => 'HCI', 'count' => '5+', 'color' => 'blue', 'key' => 'human_computer_interaction'],
            ];
            @endphp
            
            @foreach($categories as $category)
            <a href="{{ route('journals', ['category' => $category['key']]) }}" 
               class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer group border border-gray-100">
                <div class="text-center">
                    <div class="w-12 h-12 bg-{{ $category['color'] }}-500 rounded-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fa-solid {{ $category['icon'] }} text-white text-lg"></i>
                    </div>
                    <h6 class="font-semibold text-gray-800 text-sm mb-1">{{ $category['name'] }}</h6>
                    <p class="text-xs text-gray-500">{{ $category['count'] }} jurnal</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section> -->

<!-- CTA Section -->
<section class="relative bg-sky-500 pt-20 pb-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full bg-repeat" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="text-3xl animate-bounce">📚</span>
                <h3 class="text-3xl font-bold">Bantu Teman-Teman Lain!</h3>
                <span class="text-3xl animate-bounce" style="animation-delay: 0.5s;">💝</span>
            </div>
            
            <p class="text-xl text-sky-100 mb-8 max-w-2xl mx-auto">
                Punya jurnal berkualitas yang layak dibaca teman-teman? Sharing is caring - rekomendasikan sekarang!
            </p>
            
            <!-- <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white text-sky-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <i class="fa-solid fa-heart text-lg"></i>
                    Rekomendasikan Jurnal
                </a>
                
                <a href="#" 
                   class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Share di Grup
                </a>
            </div> -->
        </div>
    </div>
</section>

<!-- Detail Modal -->
<div id="journalDetailModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-sky-100 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-file-alt text-sky-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Detail Jurnal</h3>
                    </div>
                    <button onclick="closeJournalDetail()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-times text-gray-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div id="journalDetailContent" class="p-6">
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
function showJournalDetail(id) {
    const modal = document.getElementById('journalDetailModal');
    const content = document.getElementById('journalDetailContent');
    
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
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-2xl">⭐</span>
                        <h4 class="text-lg font-bold text-gray-800">HMSI Recommended</h4>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Machine Learning Applications in Information Systems: A Comprehensive Review</h4>
                    <p class="text-gray-600">Jurnal lengkap tentang penerapan machine learning dalam sistem informasi...</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-3">Informasi Jurnal</h5>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>📖 Journal: Information Systems Research</li>
                            <li>👥 Authors: Smith, J. et al.</li>
                            <li>📅 Year: 2024</li>
                            <li>📄 Volume: 35, Issue: 2</li>
                            <li>🏷️ Pages: 123-145</li>
                            <li>⭐ Quality: Q1</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h5 class="font-semibold text-gray-800 mb-3">Kenapa Direkomendasikan</h5>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>✅ Metodologi yang solid</li>
                            <li>✅ Relevan dengan kurikulum SI</li>
                            <li>✅ Studi kasus aplikatif</li>
                            <li>✅ Referensi lengkap</li>
                            <li>✅ Impact factor tinggi</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-amber-50 rounded-xl p-4 border border-amber-200">
                    <h5 class="font-semibold text-amber-800 mb-2">💡 Tips dari Tim HMSI:</h5>
                    <p class="text-amber-700 text-sm">Jurnal ini sangat cocok untuk referensi skripsi dengan topik machine learning. Fokus pada section methodology dan case study untuk insight yang mendalam.</p>
                </div>
                
                <div class="flex flex-wrap gap-3">
                    <button class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg">
                        <i class="fa-solid fa-download mr-2"></i>Download PDF
                    </button>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                        <i class="fa-solid fa-external-link mr-2"></i>DOI Link
                    </button>
                    <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg">
                        <i class="fa-solid fa-bookmark mr-2"></i>Bookmark
                    </button>
                </div>
            </div>
        `;
    }, 1000);
}

function closeJournalDetail() {
    document.getElementById('journalDetailModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function downloadJournal(id) {
    alert('Download jurnal ID: ' + id);
}

function openDoi(doi) {
    window.open('https://doi.org/' + doi, '_blank');
}

function bookmarkJournal(id) {
    alert('Bookmark jurnal ID: ' + id);
}

function shareJournal(id) {
    if (navigator.share) {
        navigator.share({
            title: 'Jurnal Rekomendasi HMSI',
            text: 'Lihat jurnal berkualitas ini!',
            url: window.location.origin + '/journals/' + id
        });
    } else {
        navigator.clipboard.writeText(window.location.origin + '/journals/' + id);
        alert('Link berhasil disalin!');
    }
}

// Close modal when clicking outside
document.getElementById('journalDetailModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeJournalDetail();
    }
});

// Handle escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeJournalDetail();
    }
});
</script>
@endpush
@endsection