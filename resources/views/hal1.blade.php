<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Ordering UI</title>
</head>
<body class="m-0 p-0 font-sans bg-gray-200">
    <div class="grid grid-cols-[70px_auto_300px] h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 flex flex-col items-center py-2">
            <div class="menu space-y-5">
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">🏠</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">👤</div>
                <div class="icon text-white text-2xl cursor-pointer hover:text-gray-300 transition">⭐</div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col bg-white">
            <!-- Header -->
            <header class="p-5 bg-gray-100 shadow">
                <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Search...">
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
            <section class="flex flex-wrap justify-center gap-8 p-8 bg-gray-50">
    @foreach($makanans as $makanan)
    <div class="food-item text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl hover:scale-105 transition-transform" 
        data-food="{{ $makanan->makanan }}" 
        data-price="{{ $makanan->harga }}">
        <img src="{{ asset($makanan->image) }}" alt="{{ $makanan->makanan }}" class="w-36 h-auto rounded-lg mb-4">
        <p class="text-lg font-bold text-gray-800">{{ $makanan->makanan }}</p>
        <p class="text-gray-600">Rp.{{ number_format($makanan->harga, 0, ',', '.') }}</p>
        <button class="add-to-order mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition">Add to Order</button>
    </div>
    @endforeach
</section>

        </main>
        <!-- Orders -->
        <aside class="bg-white p-5 shadow flex flex-col">
            <h3 class="mb-3 text-lg font-semibold">My Orders</h3>

            <!-- Daftar Pesanan -->
            <div id="orderList" class="mb-5">
                <p class="text-gray-500">No items in your order.</p>
            </div>

            <!-- Total Harga -->
            <div class="total-price bg-gray-50 p-3 border border-gray-300 rounded mb-5">
                <p class="font-semibold">Total: <span id="totalPrice">Rp.0</span></p>
            </div>

            <!-- Alamat Pengiriman -->
            <div class="delivery-info bg-gray-50 p-3 border border-gray-300 rounded mb-5">
                <label for="deliveryAddress" class="block text-sm text-gray-700 font-semibold">Delivery Address</label>
                <input type="text" id="deliveryAddress" placeholder="Enter your address here" class="p-2 mb-3 border border-gray-300 rounded w-full">
            </div>

            <!-- Tombol Save Address -->
            <button id="saveAddressButton" class="py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition w-full">Save Address</button>

            <!-- Tombol Check Out -->
            <button id="checkoutButton" class="py-2 bg-gray-800 text-white rounded hover:bg-gray-600 transition mt-3 w-full" disabled>Check Out</button>
        </aside>
    </div>

    <script>
        // Manage the order list
        let totalPrice = 0;
        let orderItems = [];

        const addButtons = document.querySelectorAll('.add-to-order');
        addButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const foodName = e.target.closest('.food-item').dataset.food;
                const price = parseInt(e.target.closest('.food-item').dataset.price);

                orderItems.push({ name: foodName, price });
                totalPrice += price;

                updateOrderList();
                updateTotalPrice();
                enableCheckoutButton();
            });
        });

        // Update order list UI
        function updateOrderList() {
            const orderListElement = document.getElementById('orderList');
            if (orderItems.length > 0) {
                orderListElement.innerHTML = orderItems.map(item => `<p>${item.name} - Rp.${item.price}</p>`).join('');
            } else {
                orderListElement.innerHTML = '<p class="text-gray-500">No items in your order.</p>';
            }
        }

        // Update total price
        function updateTotalPrice() {
            document.getElementById('totalPrice').innerText = `Rp.${totalPrice}`;
        }

        // Enable checkout button if there are items
        function enableCheckoutButton() {
            const checkoutButton = document.getElementById('checkoutButton');
            checkoutButton.disabled = orderItems.length === 0;
        }

        // Save address
        document.getElementById('saveAddressButton').addEventListener('click', () => {
            const address = document.getElementById('deliveryAddress').value.trim();
            if (address) {
                alert("Address saved: " + address);
            } else {
                alert("Please enter a valid address.");
            }
        });

        // Checkout functionality
        document.getElementById('checkoutButton').addEventListener('click', () => {
            // Empty the order list after checkout
            orderItems = [];
            totalPrice = 0;

            // Update UI
            updateOrderList();
            updateTotalPrice();
            enableCheckoutButton();

            alert('Order successfully checked out!');
        });
    </script>
</body>
</html>
