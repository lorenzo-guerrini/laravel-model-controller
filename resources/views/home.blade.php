<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Movies</h1>
    <div class="container">
        @foreach ($moviesList as $item)
            <div class="card">
                <h3>{{ $item->title }} ({{ $item->original_title }})</h3>

                <ul>
                    <li>Nationality: {{ $item->nationality }}</li>
                    <li>Date: {{ $item->date }}</li>
                    <li>Vote: {{ $item->vote }}</li>
                </ul>
            </div>
        @endforeach
    </div>
</body>

</html>
