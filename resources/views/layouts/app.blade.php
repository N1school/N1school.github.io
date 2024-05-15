<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'N1SCHOOL') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('img/site.logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: rgba(190, 190, 190, 1);">
    <div id="app">
        <nav>
            <video autoplay muted loop class="background-video">
                <source src="{{asset('video/video-6319fa9b3bb180dadb9fa3c4ed4faf9c-V.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="up">
            <div class="nav_items" id="left"><a href="/"><img src="{{asset('img/site.logo.png')}}" alt="Logo" id="logo"></a></div>

            <div class="nav_items" id="rigth">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Մուտք') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Գրանցում') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}"
                                   >
                                    {{ __('Անձնական Էջ') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Դուրս գալ') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>

                        </li>
                    @endguest
                </ul>
            </div>
            </div>
            <div id="sch_name">Հրազդանի Խաչատուր Աբովյանի <br>անվ․ թիվ 1 ավագ դպրոց</div>
            <div class="menu-toggle">
                <i class="fas fa-bars" id="open" style="color: #f7fafc;"></i>
                <i class="fas fa-close" id='close'style="color: #f7fafc;display: none"></i>

            </div>
            <div class="menu">
                <a href="{{ route('/') }}"><div class="menu_item">Գլխավոր</div></a>
                <a href="{{ route('history') }}"><div class="menu_item">Պատմություն</div></a>
                <a href="{{ route('kazm') }}"><div class="menu_item">Կազմ</div></a>
                <a href="{{ route('school') }}"><div class="menu_item">Դպրոց</div></a>
                <a href="{{ route('dimord') }}"><div class="menu_item">Դիմորդ</div></a>
                <a href="{{ route('about') }}"><div class="menu_item">Մեր մասին</div></a>
            </div>

        </nav>


        <main>
            @yield('content')
        </main>
    </div>

<div class="info">
    <div class="info_item" id="info_item_1">
        <div id="info_item_1_text">Միացիր դպրոցին</div>
        <div id="info_item_sc">
            <div class="social-buttons">
                <a href="#" class="social-button social-button--facebook" aria-label="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="social-button social-button--instagram" aria-label="LinkedIn">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="social-button social-button--youtube" aria-label="Snapchat">
                    <i class="fa fa-youtube"></i>
                </a>

                <a href="#" class="social-button social-button--twitter" aria-label="CodePen">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="info_item" id="info_item_2">
        <div id="info_item_2_img"></div>
        <div class="info_item_texts">
            <div class="info_item_title">Էլ․Հասցե</div>
            <div class="info_item_desc">Hrazdan1@school.am<br>hhajrapetyan@mail.ru</div>
        </div>
    </div>
    <div class="info_item" id="info_item_3">
        <div id="info_item_3_img"></div>
        <div class="info_item_texts">
            <div class="info_item_title">Հեռախոսահամար</div>
            <div class="info_item_desc">+37494008099</div>
        </div>
    </div>
    <div class="info_item" id="info_item_4">
        <div id="info_item_4_img"></div>
        <div class="info_item_texts">
            <div class="info_item_title">Հասցե</div>
            <div class="info_item_desc">ք․Հրազդան,Երևանյան 1/3</div>
        </div>
    </div>
</div>
<div class="pls">
    <div class="pls_img"></div>
    <div class="pls_text">ՀՀԿԳՄՍՆ «Հրազդանի Խաչատուր Աբովյանի անվ․ թիվ1 ավագ դպրոց» ՊՕԱԿ<br>Բոլոր իրավունքները պաշտպանված են</div>
</div>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</body>
</html>

