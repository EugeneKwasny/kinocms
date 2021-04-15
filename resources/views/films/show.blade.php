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

    </section>
@endsection
