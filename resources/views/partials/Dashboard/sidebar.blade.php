<div class="bg-blue-950 h-full w-1/5 sticky top-0 left-0 overflow-y-auto">
    <div class="flex flex-col items-center my-8">
        <img src="{{ asset('images/sidebaricon/anonym.png') }}" alt="picture" class="w-24 h-24 rounded-full object-cover">
        <h1 class="text-white text-center font-semibold font-Kumbh text-xl mt-8">Admin Ruukaze</h1>
    </div>
    <hr class="border border-gray-400 h-0.5 my-5">
    <ul class="px-6">
        <li class="mb-4">
            <a href="/dashboard/">
                <div class="text-white font-Kumbh font-semibold text-lg flex items-center ml-2 px-2 py-3.5 rounded-lg {{ Request::is('dashboard') ? 'bg-blue-500' : 'hover:bg-blue-800' }}">
                    <i class="bi bi-grid ml-2 mr-3"></i> Dashboard
                </div>
            </a>
        </li>
        <li class="mb-4">
            <a href="/dashboard/teacher">
                <div class="text-white font-Kumbh font-semibold text-lg flex items-center ml-2 px-2 py-3.5 rounded-lg  {{ Request::is('dashboard/teacher') ? 'bg-blue-500' : 'hover:bg-blue-800' }}">
                    <i class="bi-person-fill ml-2 mr-3"></i> Teacher
                </div>
            </a>
        </li>
        <li class="mb-4">
            <a href="/dashboard/students">
                <div class="text-white font-Kumbh font-semibold text-lg flex items-center ml-2 px-2 py-3.5 rounded-lg  {{ Request::is('dashboard/students') ? 'bg-blue-500' : 'hover:bg-blue-800' }}">
                    <i class="bi-person-check ml-2 mr-3"></i> Students
                </div>
            </a>
        </li>
    </ul>
</div>