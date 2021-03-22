<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Pokedex</title>
</head>

<body>
    <header class="navigation-menu">
        <div class="wrapper">
            <div class="title-container">
                <img src="{{ asset('images/Pokeball.jpg') }}" class="menu-img">
            </div>
            <div class="menu-container">
                <div class="expand_button menu-item"> 
                    <a href="" class="btn e-button btn-sm">
                        <span class="e-button-text nav-lbl">
                            <i class="la la-home icon " style="padding-right:3px;"></i> 
                            Home
                        </span> 
                    </a>
                    <a href="" class="btn e-button btn-sm">
                        <span class="e-button-text nav-lbl">
                            <i class="la la-question icon " style="padding-right:3px;"></i> 
                            About
                        </span> 
                    </a> 
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer class="footer-wrapper">
    </footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
