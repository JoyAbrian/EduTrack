<div class="w-screen h-screen bg-gray-50 font-Kumbh justify-center flex flex-col items-center">
    <h2 class="text-center text-4xl font-semibold">Welcome, create your account!</h2>
    <div class="font-Inter shadow-xl bg-white w-1/3 h-fit mt-8 flex flex-col items-center justify-center p-36">
        <span class="text-xl text-center mb-4">It is our great pleasure to have <br> you on board!</span>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="admin_token" placeholder="Enter Admin Token" value="{{ old('admin_token') }}" required class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('admin_token')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
            
            <input type="text" name="school_code" placeholder="Enter School Code" value="{{ old('school_code') }}" required class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('school_code')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror

            <input type="name" name="name" placeholder="Enter Your Name" value="{{ old('name') }}" required class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('name')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror

            <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
            
            <input type="password" name="password" placeholder="Enter Your Password" required class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            <input type="password" name="password_confirmation" placeholder="Confirm Your Password" required class="w-full mt-3 mb-5 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('password')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror

            <button class="w-full bg-blue-500 text-white py-2 rounded-lg">Register</button>
        </form>
        <p class="text-center mt-4">Already have an account? <a href="/login" class="text-blue-500">Login</a></p>
    </div>
</div>