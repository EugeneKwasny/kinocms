<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <a href="#"><img src="{{ asset('img/logo.png') }}"></a>
        </div>
       <div class="menu-wrapper">
            <div class="before-menu">
                <div class="search-form">
                    <input type="search" value="" placeholder="{{__('Search')}}">
                </div>
                <div class="social-follow">{{__('Social Follow links placeholder ')}}</div>
                <div class="contacts">
                    <ul>
                        <li>(048)777-77-77</li>
                        <li>(048)777-77-77</li>
                    </ul>
                </div>
            </div>
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="#">Афиша</a>
                    </li>
                    <li>
                        <a href="#">Расписание</a>
                    </li>
                    <li>
                        <a href="#">Скоро</a>
                    </li>
                    <li>
                        <a href="#">Кинотеатры</a>
                    </li>
                    <li>
                        <a href="#">Акции</a>
                    </li>
                    <li>
                        <a href="#">О кинотеатре</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Новости</a>
                            </li>
                            <li>
                                <a href="#">Реклама</a>
                            </li>
                            <li>
                                <a href="#">Кафе</a>
                            </li>
                            <li>
                                <a href="#">Мобильные приложения</a>
                            </li>
                            <li>
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="language-switcher">
                    <ul>
                        <li>
                            <a href="#">Рус</a>
                        </li>
                        <li>
                            <a href="#">Eng</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="site-foter">
        <div class="footer-widgets">
            <div class="app-links">
                <h5 class="widget-heading">Мобильные приложения</h5>
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/gplay.png')}}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/app-store.png')}}">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h5 class="widget-heading">Афиша</h5>
                <ul>
                    <li>
                        <a href="#">
                            Расписание
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Скоро в прокате
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Кинотеатры
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Акции
                        </a>
                    </li>
                </ul>
                <span class="credits">Разработка сайта Avada-Media</span>
            </div>
            <div class="footer-menu">
                <h5 class="widget-heading">О кинотеатре</h5>
                <ul>
                    <li>
                        <a href="#">
                            Расписание
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Скоро в прокате
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Кинотеатры
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Акции
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/icon-fb.png')}}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/icon-tw.png')}}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/icon-vk.png')}}">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('img/icon-ok.png')}}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">{{__('KinoCMS. All rights reserved')}}</div>
    </footer>
</body>
</html>
