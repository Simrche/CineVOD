@extends('layouts.layout')

@section('main')
<?php
$totalPrix = 0;
$totalFilm = 0;
?>
<section id="sectionPanier">
    @if (isset($valeurs))
        @foreach ($valeurs as $valeur)
        <div class="productPanier">
            <p>{{ $valeur[0]->title_movie }}</p>
            <p>{{ $valeur[0]->prix }}€</p>
            <?php
            $totalPrix += $valeur[0]->prix;
            $totalFilm++;
            ?>
        </div>
        @endforeach
    @endif
    Total film : <?= $totalFilm?><br>
    Total prix : <?= $totalPrix?>€

    {!! Form::open(array('route' => ['panier.destroy', '1'], 'method' => 'DELETE')) !!}

    {!! Form::submit("Vider le panier", ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}
</section>



@endsection
