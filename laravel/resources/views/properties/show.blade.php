@extends('layouts.app')

@section('content')

<!-- HERO IMAGE / VIDEO -->
<section class="relative h-[70vh] overflow-hidden">

    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
         class="w-full h-full object-cover opacity-80">

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- TITLE OVERLAY -->
    <div class="absolute bottom-10 left-10">

        <h1 class="text-5xl font-bold">Modern Family House</h1>

        <p class="text-gray-300 mt-2">📍 Dasmariñas, Cavite</p>

        <div class="mt-4 text-cyan-400 text-2xl font-bold">
            ₱3.5M
        </div>

    </div>

</section>

<!-- MAIN CONTENT -->
<section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">

    <!-- LEFT SIDE -->
    <div class="md:col-span-2 space-y-10">

        <!-- DESCRIPTION -->
        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">

            <h2 class="text-2xl font-bold mb-4">Property Description</h2>

            <p class="text-gray-300 leading-relaxed">
                This modern family house is located in a prime location in Cavite.
                It features spacious rooms, modern design, and a peaceful environment
                perfect for family living.
            </p>

        </div>

        <!-- IMAGE SLIDER -->
        <div class="relative w-full overflow-hidden rounded-2xl">

    <!-- MAIN IMAGE -->
    <img id="autoImage"
    onclick="openZoom(this.src)"
         src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
         class="w-full h-[450px] cursor-zoom-in" object-cover transition duration-500">

    <!-- THUMBNAILS -->
    <div class="flex gap-3 mt-4">

        <img onclick="changeImage(this)"
             src="https://images.unsplash.com/photo-1570129477492-45c003edd2be"
             class="w-24 h-20 object-cover rounded-lg cursor-pointer hover:scale-105 transition">

        <img onclick="changeImage(this)"
             src="https://images.unsplash.com/photo-1568605114967-8130f3a36994"
             class="w-24 h-20 object-cover rounded-lg cursor-pointer hover:scale-105 transition">

        <img onclick="changeImage(this)"
             src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914"
             class="w-24 h-20 object-cover rounded-lg cursor-pointer hover:scale-105 transition">

    </div>
    
</div>


        <!-- VIDEO -->
        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">

            <h2 class="text-xl font-bold mb-4">Property Video</h2>

            <video controls class="w-full rounded-xl">
                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4">
            </video>

        </div>

        <!-- FEATURES -->
        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl">

            <h2 class="text-xl font-bold mb-4">Features</h2>

            <div class="grid grid-cols-2 gap-4 text-gray-300">

                <span>🛏 3 Bedrooms</span>
                <span>🚿 2 Bathrooms</span>
                <span>📐 120 sqm</span>
                <span>🚗 1 Car Garage</span>

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE (STICKY CARD) -->
    <div class="space-y-6">

        <div class="sticky top-10 bg-white/5 border border-white/10 p-6 rounded-2xl">

    <h2 class="text-xl font-bold text-cyan-400">₱3.5M</h2>

    <p class="text-gray-400 mt-2">Modern Family House</p>

    <div class="mt-4 text-sm text-gray-300 space-y-2">
        <p>📍 Dasmariñas, Cavite</p>
        <p>🛏 3 Bedrooms</p>
        <p>🚿 2 Bathrooms</p>
        <p>📐 120 sqm</p>
    </div>

    <button onclick="openModal()"
            class="mt-6 w-full py-3 rounded-xl
                   bg-gradient-to-r from-cyan-400 to-blue-500
                   text-black font-bold hover:scale-105 transition">

        Inquire Now

    </button>

</div>

    </div>

    <div id="inquiryModal"
     class="hidden fixed inset-0 bg-black/70 backdrop-blur-md flex items-center justify-center z-50">

    <!-- MODAL BOX -->
    <div class="w-[92%] md:w-[850px] bg-[#0a0f1c] border border-white/10 rounded-3xl overflow-hidden shadow-2xl flex">

        <!-- LEFT: PROPERTY PREVIEW -->
        <div class="w-1/2 hidden md:block">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                 class="h-full w-full object-cover">
        </div>

        <!-- RIGHT: FORM -->
        <div class="w-full md:w-1/2 p-8 relative">

            <!-- CLOSE -->
            <button onclick="closeModal()"
                    class="absolute top-4 right-4 text-gray-400 hover:text-white text-xl">
                ✕
            </button>

            <h2 class="text-2xl font-bold text-cyan-400">Inquiry Form</h2>

            <p class="text-gray-400 text-sm mt-1">
                Send a message to the agent about this property
            </p>

            <!-- AGENT CARD -->
            <div class="flex items-center gap-3 mt-6 p-3 bg-white/5 rounded-xl border border-white/10">

                <img src="https://i.pravatar.cc/150?img=1"
                     class="w-12 h-12 rounded-full">

                <div>
                    <p class="font-semibold">John Doe</p>
                    <p class="text-xs text-gray-400">Luxury Property Agent</p>
                </div>

            </div>

            <!-- FORM -->
            <div class="mt-6 space-y-3">

                <input type="text" placeholder="Your Name"
                       class="w-full p-3 rounded-xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

                <input type="text" placeholder="Phone Number"
                       class="w-full p-3 rounded-xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

                <input type="email" placeholder="Email"
                       class="w-full p-3 rounded-xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none">

                <textarea placeholder="Message about the property..."
                          class="w-full p-3 h-28 rounded-xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none"></textarea>

            </div>

            <!-- BUTTON -->
            <button class="mt-6 w-full py-3 rounded-xl
                           bg-gradient-to-r from-cyan-400 to-blue-500
                           text-black font-bold hover:scale-105 transition">

                Send Inquiry

            </button>

        </div>

    </div>
