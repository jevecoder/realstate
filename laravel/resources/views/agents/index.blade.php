@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">

    <!-- BG IMAGE -->
    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa"
         class="absolute inset-0 w-full h-full object-cover opacity-30">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-[#0a0f1c]/80"></div>

    <!-- CONTENT -->
    <div class="relative text-center px-6">

        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
            Meet Our <span class="text-cyan-400">Professional Agents</span>
        </h1>

        <p class="text-gray-400 mt-5 max-w-2xl mx-auto">
            Trusted real estate experts ready to help you find your dream property.
        </p>

    </div>

</section>

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="relative rounded-[40px] overflow-hidden border border-white/10">

        <!-- BG IMAGE -->
        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa"
             class="absolute inset-0 w-full h-full object-cover opacity-30">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a0f1c] via-[#0a0f1c]/80 to-transparent"></div>

        <!-- CONTENT -->
        <div class="relative grid md:grid-cols-2 items-center gap-10 p-10 md:p-20">

            <!-- LEFT -->
            <div>

                <p class="text-cyan-400 uppercase tracking-[4px] text-sm">
                    Top Performing Agent
                </p>

                <h2 class="text-5xl font-bold mt-4 leading-tight">
                    Michael Anderson
                </h2>

                <p class="text-gray-400 mt-6 leading-relaxed">
                    Specializing in luxury homes, investment properties,
                    and premium real estate across Cavite.
                </p>

                <!-- STATS -->
                <div class="flex gap-6 mt-8">

                    <div>
                        <h3 class="counter text-4xl font-bold text-cyan-400"
                            data-target="250">0</h3>
                        <p class="text-gray-400 text-sm">Properties Sold</p>
                    </div>

                    <div>
                        <h3 class="counter text-4xl font-bold text-cyan-400"
                            data-target="12">0</h3>
                        <p class="text-gray-400 text-sm">Years Experience</p>
                    </div>

                    <div>
                        <h3 class="counter text-4xl font-bold text-cyan-400"
                            data-target="98">0</h3>
                        <p class="text-gray-400 text-sm">Client Satisfaction</p>
                    </div>

                </div>

                <!-- BUTTON -->
                <button onclick="openContactModal()"
                        class="mt-10 px-8 py-4 rounded-2xl
                               bg-gradient-to-r from-cyan-400 to-blue-500
                               text-black font-bold
                               hover:scale-105 transition">

                    Contact Agent

                </button>

            </div>

            <!-- RIGHT -->
            <div class="relative">

                <img src="https://i.pravatar.cc/600?img=15"
                     class="rounded-[30px] shadow-2xl">

                <!-- FLOATING BADGE -->
                <div class="absolute bottom-6 left-6
                            bg-black/60 backdrop-blur-md
                            border border-white/10
                            px-5 py-3 rounded-2xl">

                    ⭐ 4.9 Top Rated Agent

                </div>

            </div>

        </div>

    </div>

</section>


<!-- AGENTS GRID -->
<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid md:grid-cols-3 gap-8">

        <!-- CARD -->
        <div class="group relative bg-white/5 border border-white/10
                    rounded-[30px] overflow-hidden
                    hover:border-cyan-400/60
                    transition duration-500
                    hover:-translate-y-3">

            <!-- GLOW -->
            <div class="absolute inset-0 bg-cyan-400/0
                        group-hover:bg-cyan-400/5 transition"></div>

            <!-- IMAGE -->
            <div class="relative overflow-hidden">

                <img src="https://i.pravatar.cc/500?img=12"
                     class="h-[350px] w-full object-cover
                            group-hover:scale-110 transition duration-700">

                <!-- VERIFIED -->
                <div class="absolute top-4 left-4
                            bg-cyan-400 text-black
                            px-3 py-1 rounded-full
                            text-xs font-bold">

                    ✔ Verified

                </div>

                <!-- ONLINE -->
                <div class="absolute top-4 right-4 flex items-center gap-2
                            bg-black/50 px-3 py-1 rounded-full text-xs">

                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>

                    Online

                </div>

            </div>

            <!-- CONTENT -->
            <div class="p-6 relative z-10">

                <h2 class="text-2xl font-bold">
                    John Doe
                </h2>

                <p class="text-cyan-400 text-sm mt-1">
                    Luxury Property Specialist
                </p>

                <!-- STATS -->
                <div class="grid grid-cols-3 gap-3 mt-6 text-center">

                    <div class="bg-white/5 rounded-xl p-3">
                        <h3 class="font-bold text-cyan-400">120+</h3>
                        <p class="text-xs text-gray-400">Sold</p>
                    </div>

                    <div class="bg-white/5 rounded-xl p-3">
                        <h3 class="font-bold text-cyan-400">10Y</h3>
                        <p class="text-xs text-gray-400">Experience</p>
                    </div>

                    <div class="bg-white/5 rounded-xl p-3">
                        <h3 class="font-bold text-cyan-400">4.9★</h3>
                        <p class="text-xs text-gray-400">Rating</p>
                    </div>

                </div>

                <!-- SOCIALS -->
                <div class="flex justify-center gap-4 mt-6
                            opacity-0 group-hover:opacity-100
                            translate-y-4 group-hover:translate-y-0
                            transition duration-500">

                    <a href="#"
                       class="w-10 h-10 flex items-center justify-center
                              rounded-full bg-white/10 hover:bg-cyan-400
                              hover:text-black transition">

                        f

                    </a>

                    <a href="#"
                       class="w-10 h-10 flex items-center justify-center
                              rounded-full bg-white/10 hover:bg-cyan-400
                              hover:text-black transition">

                        in

                    </a>

                    <a href="#"
                       class="w-10 h-10 flex items-center justify-center
                              rounded-full bg-white/10 hover:bg-cyan-400
                              hover:text-black transition">

                        ig

                    </a>

                </div>

                <!-- BUTTON -->
                <button
                    class="mt-8 w-full py-3 rounded-2xl
                           bg-gradient-to-r from-cyan-400 to-blue-500
                           text-black font-bold
                           hover:scale-105 transition">

                    Contact Agent

                </button>

            </div>

        </div>

        <!-- DUPLICATE CARDS -->
        

    </div>

</section>

<section class="py-20 overflow-hidden">

    <h2 class="text-4xl font-bold text-center mb-12">
        What Clients Say
    </h2>

    <div class="flex gap-6 animate-scroll whitespace-nowrap px-6">

        <!-- TESTIMONIAL -->
        <div class="min-w-[350px]
                    bg-white/5 border border-white/10
                    rounded-[30px] p-8">

            <p class="text-gray-300 leading-relaxed">
                “Very smooth transaction and professional service.”
            </p>

            <div class="flex items-center gap-4 mt-6">

                <img src="https://i.pravatar.cc/100?img=5"
                     class="w-14 h-14 rounded-full">

                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-gray-400 text-sm">Client</p>
                </div>

            </div>

        </div>

        <!-- DUPLICATE MORE -->
         
    </div>

</section>

<div id="contactModal"
     class="hidden fixed inset-0 z-50
            bg-black/70 backdrop-blur-md
            flex items-center justify-center">

    <div class="w-[92%] md:w-[500px]
                bg-[#0a0f1c]
                border border-white/10
                rounded-[30px]
                p-8 relative">

        <!-- CLOSE -->
        <button onclick="closeContactModal()"
                class="absolute top-4 right-4 text-white text-xl">
            ✕
        </button>

        <h2 class="text-3xl font-bold text-cyan-400">
            Contact Agent
        </h2>

        <p class="text-gray-400 mt-2">
            Send inquiry to our professional agent.
        </p>

        <!-- FORM -->
        <div class="mt-8 space-y-4">

            <input type="text"
                   placeholder="Your Name"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <input type="email"
                   placeholder="Your Email"
                   class="w-full p-4 rounded-2xl bg-white/5 border border-white/10">

            <textarea rows="5"
                      placeholder="Message"
                      class="w-full p-4 rounded-2xl bg-white/5 border border-white/10"></textarea>

            <button class="w-full py-4 rounded-2xl
                           bg-gradient-to-r from-cyan-400 to-blue-500
                           text-black font-bold">

                Send Inquiry

            </button>

        </div>

    </div>

</div>

<script>
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

    const updateCounter = () => {

        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 100;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 20);
        } else {
            counter.innerText = target;
        }

    };

    updateCounter();

});
</script>

<script>
function openContactModal() {
    document.getElementById('contactModal').classList.remove('hidden');
}

function closeContactModal() {
    document.getElementById('contactModal').classList.add('hidden');
}
</script>

@endsection