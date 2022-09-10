 <div class="flex w-full flex-col mt-[115px] md:mt-[76px]">
        <div class="py-3 border-bottom z-20 mb-3 items-center flex fixed top-0 w-full bg-light-blue-s lg:px-5">
            <div class="container flex flex-wrap px-3 mx-auto">
                <a href="/"
                   class="font-a flex w-20 text-lg pt-1 font-black hover:no-underline">{{env('APP_NAME', 'Afishka')}}</a>
                <livewire:layouts.search/>

                <a href="#" class="font-p ml-auto mr-[14px] self-center hover:underline lg:ml-4">
                    Мероприятия
                </a>

                <a href="#" class="font-p mr-auto self-center hover:underline lg:flex">
                    Виды мероприятий
                </a>

                <livewire:layouts.auth/>
            </div>
        </div>
 </div>
