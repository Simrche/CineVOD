@extends('layouts.layout')

@if (null !== session('admin'))
    @section('main')

    {!! Form::open(array('route' => 'movie.store', 'method' => 'POST')) !!}

        {!! Form::label("title_movie", 'Titre') !!}
        {!! Form::text("title_movie", null, ['placeholder' => 'Titre du film']) !!}

        <br><br>

        {!! Form::label("prix", 'Prix') !!}
        {!! Form::number("prix", null, ['placeholder' => 'Prix']) !!}

        <br><br>

        {!! Form::label("stock", 'Stock') !!}
        {!! Form::number("stock", null, ['placeholder' => 'Stock']) !!}

        <br><br>

        {!! Form::label("title_categorie", 'Categorie') !!}
        {!! Form::select("title_categorie", $movies, ['placeholder' => 'Type']) !!}

        {!! Form::submit("Ajouter", null) !!}

    {!! Form::close() !!}

    @endsection

@else
    @section('main')
        <h2>Vous devez etre admin pour ajouter des films</h2>
    @endsection

@endif


