@include('../defaults/meta')
<link rel="stylesheet" href="{{asset("style/landing.css")}}">
</head>

<body> 
    @include('../defaults/header')
    <main>
        <h1 class="welcome">Välkommen till Östrabo DB</h1>
        <h2 class="subtitle">En databas för Gymnasiearbeten genom tiderna. Ett bra ställe att hitta inspiration och se vad för kul andra har hittat på</h2>

        <form class="search-bar" method="GET" action="{{route("search.search")}}">
            <input type="text" name="search" placeholder="Sök...">
            <button id="submit" for="submit">
                <span class="shadow"></span>
                <span class="edge"></span>
                <span class="front text"><img src="{{asset("svg/search.svg")}}" alt="search icon svg"> Sök</span>
            </button>
        </form>
        
        <div class="browse-options">
            <article>
                <img src="{{asset("svg/explore.svg")}}" alt="plus icon svg">
                <span></span>
                <div class="text-container">
                    <h3>Få inspiration</h3>
                    <p>av gammla arbeten inlämnade genom tiderna!</p>
                </div>
            </article>
            <article>
                <img src="{{asset("svg/wrench.svg")}}" alt="plus icon svg">
                <span></span>
                <div class="text-container">
                    <h3>Kika på</h3>
                    <p>praktiska arbeten och deras resultat!</p>
                </div>
            </article>
            <article>
                <img src="{{asset("svg/plus.svg")}}" alt="plus icon svg">
                <span></span>
                <div class="text-container">
                    <h3>Lägg till ditt arbete!</h3>
                    <p>Lämna in ditt färdiga arbete till databasen!</p>
                </div>
            </article>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Lucas Kantola TE21B</p>
    </footer>
</body>
</html>
