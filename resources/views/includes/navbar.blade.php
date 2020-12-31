      <!-- navbar-->
      <div class="container">
        <!-- navbar -->
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{route('home')}}" class="navbar-brand">
            <img src="{{url('Frontend/images/Nomads logo.png')}}" alt="logo">
            </a>
            <!-- Responsive mobile toggler -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                  <li class="nav-item mx-md-2">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item mx-md-2 ">
                    <a class="nav-link" href="{{route('paket')}}">Paket Travel</a>
                  </li>
                </ul>  
       @guest
                <!-- Mobile Butoon-->
                <form class="form-inline d-sm-block d-md-none">
                  <button class="btn btn-login my-2 my-sm-0" type="button" 
                onclick="event.preventDefault(); location.href='{{url('login')}}';"
                  >Masuk</button>
              </form>
              <!-- Dekstop Butoon-->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" 
              onclick="event.preventDefault(); location.href='{{url('login')}}';"
                >Masuk</button>
            </form>
       @endguest 

       @auth
       <!-- Mobile Butoon-->
       <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
        @csrf
         <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
     </form>
     <!-- Dekstop Butoon-->
     <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
      @csrf
       <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
   </form>
        
      @endauth 

           
        </nav>
    </div>