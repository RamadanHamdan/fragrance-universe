<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
     <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Welcome to Fragrance Universe</h1>
        <p class="text-gray-700 mb-4">Explore our curated collections of luxury fragrances, find your perfect scent, and learn more about the world of perfumes.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Product Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="./storage/botol1.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
            <!-- Repeat Product Card for more products -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="./storage/botol2.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Another Product</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">         
                <img src="./storage/botol3.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Third Product</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">         
                <img src="./storage/botol4.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Third Product</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">         
                <img src="./storage/botol5.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Fourth Product</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">         
                <img src="./storage/botol6.png" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h2 class="text-xl font-semibold mb-2">Fifth Product</h2>
                <p class="text-gray-600 mb-4">Brief description of the product.</p>
                <a href="#" class="primary-bg text-white px-4 py-2 rounded-lg hover:bg-secondary transition">View Details</a>
            </div>
        </div>
    </main>
</x-layout>