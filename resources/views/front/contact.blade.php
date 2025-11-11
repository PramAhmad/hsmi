@extends('front.layout')

@section('content')
<!-- Hero Section -->
<section class="banner-six-area bg-image paralax__animation md:pt-48 pt-32 pb-28" data-background="{{ asset('learnit/assets/images/bg/banner-six-bg.jpg') }}">
    <div class="banner-six__shape1" data-depth="0.03">
        <img class="animation__sunMove" src="{{ asset('learnit/assets/images/shape/banner-six-shape1.png') }}" alt="image">
    </div>
    <div class="banner-six__shape2" data-depth="0.03">
        <img class="animation__arryLeftRight" src="{{ asset('learnit/assets/images/shape/banner-six-shape2.png') }}" alt="image">
    </div>
    <div class="banner-six__shape3" data-depth="0.03">
        <img class="animation__arryUpDown" src="{{ asset('learnit/assets/images/shape/banner-six-shape3.png') }}" alt="image">
    </div>
    
    <div class="container" style="transform: scale(0.9); transform-origin: top center; width: 100%; margin: 0 auto;">
        <div class="text-center">
            <div class="flex items-center justify-center gap-3 mb-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="w-12 h-12 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center animate-bounce">
                    <i class="fa-solid fa-envelope text-white text-xl"></i>
                </div>
                <h5 class="text-sky-500 uppercase tracking-widest font-semibold text-sm">HUBUNGI KAMI</h5>
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-sky-600 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fa-solid fa-phone text-white text-xl"></i>
                </div>
            </div>
            
            <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                Kontak 
                <span class="text-sky-500 relative inline-block">
                    HMSI Unsil
                </span>
                <div class="inline-flex items-center gap-3 ml-3">
                    <span class="text-4xl animate-bounce">📞</span>
                    <span class="text-4xl animate-pulse">💬</span>
                </div>
            </h1>
            
            <div class="mt-8 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <ul class="space-y-2">
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse"></span>
                        <span>Jangan ragu untuk menghubungi kami! Tim HMSI UNSIL siap membantu</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-blue-300 rounded-full animate-pulse" style="animation-delay: 0.3s;"></span>
                        <span class="text-sky-300 font-semibold">Respon dalam 1x24 jam ⚡</span>
                    </li>
                    <li class="flex items-center justify-center gap-3">
                        <span class="w-2 h-2 bg-sky-300 rounded-full animate-pulse" style="animation-delay: 0.6s;"></span>
                        <span>Siap melayani segala pertanyaan Anda ✨</span>
                    </li>
                </ul>
            </div>
            
            <!-- Hero Section Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-4 mt-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="#contact-form" class="inline-flex items-center gap-3 bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fa-solid fa-paper-plane text-xl"></i>
                    Kirim Pesan
                </a>
                
                <a href="#contact-info" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-slate-900 px-6 py-4 rounded-lg font-semibold hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fa-solid fa-info-circle text-lg"></i>
                    Info Kontak
                </a>
            </div>
        </div>
    </div>
    
    <div class="banner-five__cloud-shape image">
        <img src="{{ asset('learnit/assets/images/bg/cloud-bottom.png') }}" alt="shape">
    </div>
</section>

