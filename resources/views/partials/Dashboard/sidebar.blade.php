<div class="bg-blue-950 h-screen w-1/5">
    <div class="flex flex-col items-center my-8">
        <img src="{{ asset('images/sidebaricon/anonym.png') }}" alt="picture" class="w-24 h-24 rounded-full object-cover">
        <h1 class="text-white text-center font-semibold font-Kumbh text-xl mt-8">Admin Ruukaze</h1>
    </div>
    <hr class="border border-gray-400 h-0.5 my-5">
    <ul class="px-6">
        <li class="mb-4">
            <div class="text-white font-Kumbh font-semibold text-lg flex p-2 rounded {{ Request::is('dashboard') ? 'bg-blue-500' : 'hover:bg-blue-800' }}">
                <a href="/dashboard/" class="items-center">
                    <i class="bi bi-grid mr-3"></i> Dashboard
                </a>
            </div>
        </li>
        <li class="mb-4">
            <div class="text-white font-Kumbh font-semibold text-lg flex p-2 hover:bg-blue-800 rounded {{ Request::is('dashboard/teacher') ? 'bg-blue-800' : '' }}">
                <a href="/dashboard/teacher" class="items-center">
                    <i class="bi-person-fill mr-3"></i> Teacher
                </a>
            </div>
        </li>
        <li class="mb-4">
            <div class="text-white font-Kumbh font-semibold text-lg flex p-2 hover:bg-blue-800 rounded {{ Request::is('dashboard/students') ? 'bg-blue-800' : '' }}">
                <a href="/dashboard/students" class="items-center">
                    <i class="bi-person-check mr-3"></i> Students
                </a>
            </div>
        </li>
    </ul>
</div>