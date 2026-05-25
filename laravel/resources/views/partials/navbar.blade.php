<!-- NAVBAR -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">

    <div id="navInner" class="backdrop-blur-xl bg-black/30 border-b border-white/10 transition-all duration-300">

        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-20 transition-all duration-300">

            <!-- LOGO -->
            <div class="flex items-center gap-3 cursor-pointer">
                <div class="w-10 h-10 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center font-bold text-black">
                    L
                </div>
                <h1 class="text-xl font-bold">Lux<span class="text-cyan-400">Estate</span></h1>
            </div>

            <!-- SEARCH BAR (AIRBNB STYLE) -->
            <div class="hidden md:flex items-center bg-white/5 border border-white/10 rounded-full px-4 py-2 w-[320px]">
                <input placeholder="Search location..." class="bg-transparent outline-none text-sm flex-1 text-white">
                <button class="text-cyan-400">🔍</button>
            </div>

            <!-- LINKS -->
            <div class="hidden md:flex items-center gap-8 text-sm text-gray-300">

                <a href="/home" class="nav-link">Home</a>
                <a href="/properties" class="nav-link">Properties</a>
                <a href="/agents" class="nav-link">Agents</a>
                <a href="/contact" class="nav-link">Contact</a>

            </div>

            <!-- BUTTON + MOBILE -->
            <div class="flex items-center gap-3">

                <button onclick="openAuth()"
        class="px-4 py-2 rounded-xl bg-cyan-400 text-black font-bold hover:scale-105 transition">

    Login

</button>

                <!-- HAMBURGER -->
                <button id="menuBtn" class="md:hidden text-2xl">
                    ☰
                </button>

                
            </div>

        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-3 text-gray-300">
            <a href="/home class="nav-link">Home</a>
            <a href="/properties" class="nav-link">Properties</a>
            <a href="/agents" class="nav-link">Agents</a>
            <a href="/contact" class="nav-link">Contact</a>
        </div>

    </div>

</nav>