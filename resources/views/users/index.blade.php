<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="pt-3">
    <div id="app">
        <div class="container">

            <users-list></users-list>
        </div>

    </div>
    <script src="/js/app.js"></script>
</body>
</html>
