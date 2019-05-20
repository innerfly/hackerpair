<!DOCTYPE html>
<html>
<head>
    <title>Vue Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    @yield("content")
</div>
<script src="/js/app.js"></script>
</body>
</html>