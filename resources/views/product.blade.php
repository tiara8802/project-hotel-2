<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Document</title>
</head>
<body>

  <style>



  .text-gray-900 {
    color:rgb(19, 19, 19);
  }

  .text-gray-900:active,
  .text-gray-900:focus {
    color:rgb(252, 241, 144); 
  }

  .content {
            padding: 20px; 
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

  <div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="/detail" class="group">
        <img src="{{ url('/images/room (5).jpg') }}" alt="" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
      </a>
      <a href="#" class="group">
        <img src="{{ url('/images/room (7).jpg') }}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
      </a>
      <a href="#" class="group">
        <img src="{{ url('/images/room (12).jpg') }}" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
      </a>
      <a href="#" class="group">
        <img src="{{ url('/images/room (11).jpg') }}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
      </a>
      <a href="#" class="group">
        <img src="{{ url('/images/room (22).jpg') }}" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
      </a>
      <a href="#" class="group">
        <img src="{{ url('/images/room (20).jpg') }}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>


</body>
</html>