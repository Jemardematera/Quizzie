<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizzie</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-navbar navbar-red bg- red" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quizzie</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Your Library
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Study</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Create
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Study</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                        <!-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> -->
                    @endguest
                </ul>
            </div>
        </div>
    </nav>



    <div class="col-12 mt-5">
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading text-center color:red gray"><b> Total Of Student</b>

                            </div>

                        </div>
                        <div class="card-body ">

                            <blockquote class="blockquote mb-0">
                                <div class="panel-heading text-center"><b> 01</b>

                                </div>

                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading text-center"><b> Total Of Subject</b>

                            </div>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="panel-heading text-center"><b> 01</b>

                                </div>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-4 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading text-center"><b>Pending Student</b>

                            </div>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="panel-heading text-center"><b> 01</b>

                                </div>

                        </div>
                    </div>


                </div>





                <div class="col-6 - mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading text-right"><b>Recently</b>

                            </div>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">

                            </blockquote>
                        </div>
                    </div>


                </div>


                <div class="col-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading text-right"><b>List of Student</b>

                            </div>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">

                            </blockquote>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
