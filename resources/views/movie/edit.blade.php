@extends('layouts.layout')

@section('main')

<h1>Editer</h1>

<a href="{{route('movie.index')}}">retourner à la liste des films</a>

{!! Form::open(array('route' => ['movie.update', $movies->id], 'method' => 'PUT')) !!}

    {!! Form::label("title_categorie", 'Modifier le titre') !!}
    {!! Form::text("title_categorie", $movies->title_movie) !!}

    <br><br>

    {!! Form::label("prix", 'Modifier le prix') !!}
    {!! Form::number("prix", $movies->prix) !!}

    <br><br>

    {!! Form::label("stock", 'Modifier le stock') !!}
    {!! Form::number("stock", $movies->stock) !!}

    <br><br>

    {!! Form::submit("Modifier", null) !!}

{!! Form::close() !!}

@endsection
