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
                            <li><a class="dropdown-item" href="/">Class</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" Style=" color: white;  font-size:15px ">
                            Create
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/studysets/create">Study sets</a></li>
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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


    </nav <div class=" col-12 mt-5">
    <div class="container">

        <div class="row">


            @foreach ($studySets as $studySet)


                <div class="col-4" style=" margin-top:50px;margin-bottom:5px;">
                    <div class="card">

                        <div class="card-header" style="background-color:#f58634; height:10px;" ;>


                        </div>

                        <div class=" card-body " style=" background-color: white; height:120px; ">

                            <blockquote class=" blockquote mb-0">
                                <div class="panel-heading text-left" style="margin-top:15px; color:#2f5d62"><b>
                                        {{ $studySet->title }} </b>

                                </div>

                            </blockquote>

                            <div class=" panel-heading text-left"
                                Style=" color: #2f5d62; font-size:15px; margin-bottom:0px; margin-top:20px;">


                                {{ Auth::user()->name }}


                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">

                            <button type="button" class="btn btn-light" style="width: 50px; margin-right: 5px;">
                                <img src="/images/icons4.png" style="width: 20px;"> 
                            </button>

                            <button type="button" class="btn btn-light" style="width: 50px; margin-right: 5px;">
                                <img src="/images/icons2.png" Style="width: 20px;">
                            </button>

                            <button type="button" class="btn btn-light" style="width: 50px; margin-right: 5px;">
                                <img src="/images/icons3.png" Style="width: 20px;"> 
                            </button>

                            <button type="button" class="btn btn-light" style="width: 50px;">
                                <img src="/images/icons1.png" style="width: 20px;"> 
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <nav aria-label="Page navigation example" style=margin-top:100px;>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
</body>

</html>
