<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 2</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 flex flex-col items-center py-4">
            <div class="menu space-y-5">
                <div class="icon text-2xl text-white cursor-pointer">🏠</div>
                <div class="icon text-2xl text-white cursor-pointer">👤</div>
                <div class="icon text-2xl text-white cursor-pointer">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-200 shadow">
                <input type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Search...">
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
            <section class="flex flex-wrap justify-center gap-5 p-5">
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Spaghetti.jpeg" alt="Spaghetti" class="w-40 h-auto rounded-lg mb-2">
                    <p>Spaghetti - Rp.26.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Corndog.jpg" alt="Corndog" class="w-40 h-auto rounded-lg mb-2">
                    <p>Corndog - Rp.15.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/tacos.jpg" alt="Tacos" class="w-40 h-auto rounded-lg mb-2">
                    <p>Taco's - Rp.20.000</p>
                </div>
                <div class="food-item bg-white p-3 rounded-lg shadow hover:scale-105 transition-transform text-center">
                    <img src="asset/Delicious Burger.jpeg" alt="Burger" class="w-40 h-auto rounded-lg mb-2">
                    <p>Burger - Rp.20.000</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
