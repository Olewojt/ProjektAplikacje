<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mockup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom">
    
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href={{ route('main') }} class="nav-link px-3 link-dark fs-5">Strona główna</a></li>
                    <li><a href={{ route('main') }} class="nav-link px-3 link-dark fs-5">Firmy</a></li>
                    <li><a href="#" class="nav-link px-3 link-dark fs-5">Kontakt</a></li>
                </ul>

                @guest
                    <div class="col-md-2 text-center">
                        <a href={{ route('login') }}><button type="button" class="btn btn-primary fs-5"
                            style="--bs-btn-padding-y: 0.4rem; --bs-btn-padding-x: 2rem;">Zaloguj</button></a>
                    </div>
                @endguest

                @auth
                    <div class="col-md-3 d-flex justify-content-between">
                        <a href={{ route('account.dashboard') }}><button type="button" class="btn btn-primary fs-5"
                            style="--bs-btn-padding-y: 0.4rem; --bs-btn-padding-x: 2rem;">Konto</button></a>
                        <a href={{ route('login.logout') }}><button type="button" class="btn btn-primary fs-5"
                            style="--bs-btn-padding-y: 0.4rem; --bs-btn-padding-x: 2rem;">Wyloguj</button></a>
                    </div>
                @endauth

            </header>
        </div>
        @yield('content')
    </body>
</html>
