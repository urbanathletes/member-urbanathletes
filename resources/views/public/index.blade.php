<x-main>
  @push('styles')
    {{-- Swiper JS --}}
    {{-- <link rel="stylesheet" href="{{ url('swiper/js/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('https://unpkg.com/swiper@8/swiper-bundle.min.css')}}"/>
  @endpush
  <div class="">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner.jpg') }}" alt="Urban Athletes Benner">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-1.jpg') }}" alt="Urban Athletes Benner 1">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-2.jpg') }}" alt="Urban Athletes Benner 2">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-3.jpg') }}" alt="Urban Athletes Benner 3">
        </div>
        <div class="swiper-slide">
          <img class="w-full" src="{{ url('/image/benner/Benner-4.jpg') }}" alt="Urban Athletes Benner 4">
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
  
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  
    <div class="container">
      <div class="px-8 md:px-0">
        <h1 class="text-5xl text-center font-extrabold text-green-ua my-4">WHAT'S ON</h1>
        <img class="w-full" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
        <!-- Swiper -->
        {{-- <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">

            </div>
            <div class="swiper-slide">
              <img class="w-full" src="{{ url('/image/benner/LayerSlider2.jpg') }}" alt="Urban Athletes Benner">
            </div>
          </div>
          <div class="swiper-button-next2"></div>
          <div class="swiper-button-prev2"></div>
        </div> --}}
      </div>
      
    </div>
  </div>
  
  @push('scripts')
    {{-- Swiper JS --}}
    {{-- <script src="{{ url('swiper/js/swiper-bundle.min.js') }}"></script> --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper', {
        spaceBetween: 300,
        // centeredSlides: true,
        effect: "fade",
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      // var swiper2 = new Swiper(".mySwiper", {
      //   navigation: {
      //     nextEl: ".swiper-button-next2",
      //     prevEl: ".swiper-button-prev2"
      //   }
      // });
    </script>
  @endpush
</x-main>
{{-- @extends('layouts.main')

@section('content')

@endsection --}}
