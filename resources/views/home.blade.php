@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section id="home">
    <div class="container flex-col h-fit w-screen">
        <img src="{{ asset('images/landing/bg.png') }}" alt="home-bg" class="w-screen h-screen object-fill absolute">
        <div class="relative w-screen h-screen flex items-center justify-center">
            <nav class="flex w-screen justify-between items-center py-8 px-14 absolute top-0">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-10 h-10">
                    <a class="font-bold font-Arvo text-white text-xl ml-2">EduTrack</a>
                </div>
                <ul class="flex space-x-28 font-Karla text-lg">
                    <li><a class="text-white hover:text-gray-400">Home</a></li>
                    <li><a class="text-white hover:text-gray-400">Pricing</a></li>
                    <li><a class="text-white hover:text-gray-400">Use Cases</a></li>
                    <li><a class="text-white hover:text-gray-400">Location</a></li>
                    <li><a class="text-white hover:text-gray-400">FAQ</a></li>
                    <li><a class="text-white hover:text-gray-400">Company</a></li>
                </ul>
                <button class="bg-[#0A92DD] text-white font-Karla font-bold text-md px-10 py-3 rounded-full">Login</button>
            </nav>
    
            <div class="flex flex-col items-center justify-center">
                <button class="text-[#D89925] text-xl bg-white bg-opacity-5 rounded-full px-6 py-3 border border-white font-semibold">Get Your Free Consultant Now</button>
                
                <div class="text-white text-6xl text-center font-bold font-Kumbh ">
                    <h2 class="mt-12">Manage your team</h2>
                    <h2 class="mt-6">easily with task man</h2>
                </div>
                <p class="text-white text-xl text-center font-Karla mt-8">EduTrack is a school management solution that offers <br> a personalized portal to each type of user.</p>
                
                <button class="mt-5 bg-[#0A92DD] text-white rounded-full px-8 py-3 text-2xl font-semibold">Get Started</button>
            </div>
    
            <img src="{{ asset('images/landing/project.png') }}" alt="hero" class="w-fit h-fit absolute bottom-0 top-3/4 mt-4">
        </div>
    </div>
</section>

<section id="companies">
    <h2 class="text-2xl text-center font-semibold font-Kumbh">Trusted by companies like</h2>
    <div class="flex justify-center items-center space-x-10 mt-12">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/kemdikbud.png') }}" alt="kemdikbud" class="w-32 h-32">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/google.png') }}" alt="google" class="w-32 h-32">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/zenius.png') }}" alt="zenius" class="w-32 h-32">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/duolingo.png') }}" alt="duolingo" class="w-32 h-32">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/pearson.png') }}" alt="pearson" class="w-32 h-32">
        <img class="grayscale w-14 hover:grayscale-0 hover:w-20 transition-all ease-in-out" src="{{ asset('images/landing/companies/stride.png') }}" alt="stride" class="w-32 h-32">
    </div>
</section>

@endsection