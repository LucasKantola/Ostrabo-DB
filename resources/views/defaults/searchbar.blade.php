<form class="search-bar" method="GET" action="{{route("search")}}">
    <input type="text" name="search" placeholder="Sök..." value="{{empty($search) ? "" : $search}}">
    <button id="submit" for="submit">
        <span class="shadow"></span>
        <span class="edge"></span>
        <span class="front text"><img src="{{asset("svg/search.svg")}}" alt="search icon svg"> Sök</span>
    </button>   
</form>