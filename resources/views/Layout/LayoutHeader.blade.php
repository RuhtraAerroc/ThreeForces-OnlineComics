{{-- DESKTOP --}}
<header class="hidden lg:flex flex-col justify-center text-violet-50 text-lg">
    {{-- HEADER --}}
    <div class="row-span-1 grid grid-cols-5 w-full h-20 max-h-full bg-violet-700">
        <div class="col-span-1 grid">
            <div class="flex justify-center items-center h-full w-full">
                <img class="h-20 xl:p-0 p-2" src="storage/logo/logotipo.png" alt="">
            </div>
        </div>
        <div class="col-span-3 grid grid-cols-5">
            <div class="col-span-1"></div>
            <div class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8"><a href="#">INICIO</a></div>
            <div class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8"><a href="#">DESTAQUES</a></div>
            <div class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8"><a href="#">BIBLIOTECA</a></div>
            <div class="col-span-1"></div>
        </div>
        <div class="col-span-1 grid grid-cols-5">
            <div class="col-span-1"></div>
            <button class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8" name="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8" name="notification">
                <i class="fa-regular fa-bell"></i>
            </button>
            <button class="col-span-1 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-t-lg hover:border-b-8" name="profile">
                <i class="fa-solid fa-user"></i>
            </button>
            <div class="col-span-1"></div>
        </div>
    </div>
    {{-- SEARCH --}}
    {{-- <div class="hidden hover:grid grid-cols-5 w-full h-full" name="search">
        <div class="col-span-2"></div>
        <div class="col-span-3 grid grid-cols-5 w-4/5 h-full p-2 shadow-lg rounded-md bg-violet-300">
            <div class="col-span-4 flex justify-around items-center">
                <form class="flex flex-row justify-around items-center w-full h-full" action="">
                    <input class="h-4/5 w-4/5 bg-violet-100 rounded-xl text-violet-900 p-1" type="text" name="" id="">
                    <button class="button" type="submit">BUSCAR</button>
                </form>
            </div>
            <button class="col-span-1 flex justify-center items-center font-bold hover:text-violet-900 hover:text-2xl">
                <i class="fa-solid fa-square-minus"></i>
            </button>
        </div>
    </div> --}}
    {{-- NOTIFICATION --}}
    {{-- <div class="grid grid-cols-5 w-full" name="notification">
        <div class="col-span-4"></div>
        <div class="col-span-1 grid grid-rows-5 justify-center items-center shadow-lg w-full rounded-lg bg-violet-300">
            <div class="row-span-1 justify-center items-center font-bold w-full">Notificação</div>
            <div class="row-span-3 h-80">
            </div>
            <div class="row-span-1">oi</div>
        </div>
    </div> --}}
</header>
{{-- MOBALE --}}
<header class="lg:hidden grid"></header>
