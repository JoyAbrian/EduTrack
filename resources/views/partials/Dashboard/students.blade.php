<div class="flex font-Kumbh items-center justify-between px-20 py-2">
    <h3 class="font-medium text-lg">Students</h3>
    <button class="bg-blue-400 hover:bg-blue-700 text-white font-Kumbh py-2.5 px-6 rounded-lg ml-4">Add Student</button>
</div>

<div class="bg-gray-100 mx-20 mt-6 font-Kumbh h-fit">
    {{-- No Students Found --}}
    <div class="flex flex-col items-center justify-center py-9">
        <img src="{{ asset('images/dashboard/nothing-pic.png') }}" alt="No Students Found" class="w-96">
        <p class="text-black text-2xl font-semibold mt-6">No Students At This Time</p>
        <p class="text-black text-lg mt-1">When you add students, you'll see them here.</p>
    </div>
</div>