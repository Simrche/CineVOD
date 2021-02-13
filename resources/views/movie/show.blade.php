@extends('layouts.layout')


@section('main')
    <h1>{{$movie->title_movie}}</h1>
    <ul>
        <li>Prix : {{$movie->prix}}</li>
        <li>Stock : {{$movie->stock}}</li>
        <li><img src="{{$movie->img}}" alt="Affiche film"></li>
    </ul>

    <a href="{{route('movie.index')}}">retourner à la liste des films</a>

    @if (null !== session('admin'))
        {!! Form::open(array('route' => ['movie.destroy', $movie->id], 'method' => 'DELETE')) !!}

        {!! Form::submit("Supprimer") !!}

        {!! Form::close() !!}

        <a href="<?= $movie->id?>/edit">Editer</a>
    @endif



    <h2>Autre proposition :</h2>
    <ul>
        @foreach ($otherMovie as $otherMovies)
            <li><a href="{{route('movie.show', ['movie' => $otherMovies->id])}}">{{$otherMovies->title_movie}}</a></li>
        @endforeach
    </ul>
@endsection
