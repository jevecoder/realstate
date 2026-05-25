@extends('layouts.admin')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">

        <h1 class="text-3xl font-bold text-cyan-400">
            Properties Management
        </h1>

        <button onclick="openPropertyModal()"
                class="px-5 py-2 bg-cyan-400 text-black font-bold rounded-xl hover:scale-105 transition">

            + Add Property

        </button>

    </div>

    <!-- SCROLL WRAPPER (IMPORTANT FIX) -->
    <div class="w-full overflow-x-auto rounded-2xl border border-white/10 bg-white/5">

        <table class="min-w-[1400px] w-full text-sm whitespace-nowrap">

            <thead class="bg-white/10 text-gray-300">

                <tr>
                    <th class="p-4">Property Name</th>
                    <th class="p-4">Property Location</th>
                    <th class="p-4">Category</th>
                    <th class="p-4">New Category</th>
                    <th class="p-4">Location</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Description</th>
                    <th class="p-4">Hero Image</th>
                    <th class="p-4">Gallery</th>
                    <th class="p-4">Video</th>
                    <th class="p-4">Garage</th>
                    <th class="p-4">Bedrooms</th>
                    <th class="p-4">Bathrooms</th>
                    <th class="p-4">Floor Area</th>
                    <th class="p-4 text-center">Actions</th>
                </tr>

            </thead>

            <tbody>

                <tr class="border-t border-white/10 hover:bg-white/5 transition">

                    <td class="p-4 font-bold">Modern House Dasma</td>
                    <td class="p-4">Dasmariñas</td>
                    <td class="p-4">Luxury Homes</td>
                    <td class="p-4 text-gray-500">—</td>
                    <td class="p-4">Dasmariñas</td>
                    <td class="p-4 text-cyan-400 font-bold">₱3.5M</td>
                    <td class="p-4 max-w-[200px] truncate">
                        Modern family house with premium design
                    </td>

                    <td class="p-4">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                             class="w-12 h-12 rounded-lg object-cover">
                    </td>

                    <td class="p-4 text-gray-400">3 Images</td>
                    <td class="p-4 text-gray-400">1 Video</td>

                    <td class="p-4">2</td>
                    <td class="p-4">3</td>
                    <td class="p-4">2</td>
                    <td class="p-4">120 sqm</td>

                    <td class="p-4 text-center space-x-2">
                        <button onclick="openEditModal()" class="px-3 py-1 bg-blue-500 rounded-lg">Edit</button>
                        <button class="px-3 py-1 bg-red-500 rounded-lg">Delete</button>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection