@extends('layouts.app')

@section('content')
<!-- HERO CAROUSEL -->
<section class="relative h-screen overflow-hidden">

    <!-- VIDEO -->
    <video autoplay muted loop playsinline
           class="absolute inset-0 w-full h-full object-cover">

        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                type="video/mp4">

    </video>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- CYAN GLOW -->
    <div class="absolute inset-0 bg-gradient-to-r
                from-cyan-500/10
                via-transparent
                to-blue-500/10">
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 h-full flex items-center">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-3xl">

                <!-- BADGE -->
                <div class="inline-flex items-center gap-3
                            bg-white/5 backdrop-blur-xl
                            border border-white/10
                            px-5 py-3 rounded-full mb-8">

                    <span class="w-3 h-3 bg-cyan-400 rounded-full animate-pulse"></span>

                    <span class="text-sm text-gray-300">
                        Premium Real Estate Platform
                    </span>

                </div>

                <!-- TITLE -->
                <h1 class="text-6xl md:text-8xl font-bold leading-tight">

                    Find Your
                    <span class="text-cyan-400">
                        Dream Home
                    </span>

                </h1>

                <!-- DESCRIPTION -->
                <p class="text-gray-300 text-lg md:text-xl
                          mt-8 leading-relaxed max-w-2xl">

                    Explore luxury homes, exclusive communities,
                    and premium real estate opportunities
                    across Cavite.

                </p>

                <!-- BUTTONS -->
                <div class="flex flex-col md:flex-row gap-6 mt-12">

                    <!-- BUTTON -->
                    <a href="#properties"
                       class="group relative overflow-hidden
                              px-10 py-5 rounded-2xl
                              bg-gradient-to-r
                              from-cyan-400
                              to-blue-500
                              text-black font-bold text-lg
                              hover:scale-105
                              transition duration-300">

                        <span class="relative z-10">
                            Explore Properties
                        </span>

                        <div class="absolute inset-0
                                    bg-white/30
                                    opacity-0
                                    group-hover:opacity-100
                                    transition duration-500">
                        </div>

                    </a>

                    <!-- BUTTON -->
                    <a href="#contact"
                       class="px-10 py-5 rounded-2xl
                              border border-white/20
                              bg-white/5 backdrop-blur-md
                              text-white font-bold text-lg
                              hover:border-cyan-400/50
                              hover:bg-cyan-400/10
                              hover:scale-105
                              transition duration-300">

                        Contact Agent

                    </a>

                </div>

                <!-- MINI STATS -->
                <div class="flex flex-wrap gap-10 mt-16">

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            500+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Luxury Listings
                        </p>

                    </div>

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            1200+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Happy Clients
                        </p>

                    </div>

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            15+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Prime Locations
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- SCROLL INDICATOR -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2
                flex flex-col items-center gap-3 text-white/70">

        <span class="text-sm tracking-widest">
            SCROLL
        </span>

        <div class="w-[2px] h-16 bg-white/20 relative overflow-hidden">

            <div class="absolute top-0 left-0 w-full h-8
                        bg-cyan-400 animate-bounce">
            </div>

        </div>

    </div>

</section>

