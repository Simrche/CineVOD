@extends('layouts.layout')


@section('main')
    <h1>Categorie {{$category->id}}</h1>
    <h2>{{$category->title_categorie}}</h2>
    <img src="{{$category->img}}" alt="film affiche" style="width: 20%">

    <br><br>

    <a href="{{route('category.index')}}" class="btn btn-dark">retourner à la liste des catégories</a>

    @if (null !== session('admin'))
        {!! Form::open(array('route' => ['category.destroy', $category->id], 'method' => 'DELETE')) !!}

        {!! Form::submit("Supprimer", ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

        <a href="<?= $category->id?>/edit" class="btn btn-dark">Editer</a>
    @endif

    <h2>Films :</h2>

<ul id="listOtherMovie">
    @foreach ($movies as $item)
        <li><a href="{{route('movie.show', ['movie' => $item->id])}}" class="movieButton" style="background-image: url('{{$item->img}}')">{{$item->title_movie}}</a></li>
    @endforeach
</ul>

@endsection
