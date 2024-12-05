<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 2</title>
</head>
<body class="m-0 p-0 font-sans bg-gray-100">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gradient-to-b from-gray-800 to-gray-900 flex flex-col items-center py-4 shadow-lg">
            <div class="menu space-y-6">
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">🏠</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">👤</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition duration-200">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gradient-to-r from-gray-200 to-gray-300 shadow-md">
                <input type="text" class="w-full p-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" placeholder="Search...">
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
            <section class="flex flex-wrap justify-center gap-8 p-8 bg-gray-100">
                <div class="food-item bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-transform text-center">
                    <img src="asset/kakap.jpg" alt="kakap" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold">Kakap</p>
                    <p class="text-gray-500">Rp.26.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-transform text-center">
                    <img src="asset/sate.jpg" alt="sate" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold">Sate</p>
                    <p class="text-gray-500">Rp.25.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-transform text-center">
                    <img src="asset/sushi.jpg" alt="sushi" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold">Sushi</p>
                    <p class="text-gray-500">Rp.20.000</p>
                </div>
                <div class="food-item bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-transform text-center">
                    <img src="asset/Spaghetti.jpeg" alt="spaghetti" class="w-40 h-auto rounded-lg mb-4 shadow">
                    <p class="text-lg font-bold">Spaghetti</p>
                    <p class="text-gray-500">Rp.20.000</p>
                </div>
            </section>
        </main>
    </div>
    <script src="java.js"></script>
</body>
</html>
