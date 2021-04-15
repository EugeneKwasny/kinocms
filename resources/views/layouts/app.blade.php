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
        <section class="hero-slider">
            <ul>
                <li>
                    <img src="{{ asset('img/slider.png') }}">
                </li>
                <li>
                    <img src="{{ asset('img/slider.png') }}">
                </li>
                <li>
                    <img src="{{ asset('img/slider.png') }}">
                </li>
            </ul>
            <div class="app-links">
                <ul>
                    <li>
                        <a href="#"><img src="{{ asset('img/gplay.png') }}"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('img/appstore.png') }}"></a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="view-today">
            <h3 class="section-header">Смотрите сегодня, <span>24 июля</span></h3>
            <section class="view-today__grid">
                <ul>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                </ul>
                <ul>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                </ul>
                <ul>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить билет</a>
                    </li>
                </ul>
            </section>
        </section>
    </main>

</body>
</html>
