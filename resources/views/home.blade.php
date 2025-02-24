<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>halaman home</title>
</head>
<body>

<style>
  body {
        background-image: url('images/view.jpg'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
      }



</style>



<div>
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

            <a href="login" class="text-gray-700 hover:text-blue-600">Login <span aria-hidden="true">&rarr;</span></a>

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

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      
      <div class="text-center">
        <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Welcome To Florence Hotel</h1>
        <p class="mt-8 text-lg font-medium text-pretty text-white sm:text-xl/8">Want to rent a hotel room for a day, a week, or a month? Come directly to Florence Hotel and get a special early year promotion price.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>



</body>
</html>