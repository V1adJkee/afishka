@guest()
    <a href="{{ route('login') }}" class="font-p mr-auto self-center hover:underline lg:flex">
        Авторизация
    </a>

    <a href="{{ route('register') }}" class="font-p mr-auto self-center hover:underline lg:flex">
        Регистрация
    </a>
@endguest

@auth()
    @can('request-can-full-control')
        <a href="{{ route('requests_list') }}" class="font-p mr-auto self-center hover:underline lg:flex">
            Управление мероприятиями
        </a>
    @endcan

    <a href="/lk-logout" class="font-p mr-auto self-center hover:underline lg:flex">
        Выход
    </a>
@endauth
