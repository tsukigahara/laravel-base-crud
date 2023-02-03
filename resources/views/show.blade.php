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
    {{$saints->name}} <br>
    {{$saints->place_of_birth}} <br>
    {{$saints->blessing_date}} <br>
    {{$saints->miracles_count}} <br>
</body>

</html>
