<div class="container">
    <h1>Movies:</h1>
    <div class="movies-ctn">
        @foreach ( $movies as $movie)
            <h2>Title: {{ $movie->title }}</h2>
            <h2>Original Title: {{$movie->original_title}}</h2>
            <p>nationality: {{ $movie->nationality }}</p>
            <p>date: {{$movie->date}}</p>
        @endforeach
    </div>
</div>