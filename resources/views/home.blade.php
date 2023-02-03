<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saints</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <ul>
        @foreach ($saints as $saint)
            <li>{{$saint -> name}} - {{$saint -> miracles_count}}</li>
        @endforeach
    </ul>
</body>

</html>
