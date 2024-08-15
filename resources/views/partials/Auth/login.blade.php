<div class="w-screen h-screen bg-gray-50 font-Kumbh justify-center flex flex-col items-center">
    <h2 class="text-center text-4xl font-semibold">Welcome, log into your account!</h2>
    <div class="font-Inter shadow-xl bg-white w-1/3 h-1/2 mt-8 flex flex-col items-center justify-center p-36">
        <span class="text-xl text-center mb-4">It is our great pleasure to have <br> you on board!</span>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autofocus class="w-full mt-3 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            <input type="password" name="password" placeholder="Enter Your Password" required class="w-full mt-3 mb-5 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-blue-500 border rounded-md px-3">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <button class="w-full bg-blue-500 text-white py-2 rounded-lg">Login</button>
        </form>
        <p class="text-center mt-4">Don't have an account? <a href="/register" class="text-blue-500">Register</a></p>
</div>