<!-- FEATURED PROPERTIES 1-->
<section id="properties" class="py-28 px-6 reveal">

    <div class="max-w-7xl mx-auto">

        <!-- TITLE -->
        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold">
                Featured <span class="text-cyan-400">Properties</span>
            </h2>

            <p class="text-gray-400 mt-4">
                Explore premium homes available in Cavite and nearby cities.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- CARD -->
            <div class="group bg-white/5 border border-white/10
                        rounded-[28px] overflow-hidden
                        hover:border-cyan-400/50
                        transition duration-500">

                <!-- IMAGE -->
                <div class="relative overflow-hidden">

                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                         class="h-64 w-full object-cover
                                group-hover:scale-110
                                transition duration-700">

                    <!-- PRICE BADGE -->
                    <div class="absolute top-4 left-4
                                bg-cyan-400 text-black
                                px-4 py-2 rounded-xl font-bold">

                        ₱3.5M

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-6">

                    <h3 class="text-2xl font-semibold">
                        Modern Family House
                    </h3>

                    <p class="text-gray-400 mt-2">
                        📍 Dasmariñas, Cavite
                    </p>

                    <!-- DETAILS -->
                    <div class="flex justify-between text-gray-400 mt-5 text-sm">

                        <span>🛏 3 Beds</span>
                        <span>🚿 2 Baths</span>
                        <span>📐 120 sqm</span>

                    </div>

                    <!-- BUTTON -->
                    <a href="/properties/1"
   class="mt-6 inline-flex w-full items-center justify-center
          py-3 rounded-2xl
          bg-white/10 border border-white/10
          text-cyan-400 font-bold
          hover:bg-cyan-400 hover:text-black
          hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/30
          transition duration-300 backdrop-blur-xl">

    View Details

</a>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="group bg-white/5 border border-white/10
                        rounded-[28px] overflow-hidden
                        hover:border-cyan-400/50
                        transition duration-500">

                <div class="relative overflow-hidden">

                    <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be"
                         class="h-64 w-full object-cover
                                group-hover:scale-110
                                transition duration-700">

                    <div class="absolute top-4 left-4
                                bg-cyan-400 text-black
                                px-4 py-2 rounded-xl font-bold">

                        ₱5.2M

                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-2xl font-semibold">
                        Luxury Villa
                    </h3>

                    <p class="text-gray-400 mt-2">
                        📍 General Trias, Cavite
                    </p>

                    <div class="flex justify-between text-gray-400 mt-5 text-sm">

                        <span>🛏 4 Beds</span>
                        <span>🚿 3 Baths</span>
                        <span>📐 180 sqm</span>

                    </div>

                    <a href="/properties/1"
   class="mt-6 inline-flex w-full items-center justify-center
          py-3 rounded-2xl
          bg-white/10 border border-white/10
          text-cyan-400 font-bold
          hover:bg-cyan-400 hover:text-black
          hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/30
          transition duration-300 backdrop-blur-xl">

    View Details

</a>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="group bg-white/5 border border-white/10
                        rounded-[28px] overflow-hidden
                        hover:border-cyan-400/50
                        transition duration-500">

                <div class="relative overflow-hidden">

                    <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994"
                         class="h-64 w-full object-cover
                                group-hover:scale-110
                                transition duration-700">

                    <div class="absolute top-4 left-4
                                bg-cyan-400 text-black
                                px-4 py-2 rounded-xl font-bold">

                        ₱2.8M

                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-2xl font-semibold">
                        Starter Home
                    </h3>

                    <p class="text-gray-400 mt-2">
                        📍 Imus, Cavite
                    </p>

                    <div class="flex justify-between text-gray-400 mt-5 text-sm">

                        <span>🛏 2 Beds</span>
                        <span>🚿 1 Bath</span>
                        <span>📐 90 sqm</span>

                    </div>

                    <a href="/properties/1"
   class="mt-6 inline-flex w-full items-center justify-center
          py-3 rounded-2xl
          bg-white/10 border border-white/10
          text-cyan-400 font-bold
          hover:bg-cyan-400 hover:text-black
          hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/30
          transition duration-300 backdrop-blur-xl">

    View Details

