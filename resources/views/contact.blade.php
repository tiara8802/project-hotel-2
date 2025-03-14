<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>halaman contact</title>
</head>
<body>

<style>

  .header-text {
    color:rgb(19, 19, 19);
  }

  .header-text:active,
  .header-text:focus {
    color:rgb(252, 241, 144); 
  }
  
  .form-text {
      color: rgb(19, 19, 19); 
  }

  .form-text:active,
  .form-text:focus {
      color: rgb(19, 19, 19); 
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

  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact sales</h2>
    <p class="mt-2 text-lg/8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
  </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
        <div class="mt-2.5">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
        <div class="mt-2.5">
          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm/6 font-semibold text-gray-900">Company</label>
        <div class="mt-2.5">
          <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
        <div class="mt-2.5">
          <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
            <div class="grid shrink-0 grid-cols-1 focus-within:relative">
              <select id="country" name="country" autocomplete="country" aria-label="Country" class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option>US</option>
                <option>CA</option>
                <option>EU</option>
              </select>
              <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
              </svg>
            </div>
            <input type="text" name="phone-number" id="phone-number" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="123-456-7890">
          </div>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
        <div class="mt-2.5">
          <textarea name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
        </div>
      </div>
      <div class="flex gap-x-4 sm:col-span-2">
        <div class="flex h-6 items-center">
          <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
          <button type="button" class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-gray-900/5 transition-colors duration-200 ease-in-out ring-inset focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
            <span class="sr-only">Agree to policies</span>
            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
            <span aria-hidden="true" class="size-4 translate-x-0 transform rounded-full bg-white ring-1 shadow-xs ring-gray-900/5 transition duration-200 ease-in-out"></span>
          </button>
        </div>
        <label class="text-sm/6 text-gray-600" id="switch-1-label">
          By selecting this, you agree to our
          <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
        </label>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
    </div>
  </form>
</div>
</div>
</body>
</html>