<div class="container mx-auto max-w-6xl">
    <div class="flex items-center justify-between">
        <h4 class="font-semibold font-Poppins order-1">AudioBook Polimedia</h4>
        <svg @click="navOpen = !navOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 order-2 lg:hidden">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
        </svg>
         {{-- Desktop Navbar --}}
         <div class="font-semibold font-Poppins order-2 hidden lg:block">
            <ul class="flex gap-16">
                <li><a href="http://" class="hover:text-purple-300 ">Home</a></li>
                <li><a href="http://" class="hover:text-purple-300">Category</a></li>
            </ul>
         </div>
    </div>

    {{-- Mobile Navbar --}}
    <div x-show="navOpen" class="fixed bottom-0 right-0 left-0 w-full bg-white p-6 lg:hidden z-50"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"              
    >
        <ul class="flex justify-between mx-6">
            <li><button class="flex justify-center flex-col items-center gap-2">
                    <ion-icon name="book-outline" class="text-2xl"></ion-icon>
                    <span class="text-base font-bold">Category</span>
                </button>
            </li>
            <li><button class="flex justify-center flex-col items-center gap-2 ">
                {{-- <div class="absolute bg-primary top-0 px-2 py-2 rounded-full w-16 h-16"></div> --}}
                    <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                    <span class="text-base font-bold">Home</span>
                </button>
            </li>
            <li><button class="flex justify-center flex-col items-center gap-2">
                <ion-icon name="search-outline" class="text-2xl"></ion-icon>
                <span class="text-base font-bold">Search</span>
                </button>
            </li>
        </ul>

    </div>
</div>