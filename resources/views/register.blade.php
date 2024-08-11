@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="w-screen h-screen font-Kumbh justify-center flex flex-col items-center">
    <h2 class="text-center text-4xl font-semibold">Welcome, create your account!</h2>
    <div class="shadow-xl w-1/3">
        <button class="w-full bg-blue-500 text-white py-2">Register</button>
        <p>Already have an account? <a href="/login" class="text-blue-500">Login</a></p>
    </div>
</div>

@endsection