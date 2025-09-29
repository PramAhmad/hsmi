@extends('front.layout')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-sky-50 pt-32 mt-20 pb-16 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 left-10 opacity-20">
        <div class="w-32 h-32 bg-blue-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-24 h-24 bg-sky-400 rounded-full animate-bounce"></div>
    </div>
    <div class="absolute top-1/3 right-1/4 opacity-10">
        <div class="w-40 h-40 bg-blue-300 rounded-full animate-ping"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-users text-white text-xl"></i>
                </div>
                <h5 class="text-blue-600 uppercase tracking-widest font-semibold text-sm">KELUARGA BESAR HMSI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-heart text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl font-bold text-gray-800 leading-tight mb-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Tim <span class="text-blue-600 relative inline-block">
                    Keren Kami
                    <img src="{{ asset('learnit/assets/images/shape/header-shape.png') }}" alt="shape" class="absolute -bottom-2 left-0 w-full">
                </span> 
                <div class="inline-flex items-center gap-2 ml-2">
                    <span class="text-3xl animate-bounce">🚀</span>
                    <span class="text-3xl animate-pulse">✨</span>
                </div>
            </h1>
            
            <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                Kenalan sama para pengurus HMSI yang passionate, kreatif, dan siap membantu kalian berkembang! 
                <span class="text-blue-600 font-semibold">Jangan sungkan buat menyapa ya!</span> 😊
            </p>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">👥</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">{{ $totalMembers }}</h3>
                    <p class="text-gray-600 text-sm font-medium">Total Anggota</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏢</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">{{ $totalDivisi }}</h3>
                    <p class="text-gray-600 text-sm font-medium">Divisi Aktif</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">☕</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">100+</h3>
                    <p class="text-gray-600 text-sm font-medium">Cup Kopi/Hari</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 hover:rotate-1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-sky-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎉</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">24/7</h3>
                    <p class="text-gray-600 text-sm font-medium">Siap Bantu</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search & Filter Section -->
