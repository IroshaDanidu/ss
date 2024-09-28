<x-admin-layout>

    @if ($order)
        <!-- https://gist.github.com/goodreds/5b8a4a2bf11ff67557d38c5e727ea86c -->

        <div class="" style="margin-left: 280px; padding-top: 100px; margin-right: 20px;">
            <div class="rounded-t-lg h-32 overflow-hidden">
                <img class="object-cover object-top w-full" src="{{ asset('img/tomatoes-1561565_1280.jpg') }}"
                    alt='Mountain'>
            </div>
            <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
                <img class="object-cover object-center h-32" src='{{ asset('img/R.jpg') }}'
                    alt='Woman looking front' style="width: 120px">
            </div>
            <div class="text-center mt-2">
                <h2 class="font-semibold">{{ $order->name }}</h2>
                <p class="text-gray-500">{{ $order->phone }}</p>
            </div>
            <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
                <li class="flex flex-col items-center justify-around">
                    <svg class="h-5 w-5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="3 11 22 2 13 21 11 13 3 11" />
                    </svg>
                    <div><strong>Address</strong></div>

                    <div>{{ $order->address }}</div>

                </li>

                <li class="flex flex-col items-center justify-between">
                    <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>

                    <div><strong>City</strong></div>

                    <div>{{ $order->city }}</div>
                </li>
                <li class="flex flex-col items-center justify-around">
                    <svg class="h-5 w-5 text-green-500" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <polyline points="3 9 12 15 21 9 12 3 3 9" />
                        <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <line x1="3" y1="19" x2="9" y2="13" />
                        <line x1="15" y1="13" x2="21" y2="19" />
                    </svg>
                    <div><strong>Email</strong></div>

                    <div>{{ $order->email }}</div>
                </li>
                <li class="flex flex-col items-center justify-around">
                    <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div><strong> Status</strong></div>

                    <div>{{ $order->status == 1 ? 'Delivered' : 'Pending' }}</div>
                </li>
            </ul>

        </div>
        <!-- resources/views/order/show.blade.php -->

        <section class="py-24 relative" style="margin-left: 280px">


            <div class="flex flex-col lg:flex-row lg:items-center justify-between px-6 pb-6 border-b border-gray-200">
                <div class="data">
                    <p class="font-semibold text-base leading-7 text-black">Order Id: <span
                            class="text-indigo-600 font-medium"> {{ $order->id }}</span></p>
                    <p class="font-semibold text-base leading-7 text-black mt-4">Order Payment : <span
                            class="text-gray-400 font-medium"> {{ $order->created_at }}</span></p>
                </div>

            </div>
            <div class="w-full px-3 min-[400px]:px-6">
                @foreach ($order->items as $item)


                <div class="flex flex-col lg:flex-row items-center py-6 border-b border-gray-200 gap-6 w-full">
                    <div class="img-box max-lg:w-full">
                        <img src="{{ asset('uploads/product/' . $item->products->image) }}" alt="Premium Watch image"
                            class="aspect-square w-full lg:max-w-[140px]" style="width: 150px">
                    </div>
                    <div class="flex flex-row items-center w-full ">
                        <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
                            <div class="flex items-center">
                                <div class="">
                                    <h2 class="font-semibold text-xl leading-8 text-black mb-3">
                                        {{ $item->products->name }}</h2>

                                    <div class="flex items-center ">
                                        <p class="font-medium text-base leading-7 text-black ">Qty: {{ $item->qty }}<span
                                                class="text-gray-500">2</span></p>
                                    </div>
                                </div>

                            </div>
                            <div class="grid grid-cols-5">
                                <div class="col-span-5 lg:col-span-1 flex items-center max-lg:mt-3">
                                    <div class="flex gap-3 lg:block">
                                        <p class="font-medium text-sm leading-7 text-black">price</p>
                                        <p class="lg:mt-4 font-medium text-sm leading-7 text-indigo-600">Rs. {{ $item->products->selling_price }}</p>
                                    </div>
                                </div>
                                <div class="col-span-5 lg:col-span-2 flex items-center max-lg:mt-3 ">
                                    <div class="flex gap-3 lg:block">
                                        <p class="font-medium text-sm leading-7 text-black">Status
                                        </p>
                                        <p
                                            class="font-medium text-sm leading-6 whitespace-nowrap py-0.5 px-3 rounded-full lg:mt-3 bg-emerald-50 text-emerald-600" style="color: red">
                                            {{ $order->status == 1 ? 'Delivered' : 'Pending' }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                @endforeach



            </div>
            <div class="w-full border-t border-gray-200 px-6 flex flex-col lg:flex-row items-center justify-between ">

                <p class="font-semibold text-lg text-black py-6">Total Price: <span class="text-indigo-600">
                    Rs. {{ $order->tot }}</span></p>
            </div>
            <form action="{{ url('order-update/' . $order->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <select name="status" id="status" class="border border-gray-300 rounded-md p-2 dark:bg-gray-700 dark:text-white">
                    <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Pending</option>
                    <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Completed</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded-md hover:bg-green-600 transition-colors" style="background-color: green">Update</button>
            </form>
            </div>
            </div>
        </section>
    @endif

</x-admin-layout>
