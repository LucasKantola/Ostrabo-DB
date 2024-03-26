@include("../defaults/meta")
<link rel="stylesheet" href="{{asset("style/search.css")}}">
<link rel="stylesheet" href="{{asset("style/searchbar.css")}}">
</head>
<body>
    @include("../defaults/header")
    <main class="h100">
        @include("../defaults/searchbar")
        <div class="flex-column w100">
            <h2 class="r-head w100 flex-center">Visar resultat för:</h2>
            <h2 class="r-search w100 flex-center">"{{$search}}"</h2>
            <p class="r-amount w100 flex-center">Sökningen gav {{$searchRes}} träffar</p>
        </div>
        @forelse($results as $result)
            <article class="h100 selectable">
                <a href="{{route("show", $result->id)}}" class="wh100 flex-column">
                    <h2>{{$result->title}}</h2>
                    <p>{{$result->description}}</p>
                    <div class="bottom">
                        <p class="author">{{$result->author." ".$result->class}}</p>
                        <p class="date">{{$result->date}}</p>
                    </div>
                </a>
            </article>
        @empty
            <p>Inga resultat hittades</p>
        @endforelse 
    </main>
</body>