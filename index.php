<?php
// =========================================================================
// Configuration - Easily update your business details here
// =========================================================================
$businessName = "Spice & Savor Recipes";
$heroTitle = "Master the Art of Delicious Cooking";
$heroSubtitle = "Discover our exclusive collection of mouth-watering recipes. Fresh ingredients, simple steps, and unforgettable flavors.";
$heroCTA = "Get Your Free Recipe Guide";

$contactPhone = "+1 (555) 987-6543";
$contactEmail = "support@spicesavor.example.com";
$businessAddress = "456 Culinary Avenue, Suite 200, Tasteville, NY 10012";
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $businessName; ?> | Authentic Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ea580c', // Orange-600
                        secondary: '#f97316', // Orange-500
                        dark: '#1f2937',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-800 bg-gray-50 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-primary"><?php echo $businessName; ?></h1>
            <nav class="hidden md:flex space-x-6">
                <a href="#about" class="text-gray-600 hover:text-primary font-medium">About</a>
                <a href="#services" class="text-gray-600 hover:text-primary font-medium">Services</a>
                <a href="#testimonials" class="text-gray-600 hover:text-primary font-medium">Reviews</a>
                <a href="#contact" class="text-gray-600 hover:text-primary font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Cooking Spices and Food" class="w-full h-full object-cover opacity-40">
        </div>
        <div class="relative max-w-6xl mx-auto px-4 py-24 text-center md:py-32">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight"><?php echo $heroTitle; ?></h2>
            <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto text-gray-200"><?php echo $heroSubtitle; ?></p>
            <a href="#lead-form" class="inline-block bg-primary hover:bg-secondary text-white font-bold py-4 px-8 rounded-lg text-lg transition duration-300 shadow-lg transform hover:-translate-y-1">
                <?php echo $heroCTA; ?>
            </a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Chef preparing food" class="rounded-xl shadow-xl">
            </div>
            <div class="md:w-1/2">
                <h3 class="text-3xl font-bold mb-6 text-dark">About <?php echo $businessName; ?></h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    We believe that cooking should be an experience, not a chore. Our team of expert chefs and passionate foodies curate recipes that bring restaurant-quality meals straight to your home kitchen. 
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Whether you are a beginner or a seasoned home cook, our step-by-step guides ensure perfect results every time. Quality ingredients and clear instructions are at the heart of everything we do.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-12 text-dark">What We Offer</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="text-primary text-4xl mb-4">📖</div>
                    <h4 class="text-xl font-bold mb-3">Premium Recipe Vault</h4>
                    <p class="text-gray-600">Access hundreds of thoroughly tested recipes ranging from quick weeknight dinners to elaborate holiday feasts.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="text-primary text-4xl mb-4">🎥</div>
                    <h4 class="text-xl font-bold mb-3">Video Tutorials</h4>
                    <p class="text-gray-600">Follow along with our professional video guides to master complex techniques easily.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="text-primary text-4xl mb-4">🥗</div>
                    <h4 class="text-xl font-bold mb-3">Custom Meal Plans</h4>
                    <p class="text-gray-600">Get personalized weekly meal plans tailored to your dietary preferences and fitness goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-12 text-dark">Loved by Home Cooks</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="p-8 bg-gray-50 rounded-xl shadow-sm italic">
                    <p class="text-gray-600 mb-4">"The recipes here have completely transformed my dinner routine. Everything is easy to follow and tastes absolutely incredible!"</p>
                    <p class="font-bold text-dark">- Sarah J., New York</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-sm italic">
                    <p class="text-gray-600 mb-4">"I used to hate cooking, but these step-by-step guides made it fun and stress-free. Highly recommend to anyone wanting to eat better."</p>
                    <p class="font-bold text-dark">- Michael T., California</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Capture Form Section (Required for Conversions) -->
    <section id="lead-form" class="py-20 bg-primary">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-white mb-4">Start Cooking Better Today</h3>
            <p class="text-white/90 mb-8">Sign up now to receive our top 10 secret recipes delivered straight to your inbox.</p>
            
            <form action="#" method="POST" class="bg-white p-8 rounded-xl shadow-2xl text-left">
                <?php
                // Basic PHP form handling structure (for demonstration)
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Logic to process lead would go here
                    echo '<div class="mb-4 p-4 bg-green-100 text-green-700 rounded border border-green-400">Thank you! Your recipe guide is on its way.</div>';
                }
                ?>
                <div class="mb-5">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                </div>
                <button type="submit" class="w-full bg-dark hover:bg-gray-800 text-white font-bold py-4 rounded-lg text-lg transition duration-300">
                    Get Access Now
                </button>
                <p class="text-xs text-gray-500 mt-4 text-center">By signing up, you agree to our Terms of Service and Privacy Policy. Your data is secure.</p>
            </form>
        </div>
    </section>

    <!-- Google Ads Compliant Footer -->
    <footer id="contact" class="bg-dark text-gray-400 py-12 mt-auto">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            
            <!-- Business Info -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4"><?php echo $businessName; ?></h4>
                <p class="mb-2">📍 <?php echo $businessAddress; ?></p>
                <p class="mb-2">📞 <?php echo $contactPhone; ?></p>
                <p>✉️ <?php echo $contactEmail; ?></p>
            </div>

            <!-- Trust Signals & Legal (Strictly Required for Ads) -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4">Legal Info</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-white transition">Disclaimer</a></li>
                    <li><a href="#" class="hover:text-white transition">Refund Policy</a></li>
                </ul>
            </div>

            <!-- Disclaimer -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4">Disclaimer</h4>
                <p class="leading-relaxed text-xs">
                    This site is not a part of the Google website or Google Inc. Additionally, This site is NOT endorsed by Google in any way. GOOGLE is a trademark of GOOGLE Inc. We respect your privacy and will never sell or share your data.
                </p>
            </div>

        </div>
        <div class="max-w-6xl mx-auto px-4 mt-8 pt-8 border-t border-gray-800 text-center text-xs">
            <p>&copy; <?php echo $currentYear; ?> <?php echo $businessName; ?>. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>