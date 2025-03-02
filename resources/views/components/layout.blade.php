<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href='http://fonts.googleapis.com/css?family=Urbanist' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/x-icon" href="/img/LogoFavicon.png">
</head>
<body>

    <x-navbar/>

    <div class="container-fluid">
        
        {{$slot}}
        
    </div>

    <x-footer/>
</body>
</html>
