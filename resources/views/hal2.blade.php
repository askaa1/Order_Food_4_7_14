<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 2</title>
    <script defer src="{{ asset('java.js') }}"></script>
</head>
<body class="m-0 p-0 font-sans bg-gray-100">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gradient-to-b from-gray-800 to-gray-700 flex flex-col items-center py-2 shadow-lg">
            <div class="menu space-y-6">
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">🏠</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">👤</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-200 shadow-md">
                <input type="text" 
                       class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" 
                       placeholder="Search for your favorite food...">
            </header>

            <!-- Banner -->
<section class="relative flex justify-center items-center p-5">
    <img src="{{ asset('asset/burger.jpeg') }}" alt="Burger Promo" class="w-full max-w-md rounded-lg">
</section>


            <!-- Tabs -->

            <nav class="flex justify-center bg-gray-200 py-3">
    <a id="tabCheckout" href="{{ route('hal1') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Checkout</a>
    <a id="tabNearby" href="{{ route('hal2') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Nearby</a>
    <a id="tabPromotion" href="{{ route('hal3') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Promotion</a>
    <a id="tabNewcomers" href="{{ route('hal4') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Newcomers</a>
    <a id="tabBestSeller" href="{{ route('hal5') }}" class="px-5 py-2 mx-2 rounded hover:bg-gray-300">Best Seller</a>
</nav>

            <!-- Food List -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-6 bg-gray-50">
                <div class="food-item bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-transform text-center">
                    <img src="{{ asset('asset/Corndog.jpg') }}" alt="Foto makanan Corndog" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold text-gray-800">Corndog</p>
                    <p class="text-gray-600">Rp.16.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-transform text-center">
                    <img src="{{ asset('asset/ayam.jpg') }}" alt="Foto ayam goreng" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold text-gray-800">Ayam goreng</p>
                    <p class="text-gray-600">Rp.15.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-transform text-center">
                    <img src="{{ asset('asset/iga.jpg') }}" alt="Foto makanan Iga" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold text-gray-800">Iga</p>
                    <p class="text-gray-600">Rp.20.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-transform text-center">
                    <img src="{{ asset('asset/steak.jpg') }}" alt="Foto makanan Steak" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold text-gray-800">Steak</p>
                    <p class="text-gray-600">Rp.40.000</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
