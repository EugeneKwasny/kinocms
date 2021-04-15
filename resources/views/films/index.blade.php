@extends('layouts.app')

@section('content')
    <section class="container">
        <aside class="site-sidebar">
            <div class="widget sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="#">Афиша</a>
                    </li>
                    <li>
                        <a href="#">Скоро</a>
                    </li>
                </ul>
            </div>
            <div class="widget adblock">
                <a href="#">
                    <img scr="{{asset('img/banner.png')}}"
                </a>
            </div>
        </aside>
        <section class="items-grid">
            <ul>
                @for ($i=0;$i<18;$i++)
                    <li class="grid-item">
                        <a href="#" class="grid-item__thumbnail">
                            <img src="{{ asset('img/grid-cover.png') }}">
                            <span class="badge">3d</span>
                            <span class="badge">DBOX</span>
                            <span class="badge">12+</span>
                        </a>
                        <a href="#" class="grid-item__heading">
                            Иллюзия обмана
                        </a>
                        <a href="#" class="grid-item__cta">Купить</a>
                    </li>      
                @endfor
            </ul>
        </section>
    </section>
@endsection
