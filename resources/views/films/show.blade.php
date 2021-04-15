@extends('layouts.app')

@section('content')
    <section class="hero-slider">
        <ul>
            @for ($i=0;$i<3;$++)
                <li>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tI1JGPhYBS8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
            @endfor
        </ul>
        <nav class="hero-slider__nav">
            <ul>
                <li class="active">
                    <a href="#"><span></span></a>
                </li>
                <li>
                    <a href="#"><span></span></a>
                </li>
                <li>
                    <a href="#"><span></span></a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="item-card">
        <section class="item-card__schedule">
            <span class="block-heading">{{__('Schedule:')}}</span> 
            <span class="city-selector">
                <select name="select"> <!--Supplement an id here instead of using 'name'-->
                    <option value="value1" selected>Москва</option>
                    <option value="value2">Питер</option>
                    <option value="value3">Сочи</option>
                  </select>                  
            </span> 
            <span class="ticket-type">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">3D</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">2D</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="ticket-timetable">
                            <div class="ticket-timetable__days"
                                @for ($i = 0; $i < 7; $i++)
                                    <div class="ticket-timetable__item">
                                        <div class="item__top">
                                            19 Чт
                                        </div>
                                        <div class="item__bottom">
                                            Августа
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="ticket-timetable__hours">
                                <div class="ticket-timetable__label">
                                    {{__('Moskow')}}
                                </div>
                                @for ($i = 0; $i < 7; $i++)
                                    <div class="ticket-timetable__item">
                                        <div class="item__top">
                                            <span>16:40</span>
                                            <span>3D</span>
                                        </div>
                                        <div class="item__bottom">
                                            <span>Зал 1</span>
                                            <span>23/56/120</span>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
            </span>
        </section>
        <section class="item-card__content">
                <div class="item-card__cover">
                    <img src="{{asset('img/film-cover.png')}}">
                </div>
                <div class="item-card__description">
                    <a href="#" class="btn">Купить билет</a>
                    <h1 class="item-heading">Неоновый демон</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="item-card__features">
                    <ul>
                        <li><span>Год</span>2016</li>
                        <li><span>Страна</span>Сша, Франция, Дания</li>
                        <li><span>Жанр</span>Триллеры, Ужасы</li>
                        <li><span>Бюджет</span>7 млн usd</li>
                        <li><span>Возраст</span>зрители, достигшие 18 лет</li>
                        <li><span>Время</span>117 минут</li>
                    </ul>
                </div>
                <div class="item-card__posters">
                    <ul>
                        @for ($i = 0; $i < 5; $i++)
                            <li>
                                <img src="{{asset('img/poster.png')}}">
                            </li>
                        @endfor
                    </ul>
                    <nav class="slider-arrows">
                        <ul>
                            <li>
                                <img src="{{asset('img/icon-arrow-left.png')}}">
                            </li>
                            <li>
                                <img src="{{asset('img/icon-arrow-right.png')}}">
                            </li>
                        </ul>
                    </nav>
                    <nav class="slider-bullets">
                        <ul>
                            <li class="active">
                                <a href="#"><span></span></a>
                            </li>
                            @for ($i = 0; $i < 4; $i++)
                                <li>
                                    <a href="#"><span></span></a>
                                </li>
                            @endfor
                        </ul>
                    </nav>
                </div>

        </section>
    </section>
    <section class="context-ads">
        <img src="{{ asset('img/context-ads.png') }}">
    </section>
@endsection
