@extends('layouts.layout')


@section('main')
    <h1>Categorie {{$category->id}}</h1>
    <h2>{{$category->title_categorie}}</h2>

    <a href="{{route('category.index')}}">retourner à la liste des catégories</a>

    @if (null !== session('admin'))
        {!! Form::open(array('route' => ['category.destroy', $category->id], 'method' => 'DELETE')) !!}

        {!! Form::submit("Supprimer") !!}

        {!! Form::close() !!}

        <a href="<?= $category->id?>/edit">Editer</a>
    @endif


<ul>
    @foreach ($movies as $item)
        <li><a href="{{route('movie.show', ['movie' => $item->id])}}">{{$item->title_movie}}</a></li>
    @endforeach
</ul>

@endsection
