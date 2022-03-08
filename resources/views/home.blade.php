<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($moviesList as $item)
            <li>
                {{ $item->title }} ({{$item->original_title}})
                <ul>
                    <li>Nationality: {{ $item->nationality }}</li>
                    <li>Date: {{ $item->date }}</li>
                    <li>Vote: {{ $item->vote }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
</body>

</html>
