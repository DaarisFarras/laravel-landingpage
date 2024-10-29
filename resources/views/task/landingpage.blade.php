<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daaris Farras-XI PPLG 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md p-5">
        <nav class="flex justify-between items-center">
            <div class="logo text-xl font-bold">FASHION</div>
            <ul class="flex gap-5">
                <li><a href="#" class="hover:text-yellow-500">Catalogue</a></li>
                <li><a href="#" class="hover:text-yellow-500">Fashion</a></li>
                <li><a href="#" class="hover:text-yellow-500">Favourite</a></li>
                <li><a href="#" class="hover:text-yellow-500">Lifestyle</a></li>
            </ul>
            <button class="bg-black text-white py-2 px-4 rounded">Sign Up</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero flex items-center justify-between p-10 bg-gray-200">
        <div class="hero-content">
            <h1 class="text-5xl font-bold">Let's Explore <span class="text-yellow-400">Unique</span> Clothes.</h1>
            <p class="mt-2 text-lg">Live for influential and innovative fashion!</p>
            <button class="bg-yellow-400 text-black py-3 px-6 mt-5 rounded">Shop Now</button>
        </div>
        <div class="hero-image">
            <img src="hero-image.png" alt="Fashion Image" class="max-w-md">
        </div>
    </section>

    <!-- Brand Section -->
    <section class="brands bg-yellow-400 py-5 text-center">
        <div class="flex justify-center gap-6">
            <img src="hm-logo.png" alt="H&M" class="h-10">
            <img src="obey-logo.png" alt="Obey" class="h-10">
            <img src="shopify-logo.png" alt="Shopify" class="h-10">
            <img src="lacoste-logo.png" alt="Lacoste" class="h-10">
            <img src="levis-logo.png" alt="Levis" class="h-10">
            <img src="amazon-logo.png" alt="Amazon" class="h-10">
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="new-arrivals py-10 text-center">
        <h2 class="text-3xl font-semibold mb-6">New Arrivals</h2>
        <div class="product-grid flex justify-center gap-10">
            <div class="product">
                <img src="hoodies.png" alt="Hoodies" class="max-w-full">
                <h3 class="mt-4 text-xl font-medium">Hoodies & Sweatshirt</h3>
                <p class="text-gray-600">Explore Now!</p>
            </div>
            <div class="product">
                <img src="coats.png" alt="Coats" class="max-w-full">
                <h3 class="mt-4 text-xl font-medium">Coats & Parkas</h3>
                <p class="text-gray-600">Explore Now!</p>
            </div>
            <div class="product">
                <img src="teees.png" alt="Tees" class="max-w-full">
                <h3 class="mt-4 text-xl font-medium">Tees & T-Shirt</h3>
                <p class="text-gray-600">Explore Now!</p>
            </div>
        </div>
    </section>

    <!-- Sale Section -->
    <section class="sale flex items-center justify-between p-10 bg-yellow-400">
        <div class="sale-content">
            <h2 class="text-4xl font-bold">PAYDAY SALE NOW</h2>
            <p class="mt-2">Spend minimal $100 to get a 30% off voucher for your next purchase</p>
            <p class="font-semibold mt-1">1 June - 10 June 2021</p>
            <p class="text-sm">*Terms & Conditions apply</p>
            <button class="bg-black text-white py-3 px-6 mt-5 rounded">Shop Now</button>
        </div>
        <div class="sale-image">
            <img src="sale-image.png" alt="Sale Image" class="max-w-md">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-10">
        <div class="newsletter text-center mb-6">
            <h2 class="text-2xl font-semibold">Join Shopping Community to Get Monthly Promo</h2>
            <p class="mt-2">Type your email down below and be young wild generation</p>
            <form class="mt-4 flex justify-center gap-3">
                <input type="email" placeholder="Add your email here" class="p-2 rounded w-64">
                <button type="submit" class="bg-yellow-400 text-black py-2 px-4 rounded">Send</button>
            </form>
        </div>
        <div class="footer-links flex justify-between">
            <div class="company-info">
                <h3 class="text-xl font-semibold">FASHION</h3>
                <p class="mt-2">Complete your style with awesome clothes from us.</p>
                <div class="social-media flex mt-4 gap-4">
                    <a href="#"><img src="facebook.png" alt="Facebook" class="h-6"></a>
                    <a href="#"><img src="instagram.png" alt="Instagram" class="h-6"></a>
                    <a href="#"><img src="twitter.png" alt="Twitter" class="h-6"></a>
                    <a href="#"><img src="linkedin.png" alt="LinkedIn" class="h-6"></a>
                </div>
            </div>
            <div class="quick-links">
                <h4 class="text-lg font-semibold">Quick Links</h4>
                <ul class="mt-2 space-y-2">
                    <li><a href="#">Share Location</a></li>
                    <li><a href="#">Orders Tracking</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