<section class="bg-white py-8 border-b border-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            <!-- Search Bar -->
            <div class="flex-1 max-w-md">
                <form method="GET" action="{{ route('anggota.index') }}" class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari nama anggota..." 
                           class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                    <i class="fa-solid fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    @if(request('divisi'))
                        <input type="hidden" name="divisi" value="{{ request('divisi') }}">
                    @endif
                </form>
            </div>

            <!-- Filter Divisi -->
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-sm font-medium text-gray-600">Filter:</span>
                <a href="{{ route('anggota.index') }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ !request('divisi') ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    Semua
                </a>
                @foreach(['ketua', 'wakil_ketua', 'sekretaris', 'bendahara'] as $role)
                <a href="{{ route('anggota.index', ['divisi' => $role] + request()->only('search')) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ request('divisi') == $role ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $divisiList[$role] }}
                </a>
                @endforeach
                
                <!-- Dropdown for other divisions -->
                <!-- <div class="relative">
                    <button type="button" class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all flex items-center gap-2" onclick="toggleDropdown()">
                        Divisi Lain
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div id="divisionDropdown" class="hidden absolute top-full mt-2 bg-white rounded-xl shadow-lg border border-gray-200 z-20 min-w-48">
                        @foreach([ 'pengurus'] as $role)
                        <a href="{{ route('anggota.index', ['divisi' => $role] + request()->only('search')) }}" 
                           class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 {{ request('divisi') == $role ? 'bg-blue-50 text-blue-600' : '' }}">
                            {{ $divisiList[$role] }}
                        </a>
                        @endforeach
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Members Grid Section -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-sky-50 py-16 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        @if($members->count() > 0)
        <!-- Members Grid -->
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-8">
            @foreach($members as $index => $member)
            @php
                $roleInfo = $member->getRoleDisplayName();
                $socialMedia = $member->getFormattedSocialMedia();
            @endphp
            
            <div class="group wow fadeInUp" data-wow-delay="{{ $index * 50 }}ms" data-wow-duration="1500ms">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 hover:rotate-1 relative">
                    <!-- Cute Badge -->
                    <div class="absolute -top-3 -right-3 w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full flex items-center justify-center z-10 shadow-lg group-hover:animate-bounce">
                        <span class="text-xl">{{ $roleInfo['emoji'] }}</span>
                    </div>

                    <!-- Avatar Section -->
                    <div class="relative h-80 bg-gradient-to-br from-blue-100 to-sky-100 overflow-hidden">
                        <img src="{{ $member->getFilamentAvatarUrl() }}" 
                             alt="{{ $member->name }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        
                        <!-- Online Status -->
                        <div class="absolute bottom-4 right-4 w-6 h-6 bg-green-500 rounded-full border-3 border-white flex items-center justify-center shadow-lg">
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        </div>
                        
                        <!-- Role Badge -->
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-gradient-to-r from-blue-500 to-sky-600 text-white px-3 py-1 rounded-full text-xs font-semibold uppercase backdrop-blur-sm bg-opacity-90">
                                {{ $roleInfo['name'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-6">
                        <!-- Name -->
                        <div class="text-center mb-4">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">{{ $member->name }}</h4>
                            <div class="w-12 h-1 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full mx-auto"></div>
                        </div>

                        <!-- Position/NIM Info -->
                        @if($member->position || $member->nim)
                        <div class="mb-4">
                            @if($member->position)
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">💼</span>
                                <span class="text-sm font-semibold text-blue-600">Posisi:</span>
                            </div>
                            <p class="text-gray-600 text-sm">{{ $member->position }}</p>
                            @endif
                            
                            @if($member->nim)
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-lg">🎓</span>
                                <span class="text-sm text-gray-600">NIM: {{ $member->nim }}</span>
                                @if($member->angkatan)
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded-full">{{ $member->angkatan }}</span>
                                @endif
                            </div>
                            @endif
                        </div>
                        @endif

                        <!-- Fun Fact -->
                        @if($member->fun_fact)
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">🌟</span>
                                <span class="text-sm font-semibold text-blue-600">Fun Fact:</span>
                            </div>
                            <p class="text-gray-600 text-sm">{{ Str::limit($member->fun_fact, 80) }}</p>
                        </div>
                        @endif

                        <!-- Hobby -->
                        @if($member->hobby)
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">🎯</span>
                                <span class="text-sm font-semibold text-blue-600">Hobi:</span>
                            </div>
                            <p class="text-gray-600 text-sm">{{ $member->hobby }}</p>
                        </div>
                        @endif

                        <!-- Bio -->
                        @if($member->bio)
                        <div class="mb-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-lg">💬</span>
                                <span class="text-sm font-semibold text-blue-600">About:</span>
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
                                @if($socialMedia->count() > 0)
                                    @foreach($socialMedia->take(3) as $social)
                                    <a href="{{ $social['url'] }}" target="_blank" 
                                       class="w-8 h-8 bg-gradient-to-r from-blue-100 to-sky-100 hover:from-blue-500 hover:to-sky-600 text-blue-600 hover:text-white rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                        <i class="{{ $social['icon'] }} text-sm"></i>
                                    </a>
                                    @endforeach
                                @else
                                <div class="flex items-center gap-1 text-gray-400">
                                    <i class="fa-solid fa-heart text-sm"></i>
                                    <span class="text-xs">Tim HMSI</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Hover Effect Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-500/0 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($members->hasPages())
        <div class="flex justify-center mt-12">
            <div class="bg-white rounded-2xl shadow-lg p-4">
                {{ $members->appends(request()->query())->links() }}
            </div>
        </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="text-center py-16 bg-white rounded-2xl border border-gray-100">
            <div class="mb-6">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-sky-200 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-users text-3xl text-blue-500"></i>
                </div>
            </div>
            <h5 class="text-xl font-bold text-gray-800 mb-3">Anggota tidak ditemukan</h5>
            <p class="text-gray-500 mb-6 max-w-sm mx-auto">
                @if(request('search'))
                    Tidak ada anggota dengan nama "{{ request('search') }}"
                @elseif(request('divisi'))
                    Belum ada anggota di divisi ini
                @else
                    Belum ada anggota yang terdaftar
                @endif
            </p>
            <a href="{{ route('anggota.index') }}" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-sky-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-sky-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                <i class="fa-solid fa-arrow-left"></i>
                Lihat Semua Anggota
            </a>
        </div>
        @endif
    </div>
</section>

<!-- Fun CTA Section -->
@if($members->count() > 0)
<section class="bg-gradient-to-br from-blue-50 via-white to-sky-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <div class="bg-gradient-to-r from-blue-500 to-sky-600 rounded-3xl p-8 text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>')"></div>
                </div>
                
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <span class="text-3xl animate-bounce">🤝</span>
                        <h4 class="text-2xl font-bold text-white">Mau Gabung Tim Keren Ini?</h4>
                        <span class="text-3xl animate-bounce" style="animation-delay: 0.5s;">🚀</span>
                    </div>
                    
                    <p class="text-blue-100 mb-6 max-w-md mx-auto">
                        Kami selalu terbuka untuk anggota baru yang passionate dan siap berkontribusi untuk kemajuan HMSI!
                    </p>
                    
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('membership.register') }}" 
                           class="inline-flex items-center gap-3 bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                            <span class="text-xl">📝</span>
                            Daftar Jadi Anggota
                            <i class="fa-solid fa-arrow-right text-lg"></i>
                        </a>
                        
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-6 py-4 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                            <span class="text-xl">💬</span>
                            Chat Sama Kita
                        </a>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute top-10 left-10 w-8 h-8 bg-white/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-6 h-6 bg-white/30 rounded-full animate-bounce"></div>
                <div class="absolute top-1/2 right-20 w-4 h-4 bg-white/25 rounded-full animate-ping"></div>
            </div>
        </div>
    </div>
</section>
@endif

<script>
function toggleDropdown() {
    const dropdown = document.getElementById('divisionDropdown');
    dropdown.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('divisionDropdown');
    const button = event.target.closest('button');
    
    if (!button || !button.onclick) {
        dropdown.classList.add('hidden');
    }
});

// Auto-submit search form on input
document.querySelector('input[name="search"]').addEventListener('input', function() {
    clearTimeout(this.searchTimeout);
    this.searchTimeout = setTimeout(() => {
        this.form.submit();
    }, 500);
});
</script>
@endsection