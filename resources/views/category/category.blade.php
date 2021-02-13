@extends('layouts.layout')

@section('main')
    <section id="allCategory">
        @if (null !== session('admin'))
            <a href="{{route('category.create')}}" class="categoryButton">+</a>
        @endif
        @foreach ($category as $categorie)
            <a href="{{route('category.show', ['category' => $categorie->id])}}" class="categoryButton">{{$categorie->title_categorie}}</a>
        @endforeach

    </section>
@endsection
