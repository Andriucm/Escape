<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/grupos.css') }}" />
    <title>{{ $title }}</title>

    @vite('resources/js/app.js')

</head>
<body>
    <div id="headerSection"></div>

    <div id="mainSection" style="width: 100%; height: 100%;">
        {{ $slot }}
    </div>

    <div id="footerSection"></div>
</body>
</html>
