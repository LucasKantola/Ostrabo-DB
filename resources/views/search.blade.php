@include("../defaults/meta")
<body>
    @include("../defaults/header")
    <main>
        @forelse($results as $result)
            <article>
                <h2>{{$result->title}}</h2>
                <p>{{$result->description}}</p>
                <a href="{{route("show", $result->title)}}">Läs mer</a>
            </article>
        @empty
            <p>Inga resultat hittades</p>
        @endforelse 
    </main>
</body>