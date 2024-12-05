<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI - Halaman 3</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="grid grid-cols-[70px_auto] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gradient-to-b from-gray-900 to-gray-700 flex flex-col items-center py-4 shadow-lg">
            <div class="space-y-6">
                <div class="text-white text-2xl cursor-pointer hover:text-gray-300 transition">🏠</div>
                <div class="text-white text-2xl cursor-pointer hover:text-gray-300 transition">👤</div>
                <div class="text-white text-2xl cursor-pointer hover:text-gray-300 transition">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gradient-to-r from-gray-200 to-gray-300 shadow-md">
                <input 
                    type="text" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" 
                    placeholder="Search for your favorite food..."
                />
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
           <!-- Food List -->
            <section class="flex flex-wrap justify-center gap-8 p-8 bg-gray-50">
                 @foreach($makanans as $makanan)
                 <div class="text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl hover:scale-105 transition-transform">
                    <img src="{{ asset($makanan->image) }}" alt="{{ $makanan->makanan }}" class="w-36 h-auto rounded-lg mb-4">
                    <p class="text-lg font-bold text-gray-800">{{ $makanan->makanan }}</p>
                    <p class="text-gray-600">Rp.{{ number_format($makanan->harga, 0, ',', '.') }}</p>
                </div>
                @endforeach
            </section>
        </main>
    </div>
</body>
</html>
