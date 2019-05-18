<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to HackerPair</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="container" style="margin-top: 20px;">
    @include('flash::message')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>