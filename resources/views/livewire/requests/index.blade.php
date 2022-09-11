<div class="mt-2 md:mt-6">
    <h1 class="text-4xl">Вы хотите получить статус <span class="underline text-blue-400">Организатора</span>?</h1>

    <div class="mt-6 text-lg">
        <p class="mt-3 md:mt-0 hover:text-rose-600">Для получения статуса <span class="underline">Организатора</span> на нашем сайте, необходимо заполнить форму ниже.</p>
        <p class="mt-3 md:mt-0 hover:text-rose-600">Заявка рассматривается в течении 48 часов.</p>
        <p class="mt-3 md:mt-0 hover:text-rose-600">Отслеживать статус заявки вы сможете на этой странице.</p>
    </div>

    @if($openRequest)
        <div class="mt-6 mb-10 text-lg">
            <p>Ваша <span class="underline text-blue-400 font-bold">Заявка №{{$openRequest['id']}}</span> в данный момент рассматривается...</p>
        </div>

        <a href=" {{ route('index') }}" class="bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-light-blue-s text-black">
            🚀 Вернуться на главную
        </a>
    @else
        @auth()
        <div class="mt-6 mb-10 block p-6 rounded-lg shadow-lg max-w-sm">
            <form method="POST" action="{{ route('requests_create') }}">
                @csrf

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Укажите своё Имя</label>
                    <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-rose-600 @enderror" placeholder="Например: Василий" required="" value="{{ old('name') }}" max="48" min="3" autofocus>

                    @error('name')
                    <div class="mt-4 mb-4 p-4 rounded bg-red-100" role="alert">
                        <span class="font-medium">Ошибка</span> {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Введите контактный E-mail</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-rose-600 @enderror" placeholder="Например: name@company.com" required="" value="{{ old('email') }}"  min="6" max="255" autofocus>

                    @error('email')
                    <div class="mt-4 mb-4 p-4 rounded bg-red-100" role="alert">
                        <span class="font-medium">Ошибка</span> {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Введите контактный номер мобильного телефона</label>
                    <input type="phone_number" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('phone_number') border-rose-600 @enderror" placeholder="Например: 89178562426" required="" value="{{ old('phone_number') }}" min="9" max="13" autofocus>

                    @error('phone_number')
                    <div class="mt-4 mb-4 p-4 rounded bg-red-100" role="alert">
                        <span class="font-medium">Ошибка</span> {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="about_me" class="block mb-2 text-sm font-medium text-gray-900">Кратко расскажите о мероприятиях, которые вы проводите</label>
                    <input type="text" name="about_me" id="about_me" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('about_me') border-rose-600 @enderror" placeholder="Например: Несколько раз организовывал мероприятие N на площадке C" required="" value="{{ old('about_me') }}" min="10" max="255" autofocus>

                    @error('about_me')
                    <div class="mt-4 mb-4 p-4 rounded bg-red-100" role="alert">
                        <span class="font-medium">Ошибка</span> {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="mt-4 w-full md:w-1/2 text-black bg-light-blue-s hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-light-blue-s">Зарегистрироваться</button>
            </form>
        </div>
        @else
            <div class="mt-10 mb-10 text-lg">
                <p class="pl-2">🚀 <a class="hover:underline text-blue-400" href="{{ route('login') }}">Авторизуйтесь</a> для создания заявки</p>
            </div>
        @endauth
    @endif

</div>
