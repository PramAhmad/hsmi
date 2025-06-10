@extends('front.layout')

@section('content')
<!-- Pendaftaran Belum Dibuka -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-sky-50 min-h-screen flex items-center justify-center px-4 py-20">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-20 opacity-20">
        <div class="w-40 h-40 bg-sky-500 rounded-full animate-pulse-slow"></div>
    </div>
    <div class="absolute bottom-20 right-20 opacity-15">
        <div class="w-32 h-32 bg-blue-400 rounded-full animate-bounce" style="animation-duration: 6s;"></div>
    </div>
    
    <div class="max-w-3xl w-full bg-white rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden wow fadeInUp">
        <!-- Decorative Corner -->
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-sky-500/10 rounded-full"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-500/10 rounded-full"></div>
        
        <!-- Content -->
        <div class="text-center relative z-10">
            <!-- Icon -->
            <div class="w-24 h-24 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            
            <!-- Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Pendaftaran Belum Dibuka
            </h1>
            
            <!-- Divider -->
            <div class="flex items-center justify-center gap-2 mb-6">
                <div class="w-12 h-1 bg-sky-500 rounded-full"></div>
                <div class="w-3 h-3 bg-sky-500 rounded-full"></div>
                <div class="w-12 h-1 bg-sky-500 rounded-full"></div>
            </div>
            
            <!-- Message -->
            <p class="text-gray-600 text-lg mb-6">
                Mohon maaf, pendaftaran anggota baru HMSI Unsil belum dibuka saat ini. 
                Kami akan segera membuka pendaftaran pada periode selanjutnya. 
                Pantau terus informasi terbaru dari kami!
            </p>
            
            <!-- Countdown Notice -->
            <div class="bg-sky-50 p-4 rounded-xl mb-8">
                <p class="text-sky-700 font-medium">
                    Pendaftaran akan dibuka pada semester baru. Pastikan kamu tidak melewatkannya!
                </p>
            </div>
            
            <!-- Buttons -->
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white border border-sky-500 text-sky-500 hover:bg-sky-50 font-medium rounded-xl px-6 py-3 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Kembali ke Beranda</span>
                </a>
                
                <a href="#" class="inline-flex items-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 text-white font-medium rounded-xl px-6 py-3 hover:shadow-lg transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span>Notifikasi Saat Dibuka</span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.animate-pulse-slow {
    animation: pulse 4s infinite;
}

@keyframes pulse {
    0%, 100% {
        opacity: 0.6;
    }
    50% {
        opacity: 0.8;
    }
}
</style>
@endsection