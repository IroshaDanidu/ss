<x-shop-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Your Cart</h1>
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Success!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left">Product</th>
                        <th class="px-4 py-2 text-left">Quantity</th>
                        <th class="px-4 py-2 text-left">Price</th>
                        <th class="px-4 py-2 text-left">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($Carts as $item)
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-2">{{ $item->product->name }}</td>
                            <td class="px-4 py-2">{{ $item->quantity }}</td>
                            <td class="px-4 py-2">Rs. {{ $item->product->price }}</td>
                            <td class="px-4 py-2">Rs. {{ $item->product->price * $item->quantity }}</td>
                        </tr>
                        @php
                            $total += $item->product->price * $item->quantity;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8 flex justify-between items-center">
            <div class="text-xl font-bold">Total: Rs. {{ $total }}</div>
            <div class="checkout">
                <form action="{{ route('checkout') }}" method="GET">
                    @csrf
                    <input type="hidden" name="total" value="{{ $total }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </div>
</x-shop-layout>
