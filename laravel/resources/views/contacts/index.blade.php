@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">

    <!-- BG IMAGE -->
    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267"
         class="absolute inset-0 w-full h-full object-cover opacity-30">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-[#0a0f1c]/80"></div>

    <!-- CONTENT -->
    <div class="relative text-center px-6">

        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
            Contact <span class="text-cyan-400">Our Team</span>
        </h1>

        <p class="text-gray-400 mt-5 max-w-2xl mx-auto">
            Let’s help you find the perfect property for your future.
        </p>

    </div>

</section>

<!-- CONTACT INFO -->
<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid md:grid-cols-3 gap-6">

        <!-- CARD -->
        <div class="group bg-white/5 border border-white/10
                    rounded-[30px] p-8
                    hover:border-cyan-400/50
                    hover:-translate-y-2
                    transition duration-500">

            <div class="w-16 h-16 rounded-2xl
                        bg-cyan-400/10
                        flex items-center justify-center
                        text-3xl text-cyan-400">

                📞

            </div>

            <h3 class="text-2xl font-bold mt-6">
                Phone
            </h3>

            <p class="text-gray-400 mt-3">
                +63 912 345 6789
            </p>

        </div>

        <!-- CARD -->
        <div class="group bg-white/5 border border-white/10
                    rounded-[30px] p-8
                    hover:border-cyan-400/50
                    hover:-translate-y-2
                    transition duration-500">

            <div class="w-16 h-16 rounded-2xl
                        bg-cyan-400/10
                        flex items-center justify-center
                        text-3xl text-cyan-400">

                ✉️

            </div>

            <h3 class="text-2xl font-bold mt-6">
                Email
            </h3>

            <p class="text-gray-400 mt-3">
                luxuryrealestate@email.com
            </p>

        </div>

        <!-- CARD -->
        <div class="group bg-white/5 border border-white/10
                    rounded-[30px] p-8
                    hover:border-cyan-400/50
                    hover:-translate-y-2
                    transition duration-500">

            <div class="w-16 h-16 rounded-2xl
                        bg-cyan-400/10
                        flex items-center justify-center
                        text-3xl text-cyan-400">

                📍

            </div>

            <h3 class="text-2xl font-bold mt-6">
                Office
            </h3>

            <p class="text-gray-400 mt-3">
                Dasmariñas, Cavite, Philippines
            </p>

        </div>

    </div>

</section>

<!-- CONTACT FORM + MAP -->
<section class="max-w-7xl mx-auto px-6 pb-24">

    <div class="grid md:grid-cols-2 gap-10">

        <!-- FORM -->
        <div class="bg-white/5 border border-white/10
                    rounded-[35px] p-8">

            <h2 class="text-3xl font-bold text-cyan-400">
                Send Inquiry
            </h2>

            <p class="text-gray-400 mt-3">
                Fill out the form and our team will contact you shortly.
            </p>

            <div class="space-y-5 mt-8">

                <input type="text"
                       placeholder="Full Name"
                       class="w-full p-4 rounded-2xl
                              bg-white/5 border border-white/10
                              focus:border-cyan-400 outline-none">

                <input type="email"
                       placeholder="Email Address"
                       class="w-full p-4 rounded-2xl
                              bg-white/5 border border-white/10
                              focus:border-cyan-400 outline-none">

                <input type="text"
                       placeholder="Phone Number"
                       class="w-full p-4 rounded-2xl
                              bg-white/5 border border-white/10
                              focus:border-cyan-400 outline-none">

                <select
                    class="w-full p-4 rounded-2xl
                           bg-white/5 border border-white/10
                           focus:border-cyan-400 outline-none">

                    <option>Property Interest</option>
                    <option>Luxury House</option>
                    <option>Condominium</option>
                    <option>Commercial Property</option>

                </select>

                <textarea rows="6"
                          placeholder="Message"
                          class="w-full p-4 rounded-2xl
                                 bg-white/5 border border-white/10
                                 focus:border-cyan-400 outline-none"></textarea>

                <button
                    class="w-full py-4 rounded-2xl
                           bg-gradient-to-r
                           from-cyan-400
                           to-blue-500
                           text-black font-bold
                           hover:scale-105 transition">

                    Send Inquiry

                </button>

            </div>

        </div>

        <!-- MAP -->
        <div class="relative rounded-[35px] overflow-hidden border border-white/10">

            <iframe
                src="https://www.google.com/maps?q=Dasmarinas+Cavite&output=embed"
                class="w-full h-full min-h-[600px] grayscale contrast-125 brightness-75">
            </iframe>

            <!-- FLOATING CARD -->
            <div class="absolute bottom-6 left-6
                        bg-[#0a0f1c]/90 backdrop-blur-md
                        border border-white/10
                        rounded-2xl p-5">

                <h3 class="font-bold text-cyan-400">
                    Main Office
                </h3>

                <p class="text-gray-400 text-sm mt-2">
                    Open Monday - Saturday
                </p>

                <p class="text-gray-400 text-sm">
                    9:00 AM - 6:00 PM
                </p>

            </div>

        </div>

    </div>

</section>

<!-- FAQ -->
<section class="max-w-5xl mx-auto px-6 pb-24">

    <h2 class="text-4xl font-bold text-center mb-12">
        Frequently Asked Questions
    </h2>

    <div class="space-y-4">

        <!-- FAQ ITEM -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6">

            <button onclick="toggleFaq(this)"
                    class="w-full flex justify-between items-center text-left">

                <span class="font-bold">
                    How do I schedule a property viewing?
                </span>

                <span class="text-cyan-400 text-2xl">
                    +
                </span>

            </button>

            <div class="faq-content hidden mt-4 text-gray-400">
                You can contact our agents directly through the inquiry form or phone number.
            </div>

        </div>

        <!-- FAQ ITEM -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6">

            <button onclick="toggleFaq(this)"
                    class="w-full flex justify-between items-center text-left">

                <span class="font-bold">
                    Do you accept bank financing?
                </span>

                <span class="text-cyan-400 text-2xl">
                    +
                </span>

            </button>

            <div class="faq-content hidden mt-4 text-gray-400">
                Yes, we assist clients with bank financing and loan approvals.
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="max-w-7xl mx-auto px-6 pb-24">

    <div class="relative overflow-hidden rounded-[40px]
                border border-cyan-400/20
                bg-gradient-to-r
                from-cyan-400/10
                to-blue-500/10
                p-12 text-center">

        <h2 class="text-5xl font-bold leading-tight">
            Ready To Find Your <br>
            Dream Property?
        </h2>

        <p class="text-gray-400 mt-5 max-w-2xl mx-auto">
            Our expert real estate team is ready to assist you.
        </p>

        <button
            class="mt-8 px-10 py-4 rounded-2xl
                   bg-gradient-to-r from-cyan-400 to-blue-500
                   text-black font-bold
                   hover:scale-105 transition">

            Contact Us Now

        </button>

    </div>

</section>

<!-- FAQ JS -->
<script>
function toggleFaq(button) {

    const content = button.parentElement.querySelector('.faq-content');

    content.classList.toggle('hidden');

}
</script>

@endsection