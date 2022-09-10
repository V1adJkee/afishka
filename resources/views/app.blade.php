<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta')

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery.typeahead.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/rescalendar.min.css') }}" rel="stylesheet">

    <title>{{$title ?? 'Afishka - актуальные мероприятия и активы в городе Альметьевск'}}</title>

    <link rel="icon" href="{{ asset('favicon/Afishka.svg') }}" sizes="any" type="image/svg+xml">
    @livewireStyles

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/jquery.typeahead.min.js') }}"></script>
</head>
<body>
<body class="flex min-h-screen flex-col justify-between bg-sw">
<livewire:layouts.header/>
<div class="container mx-auto flex-1 px-3">
    @yield('content')
</div>
<livewire:layouts.footer/>
@livewireScripts
<script src="{{ asset('/js/app.js') }}"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
