<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Edutrack') | Edutrack</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
</head>
<body class="select-none">
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>