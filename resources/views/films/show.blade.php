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
    </section>

@endsection
