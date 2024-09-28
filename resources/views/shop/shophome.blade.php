<x-shop-layout>

    <section class="bg-gray-100 py-12" style="margin-left: 80px">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" style="margin-right: 80px">
                @foreach ($products as $product)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-64 object-cover object-center" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                            <span class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 rounded-br shadow-md">Rs. {{ $product->price }}</span>
                        </div>
                        <div class="p-6 bg-white">
                            <a href="{{ url('more/' . $product->id) }}" class="text-xl font-semibold text-gray-900 mb-3 hover:text-blue-500 transition duration-300 ease-in-out">{{ $product->name }}</a>
                            <p class="text-gray-700 leading-relaxed mb-3">{{ $product->description }}</p>
                            <!-- You can add more content here if needed -->
                           <a href="{{ url('more/' . $product->id) }}">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-flex items-center transition duration-300 ease-in-out">
                                <span>View</span>
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a2 2 0 100-4 2 2 0 000 4zM5 10a2 2 0 012-2h10a2 2 0 110 4H7a2 2 0 01-2-2zm0-4a6 6 0 1112 0 6 6 0 01-12 0zm6-4a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                                </svg>
                            </button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-shop-layout>
