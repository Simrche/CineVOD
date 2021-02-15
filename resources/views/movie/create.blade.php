@extends('layouts.layout')

@if (null !== session('admin'))
    @section('main')

    {!! Form::open(array('route' => 'movie.store', 'method' => 'POST')) !!}

        {!! Form::label("title_movie", 'Titre') !!}
        {!! Form::text("title_movie", null, ['class' => 'col-6 form-control', 'placeholder' => 'Titre']) !!}

        <br><br>

        {!! Form::label("prix", 'Prix') !!}
        {!! Form::number("prix", null, ['class' => 'col-6 form-control', 'placeholder' => 'Prix']) !!}

        <br><br>

        {!! Form::label("stock", 'Stock') !!}
        {!! Form::number("stock", null, ['class' => 'col-6 form-control', 'placeholder' => 'Stock']) !!}

        <br><br>

        {!! Form::label("title_categorie", 'Categorie') !!}
        {!! Form::select("title_categorie", $movies, ['class' => 'col-6 form-control', 'placeholder' => 'Categorie']) !!}

        <br><br>

        {!! Form::label("img", 'img') !!}
        {!! Form::text("img", null, ['class' => 'col-6 form-control', 'placeholder' => 'Image']) !!}

        <br><br>

        {!! Form::submit("Ajouter", ['class' => 'btn btn-success', 'placeholder' => 'Categorie']) !!}

    {!! Form::close() !!}

    @endsection

@else
    @section('main')
        <h2>Vous devez etre admin pour ajouter des films</h2>
    @endsection

@endif


