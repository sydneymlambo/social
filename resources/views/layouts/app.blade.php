<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Social</title>
</head>
<body class="bg-gray-200">
    @include('includes.navigation')
    @yield('content')
</body>
</html>