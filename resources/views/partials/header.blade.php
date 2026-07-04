<header class="fixed top-0 w-full bg-white border-b border-slate-200 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <a href="/" class="flex-shrink-0">
                <img src="{{ asset('images/logo4.png') }}" alt="Rahmah Consultancy Services" class="h-30 w-auto">
            </a>

            <nav class="hidden md:flex items-center space-x-8">
                <a href="#services" class="text-navy hover:text-gold font-medium text-sm transition">Servis</a>
                <a href="#stats"    class="text-navy hover:text-gold font-medium text-sm transition">Statistik</a>
                <a href="#faqs"     class="text-navy hover:text-gold font-medium text-sm transition">Soalan Lazim</a>
                <a href="#contact"  class="bg-navy hover:bg-navy-dark text-white font-semibold px-5 py-2 rounded-lg text-sm transition">
                    Semak Kelayakan
                </a>
            </nav>

            <button id="mobile-menu-btn" class="md:hidden text-navy p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gold">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 px-4 pt-3 pb-4 space-y-3">
        <a href="#services" class="block text-navy font-medium py-1 text-sm">Servis</a>
        <a href="#stats"    class="block text-navy font-medium py-1 text-sm">Statistik</a>
        <a href="#faqs"     class="block text-navy font-medium py-1 text-sm">Soalan Lazim</a>
        <a href="#contact"  class="block bg-navy text-white font-semibold px-4 py-2 rounded-lg text-sm text-center">Semak Kelayakan</a>
    </div>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</header>
