<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gympoint Web PHP Version</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body id="root">
        @yield ('header')
        @yield ('content')
    </body>
</html>
