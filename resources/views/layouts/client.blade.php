<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- cdn fontowsam --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .navbar {
            background-color: #76B5C6;
         
        }
        .nav-link, .nav-link:focus {
  color: #fff;
}
.nav-link:hover, .nav-link:focus {
  color: #fff;
}
.card{
    background-color: #fff;
background-clip: border-box;
border: 1px solid #164C7A; 
}
.card .card-header{
    background-color: #164C7A;
background-clip: border-box;
border: 1px solid #164C7A; 
color: #fff;
}
.list-group-item .data{
color:#E28643
}
@media print {
  navbar, 
  .print,
  .nav-link {
      display: none;
  }
}

    </style>
</head>

<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm" style="">
            <div class="container">
                <h3 class="mx-auto text-center">  
                    <a class="nav-link text-center" href="{{ route('client.test') }}">
                       <span class="text-warning pe-2"><i class="fa-solid fa-award"></i></span>  {{ __('Challenge Panel') }}
                    </a></h3>
                <h5 class="mx-auto text-center d-flex">  
                    @auth
                    @if(( auth()->user()->name )  !== "admin") 
                    
                    <span class="nav-link text-white text-center" >
                        <span class="text-secondary ">Bienvenu : </span>{{auth()->user()->name}}
                        </span>
                    @elseif(( auth()->user()->name )  === "admin")
    
                     <script>window.location = "admin/dashboard/";</script>
                     @endif 
                     <button type="button" class="btn border-0 outline-0 nav-link ico text-warning text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-user"></i>
                      </button>
                      <button type="button" class="btn border-0 outline-0 nav-link ico text-warning text-center">
                        <i class="fa-solid fa-headset"></i>
                      </button>
                        <a class="nav-link ico text-warning text-center" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                            <i class="fa-solid fa-right-from-bracket" ></i>
                        </a>
                       
                    @endauth
                    <form class="d-none" action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf 
                        
                    </form>
                </h5>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script>
     
    // Set the countdown time in seconds
var timeLeft = 180;

// Define the countdown function
function countdown() {
    // Update the countdown display
    document.getElementById("countdown").innerHTML = "Temps Restant: " + timeLeft + " seconds";
   // document.getElementById("countdown").innerHTML = timeLeft;
    // Subtract one second from the remaining time
    timeLeft--;

    // If the countdown is over, display a message
    if (timeLeft < 0) {
        clearInterval(timer);
        document.getElementById("countdown").innerHTML = "le temps est écoulé";
    }
}

// Call the countdown function every second
var timer = setInterval(countdown, 1000);


 

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 print(){
    window.print();
}
</script>
</html>