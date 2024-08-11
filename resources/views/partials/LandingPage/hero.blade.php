<div class="container flex-col h-fit w-screen relative">
    <div class="absolute top-0 left-0 w-screen h-screen">
        <img src="{{ asset('images/landing/bg.png') }}" alt="home-bg" class="w-full h-full object-cover">
    </div>
    
    <nav class="flex w-screen justify-between items-center py-8 px-14 relative z-10">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-10 h-10">
            <a class="font-bold font-Arvo text-white text-xl ml-2">EduTrack</a>
        </div>
        <ul class="flex space-x-28 font-Karla text-lg">
            <li><a href="#home" class="text-white hover:text-gray-400">Home</a></li>
            <li><a href="#companies" class="text-white hover:text-gray-400">Companies</a></li>
            <li><a href="#about" class="text-white hover:text-gray-400">About</a></li>
            <li><a href="#pricing" class="text-white hover:text-gray-400">Pricing</a></li>
        </ul>
        <a href="/login" class="bg-[#0A92DD] text-white font-Karla font-bold text-md px-10 py-3 rounded-full">Login</a>
    </nav>

    <div class="relative w-screen h-fit flex items-center justify-center mt-20">
        <div class="flex flex-col items-center relative top-1/4 justify-center z-10">
            <button class="text-[#D89925] text-xl bg-white bg-opacity-5 rounded-full px-6 py-3 border border-white font-semibold">Get Your Free Consultant Now</button>
            
            <div class="text-white text-6xl text-center font-bold font-Kumbh mt-12">
                <h2>Manage your team</h2>
                <h2 class="mt-6">easily with task man</h2>
            </div>
            <p class="text-white text-xl text-center font-Karla mt-8">EduTrack is a school management solution that offers <br> a personalized portal to each type of user.</p>
            
            <a href="#pricing" class="mt-5 bg-[#0A92DD] text-white rounded-full px-8 py-3 text-2xl font-semibold">Get Started</a>
            <img src="{{ asset('images/landing/project.png') }}" alt="hero" class="w-fit h-fit mt-4">
        </div>
    </div>
</div>