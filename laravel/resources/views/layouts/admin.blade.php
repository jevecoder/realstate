<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#0a0f1c] text-white">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    @include('admin.partials.sidebar')

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">

        <!-- TOP BAR -->
        <div class="flex justify-between items-center mb-10">


            <div class="text-gray-400">
                Welcome Admin 👋
            </div>

        </div>

        <!-- PAGE CONTENT -->
        @yield('content')

        <div id="propertyModal"
     class="hidden fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center">

    <div class="w-[92%] md:w-[650px] bg-[#0a0f1c] border border-white/10 rounded-[30px] p-8 relative overflow-y-auto max-h-[90vh]">

        <!-- CLOSE -->
        <button onclick="closePropertyModal()"
                class="absolute top-4 right-5 text-white text-xl">
            ✕
        </button>

        <h2 class="text-3xl font-bold text-cyan-400">
            Create Property
        </h2>

        <p class="text-gray-400 mt-2">
            Add a premium real estate listing
        </p>

        <!-- FORM -->
        <div class="mt-8 space-y-4">

            <!-- PROPERTY NAME -->
            <input type="text"
                   placeholder="Property Name"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

            <!-- PROPERTY TYPE -->
            <select class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

    <option>Property Location</option>
    <option>Dasmariñas</option>
    <option>General Trias</option>
    <option>Bacoor</option>
    <option>Imus</option>
    <option>Silang</option>
    <option>Tagaytay</option>
    <option>Cavite City</option>

</select>

<select class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

    <option>Property Category</option>
    <option>Luxury Homes</option>
    <option>Affordable Homes</option>
    <option>Condominium</option>
    <option>Townhouse</option>
    <option>Commercial</option>
    <option>Farm Lot</option>

</select>

<input type="text"
       placeholder="Or Add New Category (optional)"
       class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

            <!-- LOCATION -->
            <input type="text"
                   placeholder="Location"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <!-- PRICE -->
            <input type="number"
                   placeholder="Price (₱)"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <!-- DESCRIPTION -->
            <textarea rows="4"
                      placeholder="Property Description"
                      class="w-full p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none"></textarea>

            <!-- HERO IMAGE -->
            <div class="border border-white/10 p-5 rounded-2xl">

                <p class="text-gray-400 mb-2">Hero Image</p>
                <input type="file"
                       class="w-full text-gray-400">

            </div>

            <!-- MULTIPLE IMAGES -->
            <div class="border border-dashed border-white/20 p-6 rounded-2xl text-center text-gray-400">

                Upload Gallery Images (Multiple)

                <input type="file" multiple class="mt-3 w-full text-center">

            </div>

            <!-- VIDEO -->
            <div class="border border-white/10 p-5 rounded-2xl">

                <p class="text-gray-400 mb-2">Property Video</p>

                <input type="file"
                       class="w-full text-gray-400">

            </div>

            <!-- GARAGE -->
            <input type="number"
                   placeholder="Car Garage Slots"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <!-- BED/BATH QUICK INFO -->
            <div class="grid grid-cols-2 gap-4">

                <input type="number"
                       placeholder="Bedrooms"
                       class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

                <input type="number"
                       placeholder="Bathrooms"
                       class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            </div>

            <!-- SIZE -->
            <input type="number"
                   placeholder="Floor Area (sqm)"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <!-- SAVE BUTTON -->
            <button
                class="w-full py-4 rounded-2xl bg-gradient-to-r from-cyan-400 to-blue-500 text-black font-bold hover:scale-105 transition">

                Save Property

            </button>

        </div>

    </div>
</div>

