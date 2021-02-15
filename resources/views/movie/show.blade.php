@extends('layouts.layout')


@section('main')
    <h1>{{$movie->title_movie}}</h1>
    <ul>
        <li>Prix : {{$movie->prix}}</li>
        <li>Stock : {{$movie->stock}}</li>
        <li><img src="{{$movie->img}}" alt="Affiche film"></li>
    </ul>

    <a href="{{route('movie.index')}}" class="btn btn-dark">retourner à la liste des films</a>

    @if (null !== session('admin'))
        {!! Form::open(array('route' => ['movie.destroy', $movie->id], 'method' => 'DELETE')) !!}

        {!! Form::submit("Supprimer", ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

        <a href="<?= $movie->id?>/edit" class="btn btn-primary">Editer</a>
    @endif

        {!! Form::open(array('route' => ['panier.store'], 'method' => 'POST')) !!}

        {!! Form::text('id', $movie->id, ['class' => 'none']) !!}

        <br>
        {!! Form::submit("Ajouter au panier", ['class' => 'btn btn-dark']) !!}

        {!! Form::close() !!}

        <br>
    <h2>Autre proposition :</h2>
    <ul id="listOtherMovie">
        @foreach ($otherMovie as $otherMovies)
            <li><a href="{{route('movie.show', ['movie' => $otherMovies->id])}}" class="movieButton" style="background-image: url('{{$otherMovies->img}}')">{{$otherMovies->title_movie}}</a></li>
        @endforeach
    </ul>
@endsection
