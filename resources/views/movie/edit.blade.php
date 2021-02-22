@extends('layouts.layout')

@if (auth()->check())
@section('main')

<h1>Editer</h1>

<a href="{{route('movie.index')}}">retourner à la liste des films</a>

{!! Form::open(array('route' => ['movie.update', $movies->id], 'method' => 'PUT')) !!}

    {!! Form::label("title_movie", 'Modifier le titre') !!}
    {!! Form::text("title_movie", $movies->title_movie) !!}

    <br><br>

    {!! Form::label("prix", 'Modifier le prix') !!}
    {!! Form::number("prix", $movies->prix) !!}

    <br><br>

    {!! Form::label("stock", 'Modifier le stock') !!}
    {!! Form::number("stock", $movies->stock) !!}

    <br><br>

    {!! Form::label("img", "Modifier l'image") !!}
    {!! Form::text("img", $movies->img) !!}

    <br><br>

    {!! Form::submit("Modifier", null) !!}

{!! Form::close() !!}

@endsection

@else

@section('main')
    <h2>Vous devez vous connectez pour acceder à cette page ! </h2>
@endsection


@endif
