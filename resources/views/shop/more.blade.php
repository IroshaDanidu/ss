<x-shop-layout>


    <section class="blog-posts grid-system bg-gray-100 py-12">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Success!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="flex justify-center items-center">
            <div>
              <img src="{{ asset('images/' . $products->image) }}" alt="Product Image" class="w-full h-auto">
            </div>
          </div>

          <div class="flex flex-col justify-center">
            <div class="sidebar-item recent-posts bg-white p-6 rounded-lg shadow-md">
              <div class="sidebar-heading">
                <h2 class="text-2xl font-bold mb-4">Info</h2>
              </div>
              <h3 class="text-xl font-semibold text-purple-600">{{$products->price}}</h3>
              <div class="content mt-4">
                <p class="text-gray-700">{{$products->description}}</p>
              </div>
            </div>

            <div class="contact-us mt-8">
              <div class="sidebar-item contact-form bg-white p-6 rounded-lg shadow-md">
                <div class="sidebar-heading">
                  <h2 class="text-2xl font-bold mb-4">Add to Cart</h2>
                </div>
                <div class="content mt-4">
                  <form action="{{ route('cart.add', $products->id) }}" method="POST" class="flex items-center">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1" required class="w-20 px-4 py-2 border border-gray-300 focus:outline-none focus:border-purple-600 rounded-md">
                    <button type="submit" class="ml-4 px-6 py-2 bg-purple-600 text-white font-semibold rounded-md hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Add to Cart</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-shop-layout>
