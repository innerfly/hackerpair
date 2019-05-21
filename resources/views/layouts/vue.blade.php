<!DOCTYPE html>
<html>
<head>
    <title>Vue Examples</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    <div id="app">
        @yield("content")
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>