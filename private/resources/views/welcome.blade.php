<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Torofun Admin Panel</title>

        <link rel="stylesheet" href="{{mix('css/all.css')}}">
             
    </head>
    <body>
        <div id="app">
            <mainapp></mainapp>
        </div>
        <script src="{{mix('js/app.js')}}" defer></script>
    </body>
</html>