</a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- LOCATION SECTION UI -->
<section class="py-28 px-6 reveal overflow-hidden">

    <div class="max-w-7xl mx-auto">

        <!-- TITLE -->
        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold">
                Explore Prime <span class="text-cyan-400">Locations</span>
            </h2>

            <p class="text-gray-400 mt-4 text-lg">
                Discover luxury homes across Cavite’s fastest growing cities.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD -->
            <a href="#"
               class="group relative h-[500px] rounded-[32px] overflow-hidden border border-white/10 hover:border-cyan-400/70 transition duration-500">

                <!-- IMAGE -->
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d"
                     class="absolute inset-0 w-full h-full object-cover grayscale blur-[2px]
                     scale-100 group-hover:scale-110 group-hover:grayscale-0 group-hover:blur-0
                     transition duration-700">

                <!-- DARK OVERLAY -->
                <div class="absolute inset-0 bg-black/55 group-hover:bg-black/25 transition duration-500"></div>

                <!-- GLOW -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700
                            bg-cyan-400/10 blur-3xl"></div>

                <!-- MINI MAP -->
                <div class="absolute top-5 right-5 bg-black/60 backdrop-blur-md
                            border border-white/10 rounded-2xl px-4 py-2 text-xs text-cyan-300">

                    📍 Dasmariñas, Cavite

                </div>

                <!-- PROPERTY COUNT -->
                <div class="absolute top-5 left-5 bg-cyan-400 text-black font-bold
                            rounded-full px-4 py-2 text-sm shadow-lg">

                    120+ Properties

                </div>

                <!-- CONTENT -->
                <div class="absolute bottom-0 p-8 z-10">

                    <h3 class="text-4xl font-bold translate-y-8
                               group-hover:translate-y-0 transition duration-500">

                        Dasmariñas

                    </h3>

                    <p class="text-gray-300 mt-4 opacity-0
                              group-hover:opacity-100 transition duration-700">

                        Modern luxury homes with premium accessibility,
                        malls, schools, and exclusive subdivisions.

                    </p>

                    <!-- BUTTON -->
                    <div class="mt-6 opacity-0 group-hover:opacity-100 transition duration-700">

                        <span class="inline-flex items-center gap-2 text-cyan-400 font-semibold">

                            Explore Properties →

                        </span>

                    </div>

                </div>

            </a>

            <!-- CARD 2 -->
            <a href="#"
               class="group relative h-[500px] rounded-[32px] overflow-hidden border border-white/10 hover:border-cyan-400/70 transition duration-500">

                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c"
                     class="absolute inset-0 w-full h-full object-cover grayscale blur-[2px]
                     scale-100 group-hover:scale-110 group-hover:grayscale-0 group-hover:blur-0
                     transition duration-700">

                <div class="absolute inset-0 bg-black/55 group-hover:bg-black/25 transition duration-500"></div>

                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700
                            bg-cyan-400/10 blur-3xl"></div>

                <div class="absolute top-5 right-5 bg-black/60 backdrop-blur-md
                            border border-white/10 rounded-2xl px-4 py-2 text-xs text-cyan-300">

                    📍 General Trias

                </div>

                <div class="absolute top-5 left-5 bg-cyan-400 text-black font-bold
                            rounded-full px-4 py-2 text-sm shadow-lg">

                    95+ Properties

                </div>

                <div class="absolute bottom-0 p-8 z-10">

                    <h3 class="text-4xl font-bold translate-y-8
                               group-hover:translate-y-0 transition duration-500">

                        General Trias

                    </h3>

                    <p class="text-gray-300 mt-4 opacity-0
                              group-hover:opacity-100 transition duration-700">

                        Exclusive communities with peaceful suburban living
                        and high-end residential developments.

                    </p>

                    <div class="mt-6 opacity-0 group-hover:opacity-100 transition duration-700">

                        <span class="inline-flex items-center gap-2 text-cyan-400 font-semibold">

                            Explore Properties →

                        </span>

                    </div>

                </div>

            </a>

            <!-- CARD 3 -->
            <a href="#"
               class="group relative h-[500px] rounded-[32px] overflow-hidden border border-white/10 hover:border-cyan-400/70 transition duration-500">

                <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde"
                     class="absolute inset-0 w-full h-full object-cover grayscale blur-[2px]
                     scale-100 group-hover:scale-110 group-hover:grayscale-0 group-hover:blur-0
                     transition duration-700">

                <div class="absolute inset-0 bg-black/55 group-hover:bg-black/25 transition duration-500"></div>

                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700
                            bg-cyan-400/10 blur-3xl"></div>

                <div class="absolute top-5 right-5 bg-black/60 backdrop-blur-md
                            border border-white/10 rounded-2xl px-4 py-2 text-xs text-cyan-300">

                    📍 Trece Martires

                </div>

                <div class="absolute top-5 left-5 bg-cyan-400 text-black font-bold
                            rounded-full px-4 py-2 text-sm shadow-lg">

                    80+ Properties

                </div>

                <div class="absolute bottom-0 p-8 z-10">

                    <h3 class="text-4xl font-bold translate-y-8
                               group-hover:translate-y-0 transition duration-500">

                        Trece Martires

                    </h3>

                    <p class="text-gray-300 mt-4 opacity-0
                              group-hover:opacity-100 transition duration-700">

                        Elegant homes surrounded by greenery and modern
                        infrastructure for families.

                    </p>

                    <div class="mt-6 opacity-0 group-hover:opacity-100 transition duration-700">

                        <span class="inline-flex items-center gap-2 text-cyan-400 font-semibold">

                            Explore Properties →

                        </span>

                    </div>

                </div>

            </a>

        </div>

    </div>

