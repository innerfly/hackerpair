<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to HackerPair</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>