@extends('layouts.admin')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">

        <h1 class="text-3xl font-bold text-cyan-400">
            Agents Management
        </h1>

        <button class="px-5 py-2 bg-cyan-400 text-black font-bold rounded-xl hover:scale-105 transition">
            + Add Agent
        </button>

    </div>

    <!-- GRID CARDS -->
    <div class="grid md:grid-cols-3 gap-6">

        @foreach($agents as $agent)

        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 text-center hover:scale-105 transition">

            <!-- AVATAR -->
            <img src="https://i.pravatar.cc/150?img={{ $agent['id'] }}"
                 class="w-20 h-20 mx-auto rounded-full mb-4 border border-cyan-400">

            <!-- NAME -->
            <h2 class="text-xl font-bold">
                {{ $agent['name'] }}
            </h2>

            <!-- ROLE -->
            <p class="text-gray-400 text-sm mt-1">
                {{ $agent['role'] }}
            </p>

            <!-- LOCATION -->
            <p class="text-gray-500 text-sm mt-2">
                📍 {{ $agent['location'] }}
            </p>

            <!-- PHONE -->
            <p class="text-gray-500 text-sm">
                📞 {{ $agent['phone'] }}
            </p>

            <!-- ACTIONS -->
            <div class="flex justify-center gap-2 mt-5">

                <button class="px-3 py-1 bg-blue-500 rounded-lg hover:scale-105 transition">
                    Edit
                </button>

                <button class="px-3 py-1 bg-red-500 rounded-lg hover:scale-105 transition"
                        onclick="confirm('Delete this agent?')">
                    Delete
                </button>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection