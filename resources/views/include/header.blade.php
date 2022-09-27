
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="{{route('complexes.index')}}" class="nav-link px-2 text-white">Комплексы</a></li>
                <li><a href="{{route('plants.index')}}" class="nav-link px-2 text-white">Установки</a></li>
                <li><a href="{{route('about.index')}}" class="nav-link px-2 text-white">О нас</a></li>
                <li><a href="{{route('contact.index')}}" class="nav-link px-2 text-white">Контакты</a></li>
            </ul>

            <div class="text-end">
                <a type="button" class="btn btn-outline-light me-2" href="{{ route('login') }}">Login</a>

                <a class="btn btn-warning" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
</header>

