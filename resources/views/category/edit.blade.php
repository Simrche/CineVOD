@extends('layouts.layout')

@section('main')

<h1>Editer</h1>

<a href="{{route('category.index')}}">retourner à la liste des catégories</a>

{!! Form::open(array('route' => ['category.update', $category->id], 'method' => 'PUT')) !!}

    {!! Form::label("title_categorie", 'Modifier le titre') !!}
    {!! Form::text("title_categorie", $category->title_categorie) !!}

    {!! Form::submit("Modifier", null) !!}

{!! Form::close() !!}

@endsection
