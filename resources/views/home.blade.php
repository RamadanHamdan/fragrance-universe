<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Search Section -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto p-8 rounded-xl bg-white search-box">
                <h3 class="text-2xl font-semibold primary-text mb-6">Find Your Fragrance</h3>
                
                <!-- Main Search -->
                <div class="relative mb-6">
                    <input type="text" placeholder="Search by brand, notes, or description..." 
                        class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <button class="absolute right-2 top-2 primary-bg text-white px-6 py-2 rounded-lg">
                        Search
                    </button>
                </div>
                
                <!-- Advanced Filters -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-700 mb-3">Filter by:</h4>
                    <div class="flex flex-wrap gap-3">
                        <select class="flex-1 min-w-[200px] p-3 border border-gray-300 rounded-lg">
                            <option value="">Top Notes</option>
                            <option>Citrus</option>
                            <option>Fruity</option>
                            <option>Floral</option>
                            <option>Spicy</option>
                        </select>
                        <select class="flex-1 min-w-[200px] p-3 border border-gray-300 rounded-lg">
                            <option value="">Middle Notes</option>
                            <option>Woody</option>
                            <option>Aromatic</option>
                            <option>Herbal</option>
                            <option>Marine</option>
                        </select>
                        <select class="flex-1 min-w-[200px] p-3 border border-gray-300 rounded-lg">
                            <option value="">Base Notes</option>
                            <option>Musk</option>
                            <option>Vanilla</option>
                            <option>Amber</option>
                            <option>Patchouli</option>
                        </select>
                    </div>
                </div>
                
                <!-- Weather Filter -->
                <div>
                    <h4 class="font-medium text-gray-700 mb-3">Best for weather:</h4>
                    <div class="flex space-x-4 overflow-x-auto pb-2">
                        <button class="weather-filter-btn bg-blue-100 text-blue-800 px-4 py-2 rounded-lg flex flex-col items-center">
                            <img src="https://placehold.co/30x30" alt="Sun icon for summer weather filter" class="mb-1">
                            <span>Summer</span>
                        </button>
                        <button class="weather-filter-btn bg-gray-100 text-gray-800 px-4 py-2 rounded-lg flex flex-col items-center">
                            <img src="https://placehold.co/30x30" alt="Snowflake icon for winter weather filter" class="mb-1">
                            <span>Winter</span>
                        </button>
                        <button class="weather-filter-btn bg-green-100 text-green-800 px-4 py-2 rounded-lg flex flex-col items-center">
                            <img src="https://placehold.co/30x30" alt="Leaf icon for spring weather filter" class="mb-1">
                            <span>Spring</span>
                        </button>
                        <button class="weather-filter-btn bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg flex flex-col items-center">
                            <img src="https://placehold.co/30x30" alt="Leaf falling icon for autumn weather filter" class="mb-1">
                            <span>Autumn</span>
                        </button>
                        <button class="weather-filter-btn bg-purple-100 text-purple-800 px-4 py-2 rounded-lg flex flex-col items-center active">
                            <img src="https://placehold.co/30x30" alt="Rain cloud icon for rainy weather filter" class="mb-1">
                            <span>Rainy</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Results Section -->
        <section>
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-2xl font-semibold primary-text">Featured Fragrances</h3>
                <div class="text-sm">
                    <span class="mr-2">Sort by:</span>
                    <select class="border border-gray-300 rounded-lg px-3 py-1">
                        <option>Most Popular</option>
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>
            
            <!-- Perfume Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Perfume Card 1 -->
                <div class="perfume-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x400" alt="Chanel No. 5 perfume bottle with minimalist design against neutral background" class="w-full h-64 object-contain">
                        <div class="absolute top-2 right-2 flex space-x-2">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">Bestseller</span>
                            <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded">New</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg">Chanel No. 5</h4>
                                <p class="text-gray-600 text-sm">Eau de Parfum</p>
                            </div>
                            <span class="font-bold text-lg primary-text">$120</span>
                        </div>
                        <div class="flex flex-wrap gap-1 my-3">
                            <span class="notes-badge bg-pink-100 text-pink-800">Floral</span>
                            <span class="notes-badge bg-amber-100 text-amber-800">Aldehydic</span>
                            <span class="notes-badge bg-yellow-100 text-yellow-800">Vanilla</span>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button class="secondary-bg text-primary px-4 py-2 rounded-lg font-medium">Details</button>
                            <button class="primary-bg text-white px-4 py-2 rounded-lg font-medium">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Perfume Card 2 -->
                <div class="perfume-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x400" alt="Dior Sauvage perfume with sleek dark bottle and metallic cap" class="w-full h-64 object-contain">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg">Dior Sauvage</h4>
                                <p class="text-gray-600 text-sm">Eau de Toilette</p>
                            </div>
                            <span class="font-bold text-lg primary-text">$95</span>
                        </div>
                        <div class="flex flex-wrap gap-1 my-3">
                            <span class="notes-badge bg-blue-100 text-blue-800">Fresh</span>
                            <span class="notes-badge bg-green-100 text-green-800">Aromatic</span>
                            <span class="notes-badge bg-gray-100 text-gray-800">Ambergris</span>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button class="secondary-bg text-primary px-4 py-2 rounded-lg font-medium">Details</button>
                            <button class="primary-bg text-white px-4 py-2 rounded-lg font-medium">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Perfume Card 3 -->
                <div class="perfume-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x400" alt="Jo Malone Wood Sage & Sea Salt perfume with transparent bottle and cream label" class="w-full h-64 object-contain">
                        <div class="absolute top-2 right-2">
                            <span class="bg-purple-500 text-white text-xs px-2 py-1 rounded">Limited</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg">Wood Sage & Sea Salt</h4>
                                <p class="text-gray-600 text-sm">Cologne</p>
                            </div>
                            <span class="font-bold text-lg primary-text">$140</span>
                        </div>
                        <div class="flex flex-wrap gap-1 my-3">
                            <span class="notes-badge bg-green-100 text-green-800">Woody</span>
                            <span class="notes-badge bg-blue-100 text-blue-800">Marine</span>
                            <span class="notes-badge bg-gray-100 text-gray-800">Mineral</span>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button class="secondary-bg text-primary px-4 py-2 rounded-lg font-medium">Details</button>
                            <button class="primary-bg text-white px-4 py-2 rounded-lg font-medium">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Perfume Card 4 -->
                <div class="perfume-card bg-white rounded-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://placehold.co/400x400" alt="Tom Ford Black Orchid perfume with elegant black bottle and gold accents" class="w-full h-64 object-contain">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg">Black Orchid</h4>
                                <p class="text-gray-600 text-sm">Eau de Parfum</p>
                            </div>
                            <span class="font-bold text-lg primary-text">$150</span>
                        </div>
                        <div class="flex flex-wrap gap-1 my-3">
                            <span class="notes-badge bg-purple-100 text-purple-800">Floral</span>
                            <span class="notes-badge bg-yellow-100 text-yellow-800">Spicy</span>
                            <span class="notes-badge bg-black text-white">Dark</span>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button class="secondary-bg text-primary px-4 py-2 rounded-lg font-medium">Details</button>
                            <button class="primary-bg text-white px-4 py-2 rounded-lg font-medium">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Show more button for demonstration -->
                <div class="col-span-full text-center mt-8">
                    <button class="primary-bg text-white px-6 py-3 rounded-lg font-medium">
                        Load More Fragrances
                    </button>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Newsletter -->
    <section class="secondary-bg py-12 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold primary-text mb-2">Join Our Fragrance Community</h3>
            <p class="text-gray-700 mb-6 max-w-2xl mx-auto">Get the latest arrivals, exclusive offers, and fragrance tips delivered to your inbox</p>
            <div class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-1 p-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                <button class="primary-bg text-white px-6 py-3 rounded-r-lg font-medium">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
</body>
</html>
</x-layout>