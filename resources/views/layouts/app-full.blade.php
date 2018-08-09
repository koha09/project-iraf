<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ config("app.name") }} | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url("css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ url("css/style.css") }}">
</head>
<body>
<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg  navbar-iraf navbar-dark container">
        <a class="navbar-brand" href="{{url("/")}}">
            <img src="{{ url("img/logo.png") }}" alt='logo' class="d-none .d-sm-none d-md-block navbar-logo">
            <h1 class="brand d-block d-sm-block d-md-none">
                ИРÆФ
            </h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">СÆЙРАГ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">БИБЛИОТЕКÆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">САБИТИ ДУЙНЕ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/subscribe') }}">РАФИНСЕТÆ ЖУРНАЛ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Navbar -->
<!-- Wrapper -->
<div class="container">
    <div id="wrapper" class="row">
        <!-- Content -->
        <section class="col-md-12 col-sm-12 col-xs-12">
            <div id="content">
                @yield('content')
            </div>
        </section>
        <!-- Content -->
    </div>
</div>
<!-- Wrapper -->
<!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/">CarolineStudio.ru</a>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>
</html>