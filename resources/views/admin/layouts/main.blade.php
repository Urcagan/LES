<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    @include('include.header')

    <div class="container mt-3">
        @yield('content') <!--// указываем имя секции которую надо вставить в этом месте шаблона-->
    </div>

    @include('include.footer') <!-- Подключить футер -->

</body>
</html>
