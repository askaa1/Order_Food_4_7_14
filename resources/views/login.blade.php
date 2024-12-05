<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- File JavaScript -->
    <script defer src="{{ asset('js/filament/login.js') }}"></script>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-500 h-screen flex flex-col justify-center items-center">
    <h2 class="text-white text-2xl font-bold mb-5 tracking-wider">Login</h2>
    <form id="loginForm" action="{{ route('login') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-11/12 max-w-md">
        @csrf
        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required autocomplete="username"
                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required autocomplete="current-password"
                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
        </div>
        @if ($errors->has('login'))
            <div class="text-red-600 text-sm mb-4">
                {{ $errors->first('login') }}
            </div>
        @endif
        <button type="submit" 
            class="w-full py-3 bg-purple-600 text-white rounded hover:bg-blue-500 transition-transform duration-200 hover:-translate-y-1 active:translate-y-0">
            LOGIN
        </button>
    </form>
</body>
</html>
