@extends('app')

@section('content')
    <div>
        Вы успешно авторизовались...
    </div>

    <div class="mt-6">
        <a href=" {{ route('index') }}" class="bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-light-blue-s text-black">
            🚀 Вернуться на главную
        </a>
    </div>
@endsection
