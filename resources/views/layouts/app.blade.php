<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="contenedor-app">
        <div class="imagen"></div>
        <div class="app">
            
            @yield("login")
            @yield("create")
            @yield("forget")
            
            
        </div>
    </div>

</body>
</html>