<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Database</title>
    <!-- Include any CSS files here -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('public\O1-logo.png') }}" alt="Logo 1">
            <img src="{{ asset('public\Uddevalla gymnasieskola logotyp.png') }}" alt="Logo 2">
        </div>
    </header>
    <main>
        <div class="search-bar">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="browse-options">
            <button>Browse</button>
            <button>Websites</button>
            <button>Games</button>
            <button>Practical</button>
        </div>
        <!-- Document listings can go here -->
    </main>
    <!-- Include any JS files here -->
</body>
</html>
