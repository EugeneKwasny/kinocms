@extends('layouts.app')

@section('content')
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
@endsection