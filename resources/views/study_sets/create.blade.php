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

    <nav class="navbar navbar-expand-lg navbar-navbar navbar-red bg- red" style="background-color: #2f5d62;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"
                Style=" color: white; font-family: Original Surfer; font-size:25px">Quizzie</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home"
                            Style=" color: white;  font-size:15px ">
                            Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" Style=" color: white;  font-size:15px ">
                            Your Library
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/studysets/all">Study sets</a></li>
                            <li><a class="dropdown-item" href="#">Class</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" Style=" color: white;  font-size:15px ">
                            Create
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Study sets</a></li>
                            <li><a class="dropdown-item" href="#">Class</a></li>

                        </ul>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" Style=" color: white;  font-size:15px ">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-12 mt-5">
        <div class="container">

            <div class="row">
                <div class="col-8">
                    <div class="container mt-5">
                        <form method="POST" action="{{ route('studysets.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" id="title">

                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input name="description" type="text" class="form-control" id="description">
                            </div>

                            <button type="submit" class="btn btn-primary" style="background-color: #2f5d62;">Create
                                Study Sets</button>
                        </form>

                    </div>
                </div>
                <div class="col-3">
                    <img src="/images/thinking.gif" Style="width: 300px;" />
                </div>
            </div>
        </div>
    </div>


    <div class="col-3; mt-0" style="width:1150px;font-size:10px; font-size:15px; margin-left:130px;">
        <div class="card">
            <div class="card-header" Style=" background-color: whitesmoke; ">
                <div class="panel-heading text-left" Style=" color:#2f5d62;  font-size:20px">
                    <b>1</b>
                    <img src="/images/2.png" Style="width: 20px; margin-left:1070px;" />


                </div>
            </div>


            <div class="card-body" style="height: 100px; margin-bottom: 20px;">

                <div class="col-12 mt-2">
                    <div class="container">

                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3">

                                    <input type="text" class="no-outline" placeholder="Enter term"
                                        style="font-size:25px; font-family:Arial ; outline: none; color: black ;border-top-style: hidden;border-right-style: hidden; border-left-style: hidden;width: 500px">
                                    <label class=" form-label" style="font-size:12px">TERM</label>
                                </div>



                            </div>


                            <div class="col-6">

                                <div class="mb-3">

                                    <input type="text" class="no-outline" placeholder="Enter Definition"
                                        style="font-size:25px; font-family:Arial ; outline: none; color: black ;border-top-style: hidden;border-right-style: hidden; border-left-style: hidden;width: 500px">
                                    <label class=" form-label"
                                        style="font-size:12px; margin-bottom: 30;">DEFINITION</label>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-light"
        style="background-color: #2f5d62; margin-left:130px;width:1150px;margin-top:10px; margin-Bottom:50px;  color:white;">ADD
        CARD

    </button>





    <!-- JavaScript Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
