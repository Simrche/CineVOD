@if (auth()->check())

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
   <script src="{{ mix('js/app.js') }}" defer></script>

@include('navigation-menu')

@else

    <h2>Vous devez vous connectez pour acceder à cette page ! </h2>

@endif
