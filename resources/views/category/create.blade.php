@extends('layouts.layout')

@if (null !== session('admin'))
    @section('main')

    {!! Form::open(array('route' => 'category.store', 'method' => 'POST')) !!}

        {!! Form::label("title_categorie", 'Titre') !!}
        {!! Form::text("title_categorie", null, ['placeholder' => 'Titre de la catégorie']) !!}

        <br><br>

        {!! Form::label("img", 'Image') !!}
        {!! Form::text("img", null, ['placeholder' => 'Url image']) !!}

        {!! Form::submit("Ajouter", null) !!}

    {!! Form::close() !!}

    @endsection
@else
    @section('main')
        <h2>Vous devez être admin pour rajoutere des catégories !</h2>
    @endsection
@endif
