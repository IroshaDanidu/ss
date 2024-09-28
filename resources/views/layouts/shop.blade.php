<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto py-4 px-8 flex justify-between items-center">
            <img src="images/WhatsApp Image 2024-09-28 at 3.47.38 PM.jpeg" alt="Logo" class="w-32" style="margin-left: 50px" >
            <nav style="margin-right: 50px">
                <ul class="flex space-x-4">
                    <li style="font-size: 20px; padding-right: 20px">
                        <a href="/" class="text-gray-800 hover:text-gray-600">Home</a>
                    </li>
                    <li style="font-size: 20px; padding-right: 20px">
                        <a href="/shop" class="text-gray-800 hover:text-gray-600">Products</a>
                    </li>
                    <li style="font-size: 20px; padding-right: 20px">
                        <a href="/cart" class="text-gray-800 hover:text-gray-600">Cart</a>
                    </li>
                    <li style="font-size: 20px; padding-right: 20px">
                        <a href="checkout.html" class="text-gray-800 hover:text-gray-600">Checkout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content -->
    {{$slot}}

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex justify-between items-center px-8">
            <ul class="flex space-x-4">
                <li>
                    <a href="#" class="hover:text-gray-400">Facebook</a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400">Twitter</a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400">Behance</a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400">Linkedin</a>
                </li>
            </ul>
            <p class="text-sm">&copy; 2024 Online Store</p>
        </div>
    </footer>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Your custom JavaScript can go here -->

</body>

</html>
