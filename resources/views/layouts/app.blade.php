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
            <section class="items-grid">
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
        <section class="comming-soon">
            <h3 class="section-header">Смотрите скоро</h3>
            <section class="items-grid">
                <ul>
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <div class="grid-item__eta">c 1 cсентября</div>
                    </li>

                </ul>

            </section>
        </section>
        <section class="news">
            <a href="#"><img src="{{ asset('img/news-block.png') }}"></a>
        </section>
        <section class="context-ads">
            <img src="{{ asset('img/context-ads.png') }}">
        </section>
        <section class="page-description">
            <h3 class="section-heading">{{__('About US')}}</h3>
            <section class="page-description__text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </section>
        </section>
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
        <div class="copyright">KinoCMS. All rights reserved</div>
    </footer>
</body>
</html>
