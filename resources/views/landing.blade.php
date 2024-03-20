<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Östrabo DB</title>
    <link rel="stylesheet" href="https://use.typekit.net/skk6qik.css">
    <link rel="stylesheet" href="{{asset("style/landing.css")}}">
    <link rel="stylesheet" href="{{asset("style/defaults.css")}}">
</head>
<body>
    <header>
        <div class="logo">  
            <img src="{{ asset('Uddevalla gymnasieskola logotyp.png') }}" alt="Uddevalla Gymnasieskola logotyp">
            <img src="{{ asset('O1-logo.png') }}" alt="Östrabo1 Uddevalla Gymnasieskola logotyp">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li><a href="{{ url('/browse') }}">Utforska</a></li>
                <li><a href="#">Nytt arbete</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="welcome">Välkommen till Östrabo DB</h1>
        <h2 class="subtitle">En databas för Gymnasiearbeten genom tiderna. Ett bra ställe att hitta inspiration och se vad för kul andra har hittat på</h2>
        <div class="search-bar">
            <input type="text" placeholder="Sök...">
            <button>
                <span class="shadow"></span>
                <span class="edge"></span>
                <span class="front text"><img src="{{asset("svg/search.svg")}}" alt="search icon svg"> Sök</span>
            </button>
        </div>
        <div class="browse-options">
            <article>
                <img src="{{asset("svg/plus.svg")}}" alt="plus icon svg">
            </article>
        </div>
    </main>
    
    <footer>
        <p class="center bottom">&copy; 2024 Lucas Kantola TE21B</p>
    </footer>
</body>
</html>