</div>

<div id="zoomModal"
     class="hidden fixed inset-0 bg-black/90 flex items-center justify-center z-50">

    <img id="zoomImg" class="max-w-[90%] max-h-[90%] rounded-xl">

    <button id="heartBtn"
        onclick="toggleHeart()"
        class="absolute top-4 right-4 text-2xl bg-black/40 p-2 rounded-full hover:scale-110 transition">

    🤍

</button>

</div>



</section>


<section class="relative py-20 overflow-hidden">

    <!-- BACKGROUND VIDEO -->
    <video autoplay muted loop playsinline
           class="absolute inset-0 w-full h-full object-cover opacity-20 blur-sm">

        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                type="video/mp4">

    </video>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-[#0a0f1c]/80"></div>

    <!-- CONTENT -->
    <div class="relative max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-bold mb-10 text-cyan-400">
            Amenities & Facilities
        </h2>

        <!-- CAROUSEL -->
        <div id="track"
             class="flex gap-6 overflow-x-auto scroll-smooth cursor-grab snap-x snap-mandatory pb-6">

            <!-- CARD 1 -->
            <div class="amenity-card snap-center"
            onclick="openAmenity(
                'Swimming Pool',
                'Luxury resort-style infinity pool perfect for relaxation.',
                [
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                    'https://images.unsplash.com/photo-1570129477492-45c003edd2be',
                    'https://images.unsplash.com/photo-1580587771525-78b9dba3b914'
                ]
            )">

                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">

                <div class="p-4">
                    <h3 class="font-bold">Swimming Pool</h3>
                    <p class="text-gray-400 text-sm">Tap to view details</p>
                </div>

            </div>

            <!-- CARD 2 -->
            <div class="amenity-card snap-center"
            onclick="openAmenity(
                'Gym',
                'Fully equipped modern fitness center with premium machines.',
                [
                    'https://images.unsplash.com/photo-1570129477492-45c003edd2be',
                    'https://images.unsplash.com/photo-1558611848-73f7eb4001a1',
                    'https://images.unsplash.com/photo-1599058917212-d750089bc07e'
                ]
            )">

                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be">

                <div class="p-4">
                    <h3 class="font-bold">Gym</h3>
                    <p class="text-gray-400 text-sm">Tap to view details</p>
                </div>

            </div>

            <!-- CARD 3 -->
            <div class="amenity-card snap-center"
            onclick="openAmenity(
                'Security',
                '24/7 CCTV monitored gated community with guards.',
                [
                    'https://images.unsplash.com/photo-1568605114967-8130f3a36994',
                    'https://images.unsplash.com/photo-1581091012184-5c1f1b2a3d8f',
                    'https://images.unsplash.com/photo-1600607687644-c7171b42498f'
                ]
            )">

                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994">

                <div class="p-4">
                    <h3 class="font-bold">Security</h3>
                    <p class="text-gray-400 text-sm">Tap to view details</p>
                </div>

            </div>

        </div>

    </div>
</section>

<div id="amenityModal"
     class="hidden fixed inset-0 bg-black/80 backdrop-blur-md z-50 flex items-center justify-center">

    <div class="w-[92%] md:w-[800px] bg-[#0a0f1c] border border-white/10 rounded-2xl overflow-hidden">

        <!-- IMAGE GALLERY -->
        <div class="grid grid-cols-3 gap-1">
            <img id="amImg1" class="h-40 w-full object-cover">
            <img id="amImg2" class="h-40 w-full object-cover">
            <img id="amImg3" class="h-40 w-full object-cover">
        </div>

        <!-- CONTENT -->
        <div class="p-6 relative">

            <button onclick="closeAmenity()"
                    class="absolute top-4 right-4 text-white text-xl">
                ✕
            </button>

            <h2 id="amTitle" class="text-2xl font-bold text-cyan-400"></h2>
            <p id="amDesc" class="text-gray-300 mt-2"></p>

        </div>

    </div>
</div>


<script>
function toggleHeart() {
    const btn = document.getElementById("heartBtn");

    if (btn.innerText === "🤍") {
        btn.innerText = "❤️";
    } else {
        btn.innerText = "🤍";
    }
}
</script>

<script>
function openZoom(src) {
    document.getElementById("zoomModal").classList.remove("hidden");
    document.getElementById("zoomImg").src = src;
}

document.getElementById("zoomModal").addEventListener("click", () => {
    document.getElementById("zoomModal").classList.add("hidden");
});
</script>

<script>
function openModal() {
    const modal = document.getElementById("inquiryModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModal() {
    const modal = document.getElementById("inquiryModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
</script>

<script>
function openAmenity(title, desc, images) {

    document.getElementById("amenityModal").classList.remove("hidden");

    document.getElementById("amTitle").innerText = title;
    document.getElementById("amDesc").innerText = desc;

    document.getElementById("amImg1").src = images[0];
    document.getElementById("amImg2").src = images[1];
    document.getElementById("amImg3").src = images[2];
}

function closeAmenity() {
    document.getElementById("amenityModal").classList.add("hidden");
}
</script>

<script>
const track = document.getElementById("track");
const cards = document.querySelectorAll(".amenity-card");

function updateCenter() {
    let center = track.scrollLeft + track.offsetWidth / 2;

    cards.forEach(card => {
        let cardCenter = card.offsetLeft + card.offsetWidth / 2;

        if (Math.abs(center - cardCenter) < 120) {
            card.classList.add("active");
        } else {
            card.classList.remove("active");
        }
    });
}

track.addEventListener("scroll", updateCenter);
window.addEventListener("load", updateCenter);
</script>

@endsection