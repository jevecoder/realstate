@extends('layouts.admin')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">

        <h1 class="text-3xl font-bold text-cyan-400">
            Property Inquiries
        </h1>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto bg-white/5 border border-white/10 rounded-2xl">

        <table class="w-full text-sm whitespace-nowrap">

            <thead class="bg-white/10 text-gray-300">

                <tr>
                    <th class="p-4">Name</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Phone</th>
                    <th class="p-4">Property</th>
                    <th class="p-4">Message</th>
                    <th class="p-4">Date</th>
                    <th class="p-4 text-center">Actions</th>
                </tr>

            </thead>

            <tbody>

                @foreach($inquiries as $inquiry)

                <tr class="border-t border-white/10 hover:bg-white/5 transition">

                    <td class="p-4 font-bold">
                        {{ $inquiry['name'] }}
                    </td>

                    <td class="p-4 text-gray-400">
                        {{ $inquiry['email'] }}
                    </td>

                    <td class="p-4 text-gray-400">
                        {{ $inquiry['phone'] }}
                    </td>

                    <td class="p-4 text-cyan-400">
                        {{ $inquiry['property'] }}
                    </td>

                    <td class="p-4 text-gray-400 max-w-[250px] truncate">
                        {{ $inquiry['message'] }}
                    </td>

                    <td class="p-4 text-gray-500">
                        {{ $inquiry['date'] }}
                    </td>

                    <td class="p-4 text-center space-x-2">

                        <button button onclick="openInquiryModal(
    'Juan Dela Cruz',
    'juan@email.com',
    '09123456789',
    'Modern House Dasma',
    'Dasmariñas',
    'Interested po ako sa property. Available pa po ba?',
    '2026-05-25'
)" class="px-3 py-1 bg-blue-500 rounded-lg hover:scale-105 transition">
                            View
                        </button>

                        <button onclick="openReplyModal()" class="px-3 py-1 bg-green-500 rounded-lg hover:scale-105 transition">
                            Reply
                        </button>

                        <button onclick="confirm('Delete inquiry?')"
                                class="px-3 py-1 bg-red-500 rounded-lg hover:scale-105 transition">
                            Delete
                        </button>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

<div id="inquiryModal"
     class="hidden fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center">

    <div class="w-[92%] md:w-[600px] bg-[#0a0f1c] border border-white/10 rounded-[30px] p-8 relative">

        <!-- CLOSE -->
        <button onclick="closeInquiryModal()"
                class="absolute top-4 right-5 text-white text-xl">
            ✕
        </button>

        <h2 class="text-2xl font-bold text-cyan-400">
            Inquiry Details
        </h2>

        <p class="text-gray-400 mt-1">
            Customer message & property interest
        </p>

        <!-- CONTENT -->
        <div class="mt-6 space-y-4 text-sm">

            <!-- CUSTOMER -->
            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Name</p>
                <p id="inq_name" class="font-bold"></p>
            </div>

            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Email</p>
                <p id="inq_email"></p>
            </div>

            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Phone</p>
                <p id="inq_phone"></p>
            </div>

            <!-- PROPERTY -->
            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Property</p>
                <p id="inq_property" class="text-cyan-400 font-bold"></p>
            </div>

            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Location</p>
                <p id="inq_location"></p>
            </div>

            <!-- MESSAGE -->
            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                <p class="text-gray-400">Message</p>
                <p id="inq_message" class="leading-relaxed"></p>
            </div>

            <!-- DATE -->
            <div class="text-gray-500 text-xs">
                Sent: <span id="inq_date"></span>
            </div>

            <!-- ACTIONS -->
            <div class="flex gap-3 pt-4">

                <button onclick="openReplyModal()" class="flex-1 py-3 bg-green-500 text-black font-bold rounded-xl hover:scale-105 transition">
                    Reply
                </button>

                <button class="flex-1 py-3 bg-red-500 text-white font-bold rounded-xl hover:scale-105 transition">
                    Delete
                </button>

            </div>

        </div>

    </div>
</div>


<div id="replyModal"
     class="hidden fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center">

    <div class="w-[92%] md:w-[500px] bg-[#0a0f1c] border border-white/10 rounded-[30px] p-8 relative">

        <!-- CLOSE -->
        <button onclick="closeReplyModal()"
                class="absolute top-4 right-5 text-white text-xl">
            ✕
        </button>

        <h2 class="text-2xl font-bold text-cyan-400">
            Reply to Inquiry
        </h2>

        <p class="text-gray-400 mt-1">
            Send message to customer
        </p>

        <!-- EMAIL INFO -->
        <div class="mt-5 bg-white/5 p-3 rounded-xl border border-white/10">
            <p class="text-gray-400 text-sm">Sending to:</p>
            <p id="reply_email" class="text-cyan-400 font-bold"></p>
        </div>

        <!-- MESSAGE -->
        <div class="mt-5">

            <label class="text-sm text-gray-400">Message</label>

            <textarea id="reply_message"
                      rows="5"
                      placeholder="Type your reply here..."
                      class="w-full mt-2 p-4 rounded-2xl bg-white/5 border border-white/10 focus:border-cyan-400 outline-none"></textarea>

        </div>

        <!-- SEND -->
        <button
            class="w-full mt-6 py-3 bg-cyan-400 text-black font-bold rounded-xl hover:scale-105 transition">

            Send Reply

        </button>

    </div>
</div>

<script>

function openReplyModal() {

    document.getElementById('replyModal').classList.remove('hidden');

    // kunin email mula inquiry modal
    let email = document.getElementById('inq_email').innerText;

    document.getElementById('reply_email').innerText = email;

}

function closeReplyModal() {
    document.getElementById('replyModal').classList.add('hidden');
}

</script>

<script>

function openInquiryModal(name, email, phone, property, location, message, date) {

    document.getElementById('inquiryModal').classList.remove('hidden');

    document.getElementById('inq_name').innerText = name;
    document.getElementById('inq_email').innerText = email;
    document.getElementById('inq_phone').innerText = phone;
    document.getElementById('inq_property').innerText = property;
    document.getElementById('inq_location').innerText = location;
    document.getElementById('inq_message').innerText = message;
    document.getElementById('inq_date').innerText = date;

}

function closeInquiryModal() {
    document.getElementById('inquiryModal').classList.add('hidden');
}

</script>

@endsection