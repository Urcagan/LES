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
<div class="container">
    <div class="row">
        <nav> <!-- Меню навигации -->
            <ul> <!-- Создает маркированный список. ТЭГ ul -->
                <li><a href="{{route('complex.index')}}">Комплексы</a></li> <!-- Элемент маркированного или нумерованного списка. ТЭГ li -->
                <li><a href="{{route('about.index')}}">О Нас</a></li>
                <li><a href="{{route('contact.index')}}">Контакты</a></li>
            </ul>
        </nav>
    </div>

    @yield('content') <!--// указываем имя секции которую надо вставить в этом месте шаблона-->
</div>



</body>
</html>
