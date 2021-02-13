@extends('layouts.layout')

@section('main')
    <section id="allCategory">
        @if (null !== session('admin'))
            <a href="{{route('movie.create')}}" class="movieButton">+</a>
        @endif
        @foreach ($movie as $movies)
            <a href="{{route('movie.show', ['movie' => $movies->id])}}" class="movieButton" style="background-image: url('{{$movies->img}}')">{{$movies->title_movie}}</a>
        @endforeach

    </section>
@endsection
