@extends('layouts/layout')

@section('main')
    {!! Form::open(array('route' => 'admin.store', 'method' => 'POST')) !!}

    {!! Form::label("name", 'Name') !!}
    {!! Form::text("name", null, ['placeholder' => 'Name']) !!}

    <br><br>

    {!! Form::label("password", 'Mdp') !!}
    {!! Form::password("password", null) !!}

    <br><br>

    {!! Form::submit("Connexion", null) !!}

    <br><br>

    {!! Form::close() !!}
@endsection
