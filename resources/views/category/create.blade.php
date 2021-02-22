@extends('layouts.layout')

@if (auth()->check())
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
<ul>
    @foreach ($category as $categories)
    <li class="filmList">
        {{$categories->title_categorie}}
        <div>
            <a href="{{route('category.edit', ['category' => $categories->id])}}" class="btn btn-primary">Editer</a>
            {!! Form::open(array('route' => ['category.destroy', $categories->id], 'method' => 'DELETE')) !!}

            {!! Form::submit("Supprimer", ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>

    </li>

    @endforeach
</ul>


    @endsection
@else
    @section('main')
        <h2>Vous devez être admin pour rajoutere des catégories !</h2>
    @endsection
@endif