</section>

<!-- stats section-->
<section class="py-28 px-6 reveal relative overflow-hidden">

    <!-- BACKGROUND GLOW -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2
                w-[600px] h-[600px] bg-cyan-500/10 blur-3xl rounded-full">
    </div>

    <div class="max-w-7xl mx-auto relative z-10">

        <!-- TITLE -->
        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold">
                Trusted by <span class="text-cyan-400">Hundreds</span>
            </h2>

            <p class="text-gray-400 mt-4 text-lg">
                Helping families find premium homes across Cavite.
            </p>

        </div>

        <!-- STATS GRID -->
        <div class="grid md:grid-cols-4 gap-8">

            <!-- CARD -->
            <div class="group bg-white/5 backdrop-blur-xl border border-white/10
                        rounded-[32px] p-10 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-6xl mb-5">🏡</div>

                <h3 class="counter text-5xl font-bold text-cyan-400"
                    data-target="500">
                    0
                </h3>

                <p class="text-gray-400 mt-4 text-lg">
                    Properties Sold
                </p>

            </div>

            <!-- CARD -->
            <div class="group bg-white/5 backdrop-blur-xl border border-white/10
                        rounded-[32px] p-10 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-6xl mb-5">😊</div>

                <h3 class="counter text-5xl font-bold text-cyan-400"
                    data-target="1200">
                    0
                </h3>

                <p class="text-gray-400 mt-4 text-lg">
                    Happy Clients
                </p>

            </div>

            <!-- CARD -->
            <div class="group bg-white/5 backdrop-blur-xl border border-white/10
                        rounded-[32px] p-10 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-6xl mb-5">📍</div>

                <h3 class="counter text-5xl font-bold text-cyan-400"
                    data-target="15">
                    0
                </h3>

                <p class="text-gray-400 mt-4 text-lg">
                    Prime Locations
                </p>

            </div>

            <!-- CARD -->
            <div class="group bg-white/5 backdrop-blur-xl border border-white/10
                        rounded-[32px] p-10 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-6xl mb-5">⭐</div>

                <h3 class="counter text-5xl font-bold text-cyan-400"
                    data-target="98">
                    0
                </h3>

                <p class="text-gray-400 mt-4 text-lg">
                    Client Satisfaction
                </p>

            </div>

        </div>

    </div>

</section>

