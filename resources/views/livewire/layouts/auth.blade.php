@guest()
    <a href="{{ route('login') }}" class="font-p mr-auto self-center hover:underline lg:flex">
        Авторизация
    </a>

    <a href="{{ route('register') }}" class="font-p mr-auto self-center hover:underline lg:flex">
        Регистрация
    </a>
@endguest

@auth()
    @can('event-can-full-control')
        <a href="#" class="font-p mr-auto self-center hover:underline lg:flex">
            Админ-центр
        </a>
    @endcan

    @can('request-can-create')
        <a href="#" class="font-p mr-auto self-center hover:underline lg:flex">
            Мои мероприятия
        </a>
    @endcan

    <a href="/lk-logout" class="font-p mr-auto self-center hover:underline lg:flex">
        Выход
    </a>
@endauth
