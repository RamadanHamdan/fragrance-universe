<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
      <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Search Section -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto p-8 rounded-xl bg-white search-box">
                <h3 class="text-2xl font-semibold primary-text mb-6">Drop Your Fragrance</h3>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            <!-- Main modal -->
                <div id="crud-modal" aria-hidden="false">
                    <div class="max-w-4xl p-4 w-full max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-200">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-200 border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-black">
                                    Insert New Product
                                </h3>
                                {{-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-black" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button> --}}
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2 sm:col-span-2 left-10">
                                        <label for="name" class="block mb-3 text-sm font-medium text-gray-900 dark:text-black">Perfume Name</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type perfume name" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="top-notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Top Notes</label>
                                        <input type="text" name="top-notes" id="top-notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type top notes" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="middle-notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Middle Notes</label>
                                        <input type="text" name="middle-notes" id="middle-notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type middle notes" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="best-notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Best Notes</label>
                                        <input type="text" name="best-notes" id="best-notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type best notes" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Stock</label>
                                        <input type="number" name="stock" id="stock" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="100" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Category</label>
                                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select category</option>
                                            <option>Extrait de Perfume</option>
                                            <option>Eau de Perfume</option>
                                            <option>Eau de Toilette</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Size</label>
                                        <select id="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select Size</option>
                                            <option>5ml</option>
                                            <option>10ml</option>
                                            <option>50ml</option>
                                            <option>100ml</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                    <form class="max-w-lg mx-auto">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900" for="user_avatar">Upload file</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                                    </form>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Product Description</label>
                                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-white-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Write product description here"></textarea>                    
                                    </div>
                                </div>
                                <button type="submit" class="text-black inline-flex items-center bg-gray-400 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-300 dark:hover:bg-gray-300 dark:focus:ring-gray-300">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    Add new product
                                </button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
</x-layout>