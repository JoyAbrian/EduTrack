<div class="w-full flex justify-end items-center bg-gray-100 py-8 px-24">
    <i class="bi bi-bell text-2xl mr-12 cursor-pointer"></i>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="bg-blue-400 hover:bg-blue-700 text-white font-Kumbh py-2.5 px-10 rounded-lg ml-4">Logout</button>
    </form>
</div>