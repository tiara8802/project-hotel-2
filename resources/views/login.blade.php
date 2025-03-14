<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@github/login-button/dist/github-login-button.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<style>
<<<<<<< HEAD
=======
    

>>>>>>> 176a6f45aee58e88f131d3b94da4f7d772675987
  .text-gray-900 {
    color:rgb(19, 19, 19);
  }

  .text-gray-900:active,
  .text-gray-900:focus {
    color:rgb(252, 241, 144); 
  }
</style>

<header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <a href="#" class="text-xl font-bold">
                <img src="{{ url('/images/flo.png') }}" alt="Hotel Logo" class="h-12">
            </a>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/home" class="text-gray-700 hover:text-blue-600">Home</a>

                <!-- Dropdown Rooms -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-600 flex items-center">
                        Rooms 
                    </button>
                    <div class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-md opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Deluxe Room</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Double Room</a>
                        <a href="/product" class="block px-4 py-2 hover:bg-gray-100">Suite Room</a>
                    </div>
                </div>

                <!-- Dropdown Dining -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-600 flex items-center">
                        Facilities
                    </button>
                    <div class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-md opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Restaurant</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Café</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Room Service</a>
                    </div>
                </div>

                <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact Us</a>
            </nav>

            <a href="login" class="text-gray-700 hover:text-blue-600"></a>

            <!-- Mobile Menu Button -->
            <button id="menuToggle" class="md:hidden text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden bg-white md:hidden shadow-md">
            <a href="#" class="block px-6 py-3 border-b text-gray-700 hover:bg-gray-100">Home</a>
            
            <!-- Mobile Dropdown Rooms -->
            <div class="border-b">
                <button id="mobileRooms" class="w-full text-left px-6 py-3 text-gray-700 hover:bg-gray-100">Rooms</button>
                <div id="roomsDropdown" class="hidden bg-gray-50">
                    <a href="#" class="block px-8 py-2">Deluxe Room</a>
                    <a href="#" class="block px-8 py-2">Suite Room</a>
                    <a href="#" class="block px-8 py-2">Family Room</a>
                </div>
            </div>

            <!-- Mobile Dropdown Dining -->
            <div class="border-b">
                <button id="mobileDining" class="w-full text-left px-6 py-3 text-gray-700 hover:bg-gray-100">Dining</button>
                <div id="diningDropdown" class="hidden bg-gray-50">
                    <a href="#" class="block px-8 py-2">Restaurant</a>
                    <a href="#" class="block px-8 py-2">Café</a>
                    <a href="#" class="block px-8 py-2">Room Service</a>
                </div>
            </div>

            <a href="#" class="block px-6 py-3 border-b text-gray-700 hover:bg-gray-100">Gallery</a>
            <a href="#" class="block px-6 py-3 border-b text-gray-700 hover:bg-gray-100">Contact</a>
            <a href="#" class="block px-6 py-3 bg-blue-600 text-white text-center">Book Now</a>
        </div>
    </header>

  <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">SIGN IN YOUR ACCOUNT</h2>
    <form>

      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
      </div>
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <input id="remember-me" type="checkbox"
            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
          <label for="remember-me" class="ml-2 block text-sm text-gray-800">Remember me</label>
        </div>
        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
      </div>
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Sign in
      </button>
    </form>
    <p class="mt-6 text-sm text-center text-gray-500">
      Not a member? <a href="/register" class="text-blue-600 hover:underline">Register</a>
    </p>
  </div>
</body>
</html>
