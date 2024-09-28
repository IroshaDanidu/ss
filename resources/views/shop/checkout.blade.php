<x-shop-layout>

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2 class="text-4xl font-bold">Easy <em class="text-blue-500">Checkout</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row" style="margin-left: 50px; margin-right: 50px">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('save-order') }}" method="post">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-lg">Title:</label>
                                    <select name="title" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <option value="">-- Choose --</option>
                                        <option value="dr">Dr.</option>
                                        <option value="miss">Miss</option>
                                        <option value="mr">Mr.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="other">Other</option>
                                        <option value="prof">Prof.</option>
                                        <option value="rev">Rev.</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="text-lg">Name:</label>
                                    <input type="text" name="name" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="text-lg">Email:</label>
                                    <input type="email" name="email" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label class="text-lg">Phone:</label>
                                    <input type="text" name="phone" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="text-lg">Address 1:</label>
                                    <input type="text" name="address1" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label class="text-lg">Address 2:</label>
                                    <input type="text" name="address2"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="text-lg">City:</label>
                                    <input type="text" name="city" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label class="text-lg">State:</label>
                                    <input type="text" name="state" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="text-lg">Zip:</label>
                                    <input type="text" name="zip" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label class="text-lg">Country:</label>
                                    <input type="text" name="country" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="text-lg">Payment method:</label>
                                    <select name="payment_method" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <option value="">-- Choose --</option>
                                        <option value="bank">Bank account</option>
                                        <option value="cash">Cash</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="text-lg">Captcha:</label>
                                    <input type="text" name="captcha" required
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Pay</button>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                        @php
                            $total = 0;
                        @endphp

                        @foreach ($cartItem as $item)
                            @php
                                $total += $item->product->price * $item->quantity;
                            @endphp
                        @endforeach

                        <li class="list-group-item" style="margin:0 0 -1px">
                            <div class="row">
                                <div class="col-6">
                                    <h4><strong>Total Amount:</strong></h4>
                                </div>

                                <div class="col-6">
                                    <h4><strong>{{ $total }}</strong></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </section>

</x-shop-layout>
