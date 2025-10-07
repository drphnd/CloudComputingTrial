<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:700|inter:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes fadeOut { from { opacity: 1; } to { opacity: 0; } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 2s ease-out forwards; }
        .fade-in-up { animation: fadeInUp 1s ease-out forwards; opacity: 0; }
        .fade-out { animation: fadeOut 1s ease-in forwards; }
        .btn-shine:hover {
            background-image: linear-gradient(100deg, rgba(255,255,255,0) 45%, rgba(255,255,255,0.4), rgba(255,255,255,0) 55%);
            background-size: 200% auto;
            animation: shine 1.5s linear infinite;
        }
        @keyframes shine { to { background-position: -200% center; } }
    </style>
</head>
<body class="antialiased bg-gray-900 text-gray-200 font-['Inter']">

    @if (session('success'))
    <div id="success-popup" class="fixed top-5 right-5 z-50 bg-gray-800 border border-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center transition-opacity duration-300" style="animation: fadeInUp 0.5s ease-out forwards;">
        <svg class="w-6 h-6 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>{{ session('success') }}</span>
        <button onclick="closePopup()" class="ml-4 text-gray-400 hover:text-white">&times;</button>
    </div>
    @endif

    <div class="relative flex items-center justify-center min-h-screen overflow-hidden">
        <div class="absolute -top-1/4 -left-1/4 w-1/2 h-1/2 bg-gray-700/10 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-gray-800/20 rounded-full filter blur-3xl animate-pulse delay-1000"></div>

        <div class="text-center z-10 p-6">
            <h1 class="text-6xl sm:text-8xl md:text-9xl font-bold text-white font-['Playfair_Display'] tracking-tighter fade-in">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-gray-200 via-white to-gray-400">
                    Welcome
                </span>
            </h1>
            <p class="mt-6 text-lg max-w-2xl mx-auto text-gray-400 fade-in-up" style="animation-delay: 0.5s;">
                Sebuah awal untuk koneksi yang bermakna. Kami siap mendengarkan cerita dan ide Anda.
            </p>
            <div class="mt-10 fade-in-up" style="animation-delay: 1s;">
                <a href="/contact"
                   class="relative inline-block px-8 py-3 font-semibold text-white uppercase tracking-widest bg-gray-800 border-2 border-gray-500 rounded-lg shadow-lg transition-all duration-300 hover:border-white hover:shadow-2xl overflow-hidden btn-shine">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>

    <script>
        const popup = document.getElementById('success-popup');

        function closePopup() {
            if (popup) {
                popup.classList.add('fade-out');
                setTimeout(() => popup.style.display = 'none', 1000);
            }
        }

        // Otomatis tutup popup setelah 5 detik
        if (popup) {
            setTimeout(closePopup, 5000);
        }
    </script>
</body>
</html>