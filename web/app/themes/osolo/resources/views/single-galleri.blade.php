@extends('layouts.app')


@section('content')
    <div class="gallery-container">
        <h1 id="gallery-title" class="gallery-title" data-id="{{ get_the_ID() }}">{!! get_the_title() !!}</h1>
    </div>
@endsection
