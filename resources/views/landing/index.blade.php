@extends('layouts.landing')

@section('title', 'Home')



@section('content')
       <div class="flex flex-col sm:flex-row">
          <div class=" md:mt-5 lg:mt-15 mb-5 px-10 py-4 sm:basis-1/2">
            <h4 class="text-xl font-bold">Audio Book Polimedia</h4>
            <p class=" text-justify mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facere impedit earum doloremque fugiat, 
              voluptate labore animi libero neque. Voluptatibus eos explicabo incidunt nulla, dolorum ducimus optio! Sapiente nesciunt 
              mollitia eveniet vero unde ad in minus dicta provident! 
              Molestias delectus cumque unde recusandae repellendus velit fuga enim aspernatur necessitatibus exercitationem.</p>
          </div>
          <div class="mt-5 md:mt-16 lg:mt-8 mb-10 px-5 md:w-full lg:w-[80%]">
            <swiper-container class="mySwiper w-[240px] lg:w-[540px] h-[320px]" effect="cards" grab-cursor="true">
              <swiper-slide>
                <img src="storage/cover/avenger.jpg" alt="" class="w-full">
              </swiper-slide>
              <swiper-slide>
                <img src="storage/cover/novel_anak.jpg" alt="" class="w-full">
              </swiper-slide>
              <swiper-slide>
                <img src="storage/cover/novel-harry.jpg" alt="" class="w-full">
              </swiper-slide>
              <swiper-slide>
                <img src="storage/cover/novel_anak-1.jpg" alt="" class="w-full">
              </swiper-slide>
              <swiper-slide>
                <img src="storage/cover/kebayan.jpg" alt="" class="w-full">
              </swiper-slide>
            </swiper-container>
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">Title Buku!</h2>
                      <p class="text-gray-500">Desc.</p>
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">Title Buku!</h2>
                      <p class="text-gray-500">Desc.</p>
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56"
                      />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title text-gray-950">Title Buku!</h2>
                      <p class="text-gray-500">Desc.</p>
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56"
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
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
                      src="storage/cover/novel-harry.jpg" 
                      alt="Movie"
                      class="mt-5 px-2 py-2 w-56 "
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