<!-- Contact Section -->
<section id="contact-info" class="relative bg-gradient-to-br from-slate-50 via-white to-sky-50 pt-16 md:pb-16 overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-10 opacity-20">
        <div class="w-24 h-24 bg-sky-500 rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 right-16 opacity-15">
        <div class="w-32 h-32 bg-blue-400 rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10" style="transform: scale(0.9); transform-origin: top center; width: 100%; margin: 0 auto;">
        <div class="grid lg:grid-cols-12 gap-8">
            <!-- Contact Info - Left Sidebar -->
            <div class="lg:col-span-4">
                <div class="space-y-6">
                    <!-- Section Title -->
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Kontak</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Jangan ragu untuk menghubungi kami. Tim HMSI UNSIL siap membantu Anda.
                        </p>
                    </div>

                    <!-- Small Map -->
                    <div class="wow fadeInUp" data-wow-delay="300ms">
                        <div class="bg-white rounded-xl shadow-lg p-2 border border-sky-100">
                            <div class="rounded-lg overflow-hidden border border-sky-200">
                         
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7551967858185!2d108.24878187407859!3d-7.381308872653564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5817bf80530b%3A0x170d075986c8ed42!2sSiliwangi%20University%20-%20Campus%202!5e0!3m2!1sen!2sid!4v1760781229432!5m2!1sen!2sid" 
                                        width="100%" 
                                        height="200" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info Items -->
                    <div class="space-y-4">
                        <!-- Location -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-gray-100 wow fadeInUp" data-wow-delay="400ms">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-location-dot text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Alamat</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Jl. Mugarsari, Kel. Mugarsari,<br>
                                        Kec. Tamansari, Kota Tasikmalaya,<br>
                                        Jawa Barat, Indonesia, (46196) 

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-gray-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-envelope text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Email</h4>
                                    <div class="space-y-1">
                                        <p class="text-sm">
                                            <a href="mailto:hmsi@unsil.ac.id" class="text-sky-600 hover:text-sky-700 transition-colors">
                                                hmsi@unsil.ac.id
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-gray-100 wow fadeInUp" data-wow-delay="600ms">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-phone text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Telepon</h4>
                                    <div class="space-y-1">
                                        <p class="text-sm">
                                            <a href="https://wa.me/6287719904732" class="text-sky-600 hover:text-sky-700 transition-colors">
                                                +62 877 1990 4732
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 border border-gray-100 wow fadeInUp" data-wow-delay="700ms">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-share-nodes text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Media Sosial</h4>
                                    <div class="flex gap-3">
                                        <a href="https://instagram.com/hmsi.unsil" target="_blank" 
                                           class="w-10 h-10 bg-sky-500 hover:bg-sky-600 rounded-lg flex items-center justify-center text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://tiktok.com/@hmsiunsil" target="_blank" 
                                           class="w-10 h-10 bg-sky-500 hover:bg-sky-600 rounded-lg flex items-center justify-center text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a href="https://youtube.com/@hmsiunsil" target="_blank" 
                                           class="w-10 h-10 bg-sky-500 hover:bg-sky-600 rounded-lg flex items-center justify-center text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form - Right Content -->
            <div class="lg:col-span-8" id="contact-form">
                <!-- Filter Section Header -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-8 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-paper-plane text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Kirim Pesan</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Silakan isi formulir di bawah ini untuk menghubungi kami. Kami akan merespons pesan Anda sesegera mungkin.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Success/Error Messages -->
                    @if(session('success'))
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-check text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                                </div>
                                <button onclick="this.parentElement.parentElement.remove()" 
                                        class="text-green-600 hover:text-green-800 transition-colors">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-exclamation text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-red-800 font-medium">{{ session('error') }}</p>
                                </div>
                                <button onclick="this.parentElement.parentElement.remove()" 
                                        class="text-red-600 hover:text-red-800 transition-colors">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div class="wow fadeInUp" data-wow-delay="500ms">
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-user text-sky-500 mr-2"></i>
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       placeholder="Masukkan nama lengkap Anda"
                                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('name') border-red-500 bg-red-50 @enderror"
                                       required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="wow fadeInUp" data-wow-delay="600ms">
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-envelope text-sky-500 mr-2"></i>
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       placeholder="nama@email.com"
                                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('email') border-red-500 bg-red-50 @enderror"
                                       required>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Phone -->
                            <div class="wow fadeInUp" data-wow-delay="700ms">
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-phone text-sky-500 mr-2"></i>
                                    Nomor Telepon
                                </label>
                                <input type="tel" 
                                       id="phone" 
                                       name="phone" 
                                       value="{{ old('phone') }}" 
                                       placeholder="+62 812 3456 7890"
                                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('phone') border-red-500 bg-red-50 @enderror">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Subject -->
                            <div class="wow fadeInUp" data-wow-delay="800ms">
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fa-solid fa-tag text-sky-500 mr-2"></i>
                                    Subjek <span class="text-red-500">*</span>
                                </label>
                                <select id="subject" 
                                        name="subject" 
                                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all @error('subject') border-red-500 bg-red-50 @enderror" 
                                        required>
                                    <option value="">Pilih subjek pesan</option>
                                    <option value="Informasi Umum" {{ old('subject') == 'Informasi Umum' ? 'selected' : '' }}>💭 Informasi Umum</option>
                                    <option value="Keanggotaan" {{ old('subject') == 'Keanggotaan' ? 'selected' : '' }}>👥 Keanggotaan</option>
                                    <option value="Kegiatan" {{ old('subject') == 'Kegiatan' ? 'selected' : '' }}>🎯 Kegiatan</option>
                                    <option value="Kerjasama" {{ old('subject') == 'Kerjasama' ? 'selected' : '' }}>🤝 Kerjasama</option>
                                    <option value="Bank Materi" {{ old('subject') == 'Bank Materi' ? 'selected' : '' }}>📚 Bank Materi</option>
                                    <option value="SiFess" {{ old('subject') == 'SiFess' ? 'selected' : '' }}>💌 SiFess</option>
                                    <option value="Kritik & Saran" {{ old('subject') == 'Kritik & Saran' ? 'selected' : '' }}>💡 Kritik & Saran</option>
                                    <option value="Lainnya" {{ old('subject') == 'Lainnya' ? 'selected' : '' }}>❓ Lainnya</option>
                                </select>
                                @error('subject')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="wow fadeInUp" data-wow-delay="900ms">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fa-solid fa-comment text-sky-500 mr-2"></i>
                                Pesan <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <textarea id="message" 
                                          name="message" 
                                          rows="6" 
                                          placeholder="Tuliskan pesan Anda di sini..."
                                          class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all resize-none @error('message') border-red-500 bg-red-50 @enderror" 
                                          required>{{ old('message') }}</textarea>
                                <div class="absolute bottom-3 right-3">
                                    <span id="charCount" class="text-xs text-gray-400 bg-white px-2 py-1 rounded-full border border-gray-200">
                                        0/2000
                                    </span>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Maksimal 2000 karakter</p>
                            @error('message')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="wow fadeInUp" data-wow-delay="1000ms">
                            <button type="submit" 
                                    class="w-full md:w-auto bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1 inline-flex items-center justify-center gap-3">
                                <i class="fa-solid fa-paper-plane"></i>
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Character counter for message
    const messageInput = document.getElementById('message');
    const charCount = document.getElementById('charCount');
    const maxLength = 2000;
    
    if (messageInput && charCount) {
        function updateCounter() {
            const currentLength = messageInput.value.length;
            const remaining = maxLength - currentLength;
            charCount.textContent = `${currentLength}/${maxLength}`;
            
            if (remaining < 100) {
                charCount.className = 'text-xs text-orange-500 bg-orange-50 px-2 py-1 rounded-full border border-orange-200 font-medium';
            } else if (remaining < 0) {
                charCount.className = 'text-xs text-red-500 bg-red-50 px-2 py-1 rounded-full border border-red-200 font-medium';
            } else {
                charCount.className = 'text-xs text-gray-400 bg-white px-2 py-1 rounded-full border border-gray-200';
            }
        }
        
        messageInput.addEventListener('input', updateCounter);
        updateCounter(); // Initial call
    }
    
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
    
    // Form submission loading state
    const form = document.querySelector('form');
    const submitBtn = form?.querySelector('button[type="submit"]');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function() {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Mengirim...';
        });
    }
    
    // Smooth scroll for better UX
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
});

// Show toast notification
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
    toast.className = `fixed bottom-4 right-4 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300`;
    toast.innerHTML = `
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-${type === 'success' ? 'check' : 'exclamation'} text-lg"></i>
            <span class="font-medium">${message}</span>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 100);
    
    // Animate out and remove
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => toast.remove(), 300);
    }, 5000);
}
</script>
@endpush
@endsection