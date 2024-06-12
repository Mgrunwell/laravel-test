<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genres:</h1>
    @foreach ($genres as $genre)
       <p>{{ $genre->name }}</p> 
    @endforeach

    <p>{{ $movie->genres }}</p>
    <p>$genre->movies</p>

</body>
</html>