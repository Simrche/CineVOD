@if (auth()->check())

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Scripts -->
   <script src="{{ mix('js/app.js') }}" defer></script>


@include('navigation-menu')

<a href="{{route('movie.create')}}" id="ajoutFilm">Ajouter un film</a>

    <section id="allFilms">

        @foreach ($movie as $movies)

            <div class="filmList">
                <h4>{{$movies->title_movie}}</h4>
                <div>
                    <a href="{{route('movie.show', ['movie' => $movies->id])}}">Voir</a>
                    <a href="{{route('movie.edit', ['movie' => $movies->id])}}" class="btn btn-primary">Editer</a>
                    {!! Form::open(array('route' => ['movie.destroy', $movies->id], 'method' => 'DELETE')) !!}

                    {!! Form::submit("Supprimer", ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach



    </section>

@else

    <h2>Vous devez vous connectez pour acceder à cette page ! </h2>

@endif
