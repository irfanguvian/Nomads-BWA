@extends('layouts.app')

@section('title')
    Nomads
@endsection

@section('content')

  <!-- header-->
  <header class="text-center">
    <h1 class="typing"></h1>
    <br>
    <h1 class="typing2"></h1>
    <p class="mt-3">
      You will See the Beautiful
      <br>
      moment you never see before
   </p>
  <a href="#popular" class="btn btn-get-started px-4 mt-4"> Get Started</a>
  </header>
  

<main>
    <!--Statistik-->
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>
    <!--wisata populer-->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br>
              before in this World
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- gambarnya-->
    <section class="section-popular-content" id="popularContent" data-aos='fade-down'>
      <div class="container">
        <div class="section-popular-travel row justify-content-center swiper-container">
          <div class="swiper-wrapper">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 swiper-slide">
              <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url ($item->galleries->first()->image): '' }}');">
                <div class="travel-country">{{$item->location}}</div>
                <div class="travel-location">{{$item->title}}</div>
                <div class="travel-button mt-auto">
                <a href="{{route('detail',$item->slug)}}" class="btn btn-travel-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>              
            @endforeach  
          </div>          
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

      </div>
    </section>
    <!-- Our network-->
    <section class="section-network">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
          <img src="{{url('Frontend/images/item_kerjasama.png')}}" alt="logo-brand" class="img-partner">
          </div>
        </div>
      </div>
    </section>
    <!-- they loving us-->
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center" data-aos="fade-up">
            <h2>They Loving us</h2>
            <p>Moments were giving them 
              <br>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonial-content" id="testimonialContent" data-aos="fade-down">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
              <img src="{{url('Frontend/images/testimonial-1.png')}}" alt="members" class="mb-4 rounded-circle">
                <h3 class="mb-4">Irfan Muhammad Guvian</h3>
                <p class="testimonial">
                  “ It was glorious and I could 
                  not stop to say wohooo for 
                  every single moment
                  Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2"> Trip to ubud</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
              <img src="{{url('Frontend/images/testimonial-2.png')}}" alt="members" class="mb-4 rounded-circle">
                <h3 class="mb-4">Melli Kuswanti</h3>
                <p class="testimonial">
                  “ The trip was amazing and
                    I saw something beautiful in
                    that Island that makes me
                    want to learn more “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2"> Trip to Nusa Peninda</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
              <img src="{{url('Frontend/images/testimonial-3.png')}}" alt="members" class="mb-4 rounded-circle">
                <h3 class="mb-4">Jarko Markicobs</h3>
                <p class="testimonial">
                  “ I loved it when the waves
                  was shaking harder — I was
                  scared too “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2"> Trip to Dubai</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1"> I Need Help</a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1"> Get Started</a>
          </div>
        </div>
      </div>
    </section>
  </main>

    
@endsection