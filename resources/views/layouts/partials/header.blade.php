<header id="header">
    <div id="headerLeft">
        <img src="{{ asset('img/cinema.png')}}" alt="Logo site">
        <h1>CinéVOD</h1>
    </div>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/category">Catégorie</a></li>
            <li><a href="/movie">Films</a></li>
            @if (null !== session('admin'))
                <li><a href="/deco">Deconnexion</a></li>
            @else
                <li><a href="/admin">Admin</a></li>
            @endif
        </ul>
    </nav>
</header>
