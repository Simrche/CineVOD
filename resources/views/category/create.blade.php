@extends('layouts.layout')

@if (null !== session('admin'))
    @section('main')

    {!! Form::open(array('route' => 'category.store', 'method' => 'POST')) !!}

        {!! Form::label("title_categorie", 'Titre') !!}
        {!! Form::text("title_categorie", null, ['class' => 'col-6 form-control', 'placeholder' => 'Titre']) !!}

        <br><br>

        {!! Form::label("img", 'Image') !!}
        {!! Form::text("img", null, ['class' => 'col-6 form-control', 'placeholder' => 'Url image']) !!}

        <br><br>

        {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

    @endsection
@else
    @section('main')
        <h2>Vous devez être admin pour rajoutere des catégories !</h2>
    @endsection
@endif