<!-- LUXURY TESTIMONIALS SECTION -->
<section class="py-28 px-6 reveal overflow-hidden relative">

    <!-- BACKGROUND GLOW -->
    <div class="absolute left-1/2 top-0 -translate-x-1/2
                w-[700px] h-[700px]
                bg-cyan-500/10 blur-3xl rounded-full">
    </div>

    <div class="max-w-7xl mx-auto relative z-10">

        <!-- TITLE -->
        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold">
                What Our <span class="text-cyan-400">Clients Say</span>
            </h2>

            <p class="text-gray-400 mt-4 text-lg">
                Trusted by homeowners and investors across Cavite.
            </p>

        </div>

        <!-- SLIDER -->
        <div class="overflow-hidden relative">

            <div id="testimonialSlider"
                 class="flex transition-transform duration-700 ease-in-out">

                <!-- CARD -->
                <div class="min-w-full md:min-w-[33.333%] p-4">

                    <div class="group bg-white/5 backdrop-blur-xl
                                border border-white/10
                                rounded-[32px]
                                p-8 h-full
                                hover:border-cyan-400/50
                                hover:-translate-y-2
                                transition duration-500">

                        <!-- STARS -->
                        <div class="text-yellow-400 text-xl mb-5">
                            ★★★★★
                        </div>

                        <p class="text-gray-300 leading-relaxed">
                            “The entire process was smooth and professional.
                            We found our dream home faster than expected.”
                        </p>

                        <!-- PROFILE -->
                        <div class="flex items-center gap-4 mt-8">

                            <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                 class="w-14 h-14 rounded-full object-cover border-2 border-cyan-400">

                            <div>

                                <h4 class="font-semibold text-lg">
                                    Sophia Reyes
                                </h4>

                                <p class="text-gray-500 text-sm">
                                    Homeowner
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="min-w-full md:min-w-[33.333%] p-4">

                    <div class="group bg-white/5 backdrop-blur-xl
                                border border-white/10
                                rounded-[32px]
                                p-8 h-full
                                hover:border-cyan-400/50
                                hover:-translate-y-2
                                transition duration-500">

                        <div class="text-yellow-400 text-xl mb-5">
                            ★★★★★
                        </div>

                        <p class="text-gray-300 leading-relaxed">
                            “Very premium experience. The agents were responsive
                            and helped us secure the perfect investment.”
                        </p>

                        <div class="flex items-center gap-4 mt-8">

                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                 class="w-14 h-14 rounded-full object-cover border-2 border-cyan-400">

                            <div>

                                <h4 class="font-semibold text-lg">
                                    Daniel Cruz
                                </h4>

                                <p class="text-gray-500 text-sm">
                                    Investor
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="min-w-full md:min-w-[33.333%] p-4">

                    <div class="group bg-white/5 backdrop-blur-xl
                                border border-white/10
                                rounded-[32px]
                                p-8 h-full
                                hover:border-cyan-400/50
                                hover:-translate-y-2
                                transition duration-500">

                        <div class="text-yellow-400 text-xl mb-5">
                            ★★★★★
                        </div>

                        <p class="text-gray-300 leading-relaxed">
                            “Modern listings, smooth transactions, and excellent
                            support from start to finish.”
                        </p>

                        <div class="flex items-center gap-4 mt-8">

                            <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                 class="w-14 h-14 rounded-full object-cover border-2 border-cyan-400">

                            <div>

                                <h4 class="font-semibold text-lg">
                                    Angela Santos
                                </h4>

                                <p class="text-gray-500 text-sm">
                                    Property Buyer
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- LUXURY CTA SECTION -->
<section id="contact" class="py-32 px-6 relative overflow-hidden reveal">

    <!-- BACKGROUND GLOW -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                w-[900px] h-[900px]
                bg-cyan-500/10 blur-3xl rounded-full">
    </div>

    <!-- FLOATING GLOW -->
    <div class="absolute top-10 left-10 w-40 h-40
                bg-cyan-400/20 blur-3xl rounded-full animate-pulse">
    </div>

    <div class="absolute bottom-10 right-10 w-52 h-52
                bg-blue-500/20 blur-3xl rounded-full animate-pulse">
    </div>

    <div class="max-w-6xl mx-auto relative z-10">

        <!-- CTA CARD -->
        <div class="bg-white/5 backdrop-blur-2xl
                    border border-white/10
                    rounded-[40px]
                    p-12 md:p-20
                    text-center
                    relative overflow-hidden">

            <!-- INNER GLOW -->
            <div class="absolute inset-0
                        bg-gradient-to-r
                        from-cyan-500/10
                        via-transparent
                        to-blue-500/10">
            </div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <h2 class="text-5xl md:text-7xl font-bold leading-tight">

                    Ready To Find Your
                    <span class="text-cyan-400">
                        Dream Home?
                    </span>

                </h2>

                <p class="text-gray-400 text-lg md:text-xl mt-8
                          max-w-3xl mx-auto leading-relaxed">

                    Explore premium properties, luxury communities,
                    and exclusive real estate opportunities across Cavite.

                </p>

                <!-- BUTTONS -->
                <div class="flex flex-col md:flex-row justify-center
                            gap-6 mt-12">

                    <!-- BUTTON 1 -->
                    <a href="#properties"
                       class="group relative px-10 py-5
                              rounded-2xl
                              bg-gradient-to-r
                              from-cyan-400
                              to-blue-500
                              text-black
                              font-bold
                              text-lg
                              overflow-hidden
                              hover:scale-105
                              transition duration-300">

                        <span class="relative z-10">
                            Explore Properties
                        </span>

                        <!-- BUTTON GLOW -->
                        <div class="absolute inset-0
                                    bg-white/30
                                    opacity-0
                                    group-hover:opacity-100
                                    transition duration-500">
                        </div>

                    </a>

                    <!-- BUTTON 2 -->
                    <a href="#contact"
                       class="group px-10 py-5
                              rounded-2xl
                              border border-white/20
                              bg-white/5
                              backdrop-blur-md
                              text-white
                              font-bold
                              text-lg
                              hover:border-cyan-400/50
                              hover:bg-cyan-400/10
                              hover:scale-105
                              transition duration-300">

                        Contact Agent

                    </a>

                </div>

                <!-- MINI STATS -->
                <div class="grid md:grid-cols-3 gap-8 mt-20">

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            500+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Luxury Properties
                        </p>

                    </div>

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            1200+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Happy Clients
                        </p>

                    </div>

                    <div>

                        <h3 class="text-4xl font-bold text-cyan-400">
                            15+
                        </h3>

                        <p class="text-gray-400 mt-2">
                            Prime Locations
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->
<section class="py-28 px-6 reveal border-y border-white/10 relative overflow-hidden">

    <!-- BACKGROUND GLOW -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                w-[700px] h-[700px]
                bg-cyan-500/10 blur-3xl rounded-full">
    </div>

    <div class="max-w-7xl mx-auto relative z-10 text-center">

        <!-- TITLE -->
        <h2 class="text-5xl font-bold mb-4">
            Why <span class="text-cyan-400">Choose Us</span>
        </h2>

        <p class="text-gray-400 mb-16">
            We provide premium real estate services built for your success.
        </p>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- CARD 1 -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[28px] p-10
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-5xl mb-5">🛡️</div>

                <h3 class="text-2xl font-bold mb-3 group-hover:text-cyan-400 transition">
                    Trusted Agents
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Verified professionals ready to help you find your dream home.
                </p>

            </div>

            <!-- CARD 2 -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[28px] p-10
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-5xl mb-5">🏡</div>

                <h3 class="text-2xl font-bold mb-3 group-hover:text-cyan-400 transition">
                    Premium Listings
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Exclusive properties in top locations with verified quality.
                </p>

            </div>

            <!-- CARD 3 -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[28px] p-10
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="text-5xl mb-5">⚡</div>

                <h3 class="text-2xl font-bold mb-3 group-hover:text-cyan-400 transition">
                    Fast Transactions
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Quick and secure buying process without hassle or delays.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- AGENTS -->
<section id="agents" class="py-28 px-6 reveal relative overflow-hidden">

    <!-- BACKGROUND GLOW -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                w-[700px] h-[700px]
                bg-cyan-500/10 blur-3xl rounded-full">
    </div>

    <div class="max-w-7xl mx-auto relative z-10">

        <!-- TITLE -->
        <div class="text-center mb-16">

            <h2 class="text-5xl font-bold">
                Top <span class="text-cyan-400">Agents</span>
            </h2>

            <p class="text-gray-400 mt-4">
                Meet our trusted real estate professionals
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- CARD -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[32px] p-8 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <!-- IMAGE -->
                <div class="relative w-24 h-24 mx-auto mb-6">

                    <img src="https://i.pravatar.cc/150?img=1"
                         class="w-24 h-24 rounded-full object-cover
                                border-2 border-cyan-400
                                group-hover:scale-110
                                transition duration-500">

                    <!-- GLOW -->
                    <div class="absolute inset-0 rounded-full
                                bg-cyan-400/20 blur-xl opacity-0
                                group-hover:opacity-100 transition"></div>

                </div>

                <h3 class="text-2xl font-bold">
                    John Doe
                </h3>

                <p class="text-cyan-400 mt-2 font-medium">
                    Luxury Specialist
                </p>

                <p class="text-gray-400 mt-4 text-sm leading-relaxed">
                    Expert in high-end properties and luxury real estate deals.
                </p>

                <!-- CONTACT ICONS -->
                <div class="flex justify-center gap-4 mt-6">

                    <a href="#"
                       class="w-10 h-10 rounded-xl
                              bg-white/5 border border-white/10
                              flex items-center justify-center
                              hover:bg-cyan-400 hover:text-black
                              transition">

                        💬

                    </a>

                    <a href="#"
                       class="w-10 h-10 rounded-xl
                              bg-white/5 border border-white/10
                              flex items-center justify-center
                              hover:bg-cyan-400 hover:text-black
                              transition">

                        📞

                    </a>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[32px] p-8 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="relative w-24 h-24 mx-auto mb-6">

                    <img src="https://i.pravatar.cc/150?img=2"
                         class="w-24 h-24 rounded-full object-cover
                                border-2 border-cyan-400
                                group-hover:scale-110
                                transition duration-500">

                    <div class="absolute inset-0 rounded-full
                                bg-cyan-400/20 blur-xl opacity-0
                                group-hover:opacity-100 transition"></div>

                </div>

                <h3 class="text-2xl font-bold">Anna Smith</h3>

                <p class="text-cyan-400 mt-2 font-medium">
                    Residential Expert
                </p>

                <p class="text-gray-400 mt-4 text-sm">
                    Helps families find affordable and comfortable homes.
                </p>

                <div class="flex justify-center gap-4 mt-6">

                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-cyan-400 hover:text-black transition">💬</a>

                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-cyan-400 hover:text-black transition">📞</a>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="group bg-white/5 backdrop-blur-xl
                        border border-white/10
                        rounded-[32px] p-8 text-center
                        hover:border-cyan-400/50
                        hover:-translate-y-3
                        transition duration-500">

                <div class="relative w-24 h-24 mx-auto mb-6">

                    <img src="https://i.pravatar.cc/150?img=3"
                         class="w-24 h-24 rounded-full object-cover
                                border-2 border-cyan-400
                                group-hover:scale-110
                                transition duration-500">

                    <div class="absolute inset-0 rounded-full
                                bg-cyan-400/20 blur-xl opacity-0
                                group-hover:opacity-100 transition"></div>

                </div>

                <h3 class="text-2xl font-bold">Mark Lee</h3>

                <p class="text-cyan-400 mt-2 font-medium">
                    Investment Advisor
                </p>

                <p class="text-gray-400 mt-4 text-sm">
                    Guides investors in high-return property deals.
                </p>

                <div class="flex justify-center gap-4 mt-6">

                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-cyan-400 hover:text-black transition">💬</a>

                    <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-cyan-400 hover:text-black transition">📞</a>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection