@extends('layouts.app')

@section('title')
    Nomads
@endsection

@section('content')

<main>
    <!-- gambarnya-->
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          @foreach ($items as $item)
          <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
            <div class="card-travel2 text-center d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url ($item->galleries->first()->image): '' }}');">
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

      </div>
    </section>
    
  </main>

    
@endsection