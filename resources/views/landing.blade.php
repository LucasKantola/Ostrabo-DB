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
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ url('/browse') }}">Browse</a></li>
                <li><a href="#">Add Work</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="welcome">Välkommen till Östrabo DB</h1>
        <h2></h2>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
        <div class="browse-options">
            <button>Utforska</button>
            <button>Praktiska Arbeten</button>
        </div>
    </main>
    <footer>
        <p class="center bottom">&copy; 2024 Lucas Kantola TE21B</p>
    </footer>
</body>
</html>
