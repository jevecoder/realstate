@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen bg-[#0a0f1c] text-white">

    <!-- SIDEBAR -->
    <!-- @include('admin.partials.sidebar') -->

    <!-- MAIN -->
    <main class="flex-1 p-8">

        <!-- TOP BAR -->
        <div class="flex justify-between items-center mb-10">

            <h1 class="text-3xl font-bold">
                Dashboard
            </h1>

        </div>

        <!-- STATS -->
        <div class="grid md:grid-cols-4 gap-6 mb-10">

            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                <h3 class="text-gray-400">Total Properties</h3>
                <p class="text-3xl font-bold text-cyan-400 mt-2">120</p>
            </div>

            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                <h3 class="text-gray-400">Agents</h3>
                <p class="text-3xl font-bold text-cyan-400 mt-2">12</p>
            </div>

            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                <h3 class="text-gray-400">Inquiries</h3>
                <p class="text-3xl font-bold text-cyan-400 mt-2">58</p>
            </div>

            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">
                <h3 class="text-gray-400">Sold</h3>
                <p class="text-3xl font-bold text-cyan-400 mt-2">34</p>
            </div>

        </div>

        <!-- CONTENT GRID -->
        <div class="grid md:grid-cols-2 gap-6">

            <!-- RECENT PROPERTIES -->
            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">

                <h2 class="text-xl font-bold mb-4">Recent Properties</h2>

                <div class="space-y-4">

                    <div class="flex justify-between items-center">
                        <span>Modern House Dasma</span>
                        <span class="text-cyan-400">₱3.5M</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span>Luxury Condo Bacoor</span>
                        <span class="text-cyan-400">₱2.8M</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span>Family Home Gentri</span>
                        <span class="text-cyan-400">₱4.1M</span>
                    </div>

                </div>

            </div>

            <!-- INQUIRIES -->
            <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">

                <h2 class="text-xl font-bold mb-4">Latest Inquiries</h2>

                <div class="space-y-4">

                    <div>
                        <p class="font-bold">Juan Dela Cruz</p>
                        <p class="text-gray-400 text-sm">Interested in Dasma House</p>
                    </div>

                    <div>
                        <p class="font-bold">Maria Santos</p>
                        <p class="text-gray-400 text-sm">Looking for Condo Unit</p>
                    </div>

                    <div>
                        <p class="font-bold">Mark Lee</p>
                        <p class="text-gray-400 text-sm">Wants property viewing</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- QUICK ACTIONS -->
        <div class="mt-8 grid md:grid-cols-3 gap-6">

            <button onclick="openPropertyModal()" class="bg-cyan-400 text-black font-bold py-4 rounded-2xl hover:scale-105 transition">
                + Add Property
            </button>

            <button class="bg-white/5 border border-white/10 py-4 rounded-2xl hover:border-cyan-400 transition">
                + Add Agent
            </button>

            <a href="/home"
   class="group relative overflow-hidden flex items-center justify-center
          bg-white/5 border border-white/10
          py-4 rounded-2xl
          hover:border-cyan-400
          transition duration-300
          font-semibold text-white">

    <!-- GLOW EFFECT -->
    <span class="absolute inset-0 bg-cyan-400/10 opacity-0 group-hover:opacity-100 transition duration-300"></span>

    <!-- TEXT -->
    <span class="relative flex items-center gap-2">

        View Website

        <span class="group-hover:translate-x-1 transition duration-300">
            ↗
        </span>

    </span>

</a>

        </div>

    </main>

</div>

@endsection