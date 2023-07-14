@extends('layouts.landing')

@section('title', 'Home')

@section('navbar')
        <div class="container mx-auto ">
            <div class="flex items-center justify-between text-white">
                <h4 class="font-semibold font-Poppins order-1">{{$judul['header']}}</h4>
                <svg @click="navOpen = !navOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 order-2 lg:hidden">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                </svg>
                 {{-- Desktop Navbar --}}
                 <div class="font-semibold font-Poppins order-2 hidden lg:block ">
                    <ul class="flex gap-16">
                        <li><a href="http://" class="hover:text-purple-300">Home</a></li>
                        <li><a href="http://" class="hover:text-purple-300">Category</a></li>
                        <li><a href="http://" class="hover:text-purple-300">Search</a></li>
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
@endsection

@section('content')
       <div class="flex flex-row">
          <div class="mt-5 px-5 basis-1/2">
            <h4>Hello</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, 
              quas porro. Dolorem quasi deserunt culpa quibusdam natus laudantium dolores praesentium!</p>
          </div>
          <div class="mt-5 px-5 basis-1/2">
      
          </div>
          
       </div>
@endsection

@section('content-2')
        <div class="container right-0 left-0 mx-auto">
            <h2 class="ml-16 mt-4 pb-4 text-xl font-bold font-Poppins">{{$judul['kategori_semua']}}</h2>
            <div class="grid grid-cols-1">
              <swiper-container class="w-[90%] right-0 left-0 py-5 px-4"> 
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                
              </swiper-container>
            </div>
        </div>
@endsection

@section('content-3')
        <div class="container right-0 left-0 mx-auto">
            <h2 class="ml-16 mt-4 pb-4 text-xl font-bold font-Poppins">{{$judul['kategori_anak']}}</h2>
            <div class="grid grid-cols-1">
              <swiper-container class="w-[90%] right-0 left-0 py-5 px-4"> 
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                
              </swiper-container>
            </div>
        </div>
@endsection

@section('content-4')
        <div class="container right-0 left-0 mx-auto">
            <h2 class="ml-16 mt-4 pb-4 text-xl font-bold font-Poppins">{{$judul['kategori_fiksi']}}</h2>
            <div class="grid grid-cols-1">
              <swiper-container class="w-[90%] right-0 left-0 py-5 px-4"> 
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 md:w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide px-4">
                  <div class="w-64 md:w-96 card lg:card-side card-bordered bg-base-100 sm:image-full">
                    <figure>
                      <img 
                      src="storage/cover/image.png" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-72"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">New movie is released!</h2>
                      <p class="text-gray-500">Click the button to watch on Jetflix app.</p>
                      <div class="card-actions justify-center mt-3">
                        <button class="btn btn-primary w-[100%]">Read</button>
                      </div>
                    </div>
                  </div>
                </div>
                
              </swiper-container>
            </div>
        </div>
@endsection


