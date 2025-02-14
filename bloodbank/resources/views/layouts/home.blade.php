<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'Blood Bank Management System' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/blood-clipart-blood-clipart.png"/>
</head>

    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color:#000000;">
        <div class="container"><a class="navbar-brand" href="/">Blood Bank</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home<br></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/donor_list">Donar</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="/search">Search</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/manuel">Manuel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about-us">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="row text-right" >
               @guest
       
                           @if (Route::has('login'))
                                
                                    <a 
                                     class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              
                            @endif
                            
                            @if (Route::has('register'))
                             
                                    <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             
                            @endif
                      
                       
                        @else
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
           
        </div>
    </nav>
<div style="background-color:rgb(238,244,247);">
<div class="container">
    <div class="row" style="margin:0px;">

        @yield('main')


    </div>
</div>

</div>

<div class="projects-clean"></div>
<div class="footer-dark" style="background-color:rgb(0,0,0);">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h5>Important Links:</h5>
                    <ul>
                        <li><a href="#">Ambulance</a></li>
                        <li><a href="http://www.infoblood.org">Blood Bank</a></li>
                        <li><a href="#">MAG Osmani Medical</a></li>
                    </ul>
                </div>
                
                <div class="col-md-6 item text">
                    <h5>About Us:</h5>
                    <p>
                        এইখানে, আপনাদের সম্পর্কে লিখবেন । Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <p class="copyright" style="font-size:15px;padding-top:10px;">Rahnama Ahmed, 📧 rahnamachowdhury@gmail.com © <?php echo date("Y"); ?>  </p>

</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>