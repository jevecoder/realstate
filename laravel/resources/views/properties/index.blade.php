@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="max-w-7xl mx-auto px-6 pt-28">

    <h1 class="text-3xl font-bold text-cyan-400 mb-6">
        Explore Properties
    </h1>

    <!-- SEARCH / FILTER BAR -->
    <div class="grid md:grid-cols-5 gap-3 mb-10">

        <input type="text" placeholder="Location"
               class="p-3 rounded-xl bg-white/5 border border-white/10">

        <select class="p-3 rounded-xl bg-white/5 border border-white/10">
            <option>Property Type</option>
            <option>House</option>
            <option>Condo</option>
            <option>Lot</option>
        </select>

        <input type="text" placeholder="Min Price"
               class="p-3 rounded-xl bg-white/5 border border-white/10">

        <input type="text" placeholder="Max Price"
               class="p-3 rounded-xl bg-white/5 border border-white/10">

        <button class="bg-cyan-400 text-black font-bold rounded-xl hover:scale-105 transition">
            Search
        </button>

    </div>

</section>

<!-- PROPERTY GRID -->
<section class="max-w-7xl mx-auto px-6 pb-20">

    <div class="grid md:grid-cols-3 gap-6">

        <!-- CARD 1 -->
        <div class="group bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-cyan-400 transition">

            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                     class="h-60 w-full object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">Modern Luxury House</h3>
                <p class="text-gray-400 text-sm">📍 Dasmariñas, Cavite</p>

                <div class="flex justify-between text-sm text-gray-400 mt-3">
                    <span>🛏 3 Beds</span>
                    <span>🚿 2 Baths</span>
                    <span>📐 120 sqm</span>
                </div>

                <p class="text-cyan-400 font-bold mt-4 text-lg">₱3.5M</p>

                <a href="/properties/1"
                   class="block mt-4 text-center py-3 rounded-xl
                          bg-gradient-to-r from-cyan-400 to-blue-500
                          text-black font-bold hover:scale-105 transition">

                    View Details
                </a>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="group bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-cyan-400 transition">

            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994"
                     class="h-60 w-full object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">Elegant Subdivision House</h3>
                <p class="text-gray-400 text-sm">📍 General Trias, Cavite</p>

                <div class="flex justify-between text-sm text-gray-400 mt-3">
                    <span>🛏 4 Beds</span>
                    <span>🚿 3 Baths</span>
                    <span>📐 150 sqm</span>
                </div>

                <p class="text-cyan-400 font-bold mt-4 text-lg">₱4.8M</p>

                <a href="/properties/2"
                   class="block mt-4 text-center py-3 rounded-xl
                          bg-gradient-to-r from-cyan-400 to-blue-500
                          text-black font-bold hover:scale-105 transition">

                    View Details
                </a>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="group bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-cyan-400 transition">

            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914"
                     class="h-60 w-full object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">Modern Condo Unit</h3>
                <p class="text-gray-400 text-sm">📍 Bacoor, Cavite</p>

                <div class="flex justify-between text-sm text-gray-400 mt-3">
                    <span>🛏 2 Beds</span>
                    <span>🚿 1 Bath</span>
                    <span>📐 60 sqm</span>
                </div>

                <p class="text-cyan-400 font-bold mt-4 text-lg">₱2.2M</p>

                <a href="/properties/3"
                   class="block mt-4 text-center py-3 rounded-xl
                          bg-gradient-to-r from-cyan-400 to-blue-500
                          text-black font-bold hover:scale-105 transition">

                    View Details
                </a>

            </div>

        </div>

    </div>

</section>

@endsection