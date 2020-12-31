@extends('layouts.app')

@section('title','Detail Travel')



@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
        <div class="container">
            <div class="row">
            <div class="col p-0">
                <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    paket Travel
                    </li>
                    <li class="breadcrumb-item active">
                    Details
                    </li>
                </ol>
                </nav>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                <h1>{{$item->title}}</h1>
                <p>{{$item->location}}</p>

                    @if ($item->galleries->count())
                    <div class="gallery">
                        <div class="xzoom-container">
                        <img src="{{Storage::url($item->galleries->get(1)->image)}}" witdh ="660" height ="350" class="xzoom" id="xzoom-default" xoriginal="{{Storage::url($item->galleries->get(1)->image)}}" alt="gallery-1">
    
                        </div>
    
                        
                        <div class="xzoom-thumbs">
                            @for ($i = 1; $i < $count; $i++)
                            <a href="{{ Storage::url($item->galleries->get($i)->image)}}">
                                <img src="{{Storage::url($item->galleries->get($i)->image) }}" alt="gallery-1" class="xzoom-gallery" width="128" height="80" xpreview ="{{Storage::url($item->galleries->get($i)->image)}}">
                            </a>
                            @endfor
                        </div>
    
    
                    </div>
                    @endif
                <h2>Tentang Wisata</h2>
                <p>
                    {!! $item->about !!}                    
                </p>
                <div class="features row">
                    <div class="col-md-4">
                    <div class="description">
                    <img src="{{url('Frontend/images/ic_ticket.png')}}" alt="icon" class="features-image">
                    <div class="description">
                        <h3>Featured Event</h3>
                        <p>{{$item->featured_event}}</p>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-4 border-left">
                    <div class="description">
                    <img src="{{url('Frontend/images/ic_language.png')}}" alt="icon" class="features-image">
                        <div class="description">
                        <h3>Language</h3>
                        <p>{{$item->language}}</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4 border-left">                    
                    <div class="description">
                    <img src="{{url('Frontend/images/ic_foods.png')}}" alt="icon" class="features-image">
                    <div class="description">
                        <h3>Foods</h3>
                        <p>{{$item->foods}}</p>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                    <img src="{{url('frontend/images/img-members-1.png')}}" class="member-image mr-1" alt="members">
                    <img src="{{url('frontend/images/img-members-2.png')}}" class="member-image mr-1" alt="members">
                    <img src="{{url('frontend/images/img-members-3.png')}}" class="member-image mr-1" alt="members">
                    <img src="{{url('frontend/images/img-members-4.png')}}" class="member-image mr-1" alt="members">
                    <img src="{{url('frontend/images/img-members-5.png')}}" class="member-image mr-1" alt="members">
                </div>
                <hr>
                <h2>Trip Information</h2>
                <table class="trip-information">
                    <tr>
                    <th witdh ="50%"> Date Of Departure</th>
                    <td witdh ="50%" class="text-right">
                         {{\Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')}}
                    </td>
                    </tr>
                    <tr>
                    <th witdh ="50%"> Duration</th>
                    <td witdh ="50%" class="text-right"> {{$item->duration}}</td>
                    </tr>
                    <tr>
                    <th witdh ="50%"> Type</th>
                    <td witdh ="50%" class="text-right"> {{$item->type}}</td>
                    </tr>
                    <tr>
                    <th witdh ="50%"> Price</th>
                    <td witdh ="50%" class="text-right"> ${{$item->price}},00 / person</td>
                    </tr>
                </table>
                </div>
                <div class="join-container">
                @auth
                    <form action="{{route('checkout-process',$item->id)}}" method="POST">
                        @csrf
                        <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">Join Now</button>
                    </form>
                @endauth
                @guest
                <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">Login Or Register to Join</a>
                @endguest
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
    
@endsection

@push('prepend-style')

    <link rel="stylesheet" href="{{url('Frontend/libraries/xzoom/xzoom.css')}}">

@endpush

@push('addon-script')

    <script src="{{url('frontend//libraries/xzoom/xzoom.min.js')}}"></script>
        <script>
        $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth :500,
            title:false,
            tint:'#333',
            xoffset:15
        });
        });

        </script>  
        
@endpush


    