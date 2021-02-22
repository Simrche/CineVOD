@extends('layouts/layout')

@section('main')
    {!! Form::open(array('route' => 'admin.store', 'method' => 'POST')) !!}

    {!! Form::label("name", 'Name') !!}
    {!! Form::text("name", null, ['class' => 'col-6 form-control', 'placeholder' => 'Name']) !!}

    <br><br>

    {!! Form::label("password", 'Mdp') !!}
    {!! Form::password("password", ['class' => 'col-6 form-control', 'placeholder' => 'Mot de passe']) !!}

    <br><br>

    {!! Form::submit("Connexion", ['class' => 'btn btn-success']) !!}

    <br><br>

    {!! Form::close() !!}
@endsection
