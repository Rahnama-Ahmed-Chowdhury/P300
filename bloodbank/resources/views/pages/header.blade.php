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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/donar">Donar</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/manuel">Manuel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about-us">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-right" >
                @if (Auth::check())
                    <div style="color:white">
                        Logged in as </br>{{ Auth::user()->email }}
                        <form action="{{ route('auth.logout') }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="Logout" class="btn btn-success">
                        </form>

                        {!! Form::open(['method'=>'POST','url'=>'/login'])  !!}
                            <input type="submit" value="Admin Panel" class="btn btn-primary">
                        {!! Form::close() !!}
                    </div>


                @endif

            </div>
        </div>
    </nav>

</html>