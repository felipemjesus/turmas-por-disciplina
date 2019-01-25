<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Liket Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Liket Test</a>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/subjects') }}">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/teachers') }}">Teachers</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
        </main>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>
