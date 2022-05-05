@extends('layouts.app')


@section('content')
    <div class="gallery-container">
        <h1 id="gallery-title" class="gallery-title" data-id="{{ get_the_ID() }}">{!! get_the_title() !!}</h1>
    </div>

    <div class="gallery-container--mobile">
        <h1 id="gallery-title" class="gallery-title" data-id="{{ get_the_ID() }}">{!! get_the_title() !!}</h1>
        <ul class="gallery-list">
            @foreach ($images as $image)
                <li class="gallery-list__item">
                    @php
                        echo wp_get_attachment_image($image['image']['ID'], 'large', ' ', ['class' => 'img-responsive']);
                    @endphp
                </li>
            @endforeach
        </ul>
    </div>
@endsection