<div id="editPropertyModal"
     class="hidden fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center">

    <div class="w-[92%] md:w-[650px] bg-[#0a0f1c] border border-white/10 rounded-[30px] p-8 relative overflow-y-auto max-h-[90vh]">

        <!-- CLOSE -->
        <button onclick="closeEditModal()"
                class="absolute top-4 right-5 text-white text-xl">
            ✕
        </button>

        <h2 class="text-3xl font-bold text-cyan-400">
            Edit Property
        </h2>

        <p class="text-gray-400 mt-2">
            Update property listing details
        </p>

        <!-- FORM -->
        <div class="mt-8 space-y-5">

            <!-- PROPERTY NAME -->
            <div>
                <label class="text-sm text-gray-400">Property Name</label>
                <input id="edit_name" type="text"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- PROPERTY LOCATION (SELECT) -->
            <div>
                <label class="text-sm text-gray-400">Property Location</label>
                <select id="edit_property_location"
                        class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">

                    <option>Dasmariñas</option>
                    <option>General Trias</option>
                    <option>Bacoor</option>
                    <option>Imus</option>
                    <option>Silang</option>
                    <option>Tagaytay</option>
                    <option>Cavite City</option>

                </select>
            </div>

            <!-- PROPERTY CATEGORY -->
            <div>
                <label class="text-sm text-gray-400">Property Category</label>
                <select id="edit_category"
                        class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">

                    <option>Luxury Homes</option>
                    <option>Affordable Homes</option>
                    <option>Condominium</option>
                    <option>Townhouse</option>
                    <option>Commercial</option>
                    <option>Farm Lot</option>

                </select>
            </div>

            <!-- NEW CATEGORY -->
            <div>
                <label class="text-sm text-gray-400">Add New Category (Optional)</label>
                <input id="edit_new_category" type="text"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- LOCATION TEXT -->
            <div>
                <label class="text-sm text-gray-400">Exact Location</label>
                <input id="edit_location" type="text"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- PRICE -->
            <div>
                <label class="text-sm text-gray-400">Price (₱)</label>
                <input id="edit_price" type="number"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- DESCRIPTION -->
            <div>
                <label class="text-sm text-gray-400">Property Description</label>
                <textarea id="edit_description" rows="4"
                          class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10"></textarea>
            </div>

            <!-- HERO IMAGE -->
            <div>
                <label class="text-sm text-gray-400">Hero Image</label>
                <input id="edit_hero_image" type="file"
                       class="w-full mt-1 text-gray-400">
            </div>

            <!-- GALLERY IMAGES -->
            <div>
                <label class="text-sm text-gray-400">Upload Gallery Images</label>
                <input id="edit_gallery" type="file" multiple
                       class="w-full mt-1 text-gray-400">
            </div>

            <!-- VIDEO -->
            <div>
                <label class="text-sm text-gray-400">Property Video</label>
                <input id="edit_video" type="file"
                       class="w-full mt-1 text-gray-400">
            </div>

            <!-- GARAGE -->
            <div>
                <label class="text-sm text-gray-400">Car Garage Slots</label>
                <input id="edit_garage" type="number"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- BED / BATH -->
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label class="text-sm text-gray-400">Bedrooms</label>
                    <input id="edit_bedrooms" type="number"
                           class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
                </div>

                <div>
                    <label class="text-sm text-gray-400">Bathrooms</label>
                    <input id="edit_bathrooms" type="number"
                           class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
                </div>

            </div>

            <!-- FLOOR AREA -->
            <div>
                <label class="text-sm text-gray-400">Floor Area (sqm)</label>
                <input id="edit_size" type="number"
                       class="w-full mt-1 p-4 rounded-2xl bg-white/5 border border-white/10">
            </div>

            <!-- UPDATE BUTTON -->
            <button
                class="w-full py-4 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-400 text-black font-bold hover:scale-105 transition">

                Update Property

            </button>

        </div>

    </div>
</div>

<script>

function openEditModal() {
    document.getElementById('editPropertyModal').classList.remove('hidden');

    // SAMPLE DATA (temporary UI test)
    document.getElementById('edit_name').value = "Modern House Dasma";
    document.getElementById('edit_location').value = "Dasmariñas";
    document.getElementById('edit_category').value = "Luxury Homes";
    document.getElementById('edit_price').value = 3500000;
    document.getElementById('edit_garage').value = 2;
    document.getElementById('edit_bedrooms').value = 3;
    document.getElementById('edit_bathrooms').value = 2;
    document.getElementById('edit_size').value = 120;
}

function closeEditModal() {
    document.getElementById('editPropertyModal').classList.add('hidden');
}

</script>

<script>

function openPropertyModal() {
    document.getElementById('propertyModal').classList.remove('hidden');
}

function closePropertyModal() {
    document.getElementById('propertyModal').classList.add('hidden');
}

</script>

    </main>

</div>

</body>
</html>