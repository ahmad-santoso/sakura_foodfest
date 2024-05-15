<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow fixed w-full z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-800">Restaurant Sakura-FoodFest</a>
            <nav class="hidden md:flex space-x-4 items-center">
                <a href="#home" class="text-gray-800 hover:text-gray-600">Home</a>
                <a href="#menu" class="text-gray-800 hover:text-gray-600">Menu</a>
                <a href="#about" class="text-gray-800 hover:text-gray-600">About</a>
                <a href="#contact" class="text-gray-800 hover:text-gray-600">Contact</a>
                <a href="/login" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</a>
                <a href="/register" class="border border-blue-500 text-blue-500 py-2 px-4 rounded hover:bg-blue-500 hover:text-white">Register</a>
            </nav>
            <button class="md:hidden text-gray-800 focus:outline-none" id="menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="#home" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a>
            <a href="#menu" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Menu</a>
            <a href="#about" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">About</a>
            <a href="#contact" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Contact</a>
            <a href="/login" class="block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login</a>
            <a href="/register" class="block px-4 py-2 mt-2 border border-blue-500 text-blue-500 rounded hover:bg-blue-500 hover:text-white">Register</a>
        </div>
    </header>
    
    <section id="home" class="relative bg-cover bg-center h-screen pt-16" style="background-image: url('{{ asset('assets/imagelogin.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto h-full flex items-center justify-center relative">
            <div class="text-center">
                <h1 class="text-white text-5xl font-bold">Welcome to Our Restaurant</h1>
                <p class="text-white mt-4">Experience the best dining with us.</p>
                <a href="#" class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Explore Menu</a>
            </div>
        </div>
    </section>
    
    <section id="menu" class="container mx-auto px-6 py-10">
        <h2 class="text-3xl font-bold text-center">Menu</h2>
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (1).jpg') }}" alt="Dish 1" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Maguro Sashimi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Enjoy our delicious Maguro Sashimi, fresh tuna chunks served perfectly. This high-quality Tuna has a creamy texture and rich flavor, making it a favorite choice for sashimi fans.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (2).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Hamachi Sashimi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Hamachi Sashimi, or saury, offers a rich flavor and chewy texture. These thick cuts of fish meat provide a satisfying dining experience with authentic Marine flavors.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (3).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Kimchi Ramen</h3>
                    <p class="mt-2 text-gray-600 text-justify">Our Kimchi Ramen brings an interesting fusion flavor with spicy and sour broth from kimchi. Served with chewy noodles, chashu, soft-boiled soft-boiled eggs, and the addition of fresh kimchi, this ramen offers a dynamic and refreshing taste sensation.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (4).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Spicy Ramen With Sashimi</h3>
                    <p class="mt-2 text-gray-600 text-justify">For lovers of spicy flavors, our Spicy Ramen is the right choice. The rich broth is topped with Hot Chili Peppers, served with chewy noodles, chashu, soft-boiled eggs, and fresh vegetables. Enjoy the perfect combination of spicy and savory.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (5).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Beef Dumplings</h3>
                    <p class="mt-2 text-gray-600 text-justify">Our Beef Dumplings are made with high quality beef seasoned with selected spices. With a juicy texture and rich flavor, this dumpling is a satisfying option for beef lovers.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (6).jpg') }}" alt="Dish 1" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Classic Sake Sashimi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Classic Sake Sashimi features pieces of fresh salmon with a delicate and slightly sweet taste. Perfect for sashimi lovers, this dish delivers freshness and an unforgettable authentic taste.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (7).PNG') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Soba Serenity</h3>
                    <p class="mt-2 text-gray-600 text-justify">Soba Serenity is a Japanese wheat noodle dish that brings simple yet satisfying enjoyment. Made with chewy and savory soba noodles, it is served in a delicious and rich dashi broth. Coupled with sliced leeks, pieces of nori, and a bunch of shiitake mushrooms that add a dimension of flavor and texture. Soba Serenity is the perfect choice to enjoy the warmth and coolness of authentic Japanese wheat noodles.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (8).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Tokyo Roll</h3>
                    <p class="mt-2 text-gray-600 text-justify">Perfect blend of fresh salmon, avocado and cucumber dressed with soft sushi rice and nori. Topped with toasted sesame seeds and teriyaki sauce, this roll delivers an authentic and satisfying taste of classic Japan.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (9).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Unagi Kabayaki Sauce</h3>
                    <p class="mt-2 text-gray-600 text-justify">A classic Japanese sauce with a savory sweet taste that is perfect for grilled unagi. Ideal for adding an authentic touch to your favorite grilled unagi, sushi or rice bowl dish.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (10).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Oceanic Symphony Sashimi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Oceanic Symphony Sashimi is a palate experience for salmon lovers. Fresh, tender chunks of salmon are served with artistic precision, creating a symphony of flavors from the deep ocean. Enjoy the pure delicacy and natural beauty of salmon combined with a minimalist touch to highlight its original flavor. Serve Oceanic Symphony Sashimi at your table for an elegant and satisfying dining experience.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (11).jpg') }}" alt="Dish 1" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Boketto Bliss Sushi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Boketto Bliss Sushi is a fusion of alluring taste and charming appearance. Each bite features a unique combination of freshly cut salmon, tender avocado and fresh cucumber, rolled with sushi rice and nori. Coupled with a touch of sweet sauce and a sprinkling of sesame seeds, Boketto Bliss Sushi provides an unforgettable sushi experience. Experience the delicacy and beauty in every mouthful with our Boketto Bliss Sushi.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (12).PNG') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Takoyaki Temptation</h3>
                    <p class="mt-2 text-gray-600 text-justify">Takoyaki Temptation is a savory delicacy that is a favorite in Japan. Each small takoyaki ball is baked to perfection until browned on the outside and soft on the inside. Filled with tender octopus pieces and vegetables such as leeks, with the addition of takoyaki sauce, mayo sauce, and sliced bonito flakes that add a distinctive aroma and flavor. Takoyaki Temptation will captivate your taste buds with its perfect combination of crunchy texture, savory taste, and mouth-watering aroma.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (13).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Ebi Katsu Don</h3>
                    <p class="mt-2 text-gray-600 text-justify">Ebi Katsu Don is a classic Japanese dish that captivates with a delicious combination of crispy ebi katsu and fragrant white rice. Pieces of shrimp are breaded in flour and fried until golden, then served over rice and drizzled with sweet katsu sauce. Coupled with a soft omelet and chives to add more flavor and delicacy. Experience the authentic taste of Japan with our Ebi Katsu Don.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (14).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Summer Hokkaido Ramen</h3>
                    <p class="mt-2 text-gray-600 text-justify">Experience Hokkaido's summer freshness with chewy ramen and rich broth, complemented by a variety of fresh toppings such as cucumber, radish, and tender chicken or pork cuts. A perfect dish to enjoy the authentic summer sensation of Hokkaido, Japan.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (15).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Salmon Delight Sushi Roll</h3>
                    <p class="mt-2 text-gray-600 text-justify">Enjoy fresh and tender salmon delights in every bite with our Salmon Delight Sushi Roll. Made with chunks of fresh salmon wrapped in fluffy sushi rice and nori, this roll provides the perfect combination of flavors. Served with a sprinkling of sesame and teriyaki sauce, each mouthful brings the delicious sensation of an alluring ocean. Experience authentic sushi delights with our Salmon Delight Sushi Roll.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (16).jpg') }}" alt="Dish 1" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Sushi Roll</h3>
                    <p class="mt-2 text-gray-600 text-justify">Taste the fresh delights of the sea with our Sushi Roll. This Roll contains pieces of fresh salmon, creamy avocado, and fresh cucumber, which are rolled with sushi rice and nori. Garnished with sesame sprinkles and teriyaki sauce, each bite brings an alluring Marine aroma and flavor. Enjoy a refreshing and satisfying sushi experience with our Sushi Roll.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (17).PNG') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Dorayaki Delight</h3>
                    <p class="mt-2 text-gray-600 text-justify">Dorayaki Delight is a classic Japanese sweet that seduces the taste buds. It consists of two layers of fluffy, vanilla-flavored pancakes baked until golden, filled with delicious sweet red peanut butter in the middle. Each bite of Dorayaki Delight brings the perfect combination of creamy texture and alluring sweetness. Enjoy traditional Japanese delights with our authentic Dorayaki Delight.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (18).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Tempura Crunch Sushi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Experience an alluring blend of savory and crunchy flavors with our Tempura Crunch Sushi. Each bite blends pieces of fresh fish, tender avocado, and fresh cucumber rolled in sushi rice, then layered with a crispy layer of tempura. The dish is served with mayo sauce and a sprinkling of sesame seeds to add an even more dimension of flavor. Enjoy the sensation of contrasting textures and rich flavors with our Tempura Crunch Sushi.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (19).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Salmon Sushi</h3>
                    <p class="mt-2 text-gray-600 text-justify">Enjoy the fresh and delicious sensation with our Salmon Sensation Sushi. Made with fresh salmon strips combined with soft sushi rice and nori. This Sushi is the perfect choice to enjoy the classic taste of sushi with a unique touch of creamy salmon.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('assets/makanan (20).jpg') }}" alt="Dish 2" class="w-full h-36 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Tonkotsu Ramen</h3>
                    <p class="mt-2 text-gray-600 text-justify">Our Tonkotsu Ramen features pork bone broth that is cooked for a long time to produce a creamy texture and deep flavor. Accompanied by chewy noodles, chashu, kikurage mushrooms, nori and soft-boiled soft-boiled eggs, this ramen is the perfect choice for lovers of rich broths.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">About Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-center">Our Story</h3>
                    <p class="text-gray-600 text-justify">At Sakura-FoodFest restaurant, our story starts from a simple determination: to present a culinary experience that not only satisfies the palate, but also celebrates the beauty of Japan's culinary heritage. We combine ancient traditions with innovative touches to create dishes that captivate, amaze, and invite you to experience unforgettable culinary wonders.
                        With deep roots in the Japanese cooking tradition, we respect the finest natural ingredients and apply traditional techniques that have been passed down from generation to generation. However, we also dare to innovate by bringing a modern touch to the presentation and presentation of the dishes, so that each mouthful becomes an appetizing and sensory experience.
                        Each dish at Sakura-FoodFest restaurant is a story that tells the journey of taste and expertise of our chefs. We pride ourselves on our honesty and dedication in bringing authentic flavors and unforgettable memories to our customers. From fresh sushi to savory ramen, each of our dishes is a mirror of our commitment to bring you the best of Japan.
                        We invite you to join our journey at the Sakura-FoodFest restaurant. Together, let's enjoy the richness of taste and the infinite beauty of Japanese cuisine.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-center">Our Mission</h3>
                    <p class="text-gray-600 text-justify">At Sakura-FoodFest restaurant, our mission is simple: we are determined to serve more than just delicious food. We are committed to creating culinary experiences that bring joy, warmth and precious memories to every guest who steps foot in our establishment.
                        We believe that food is not only about meeting physical needs, but also about reviving the soul and connecting people with each other. Therefore, we strive to create a friendly and inviting atmosphere, where every visit to Sakura-FoodFest is an opportunity to celebrate relationships, share stories and enjoy the beauty of Japanese dishes.
                        In line with our mission to spread happiness through food, we are also committed to maintaining the sustainability of our environment and surrounding communities. We actively seek out high-quality ingredients that are environmentally friendly and support the local community in every opportunity we have.
                        With every dish we serve, we hope to inspire and touch the hearts of every one of our customers. We want to be the destination of choice for those looking for more than just food; we want to be a place where great memories are created and relationships are forged.
                        We invite you to be part of our journey at the Sakura-FoodFest restaurant. Let's celebrate together the joys of life and the culinary delights of Japan, one mouthful at a time.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="bg-white py-20">
        <div class="container mx-auto px-6 flex items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-center mb-8">Contact Us</h2>
                <form class="max-w-lg mx-auto">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address:</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Enter your email address">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                        <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 mt-6 md:mt-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51384548.92488225!2d132.45436806063727!3d35.02482805853725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f89c283aa5e9e5d%3A0x1b1ea2f88e573910!2sJapan!5e0!3m2!1sen!2sus!4v1621507811491!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800">
        <div class="container mx-auto px-6 py-4 text-white text-center">
            <p>&copy; 2024 Restaurant Sakura-FoodFest. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
