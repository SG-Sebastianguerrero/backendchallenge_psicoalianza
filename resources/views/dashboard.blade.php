<x-app-layout>
    <div class="w-full h-screen px-5 gap-10 flex flex-col justify-center items-center">
        <h1 class="text-3xl">
            Bienvenid@ !
            {{ Auth::user()->name }}
        </h1>
        <p>Añade los datos personales de tus empleados y después agrega su cargo en tu empresa</p>

        <a href="/employees" class="hover:cursor-pointer flex flex-col justify-center items-center gap-5 text-gray-400">
            <i class="fa-solid fa-user-plus text-mainblue-dark text-3xl"></i>
            Empieza aquí
        </a>
        <img  class="w-44 h-auto absolute right-0 bottom-0" src="https://www.timesafe.com.br/img/EcYTq93px20ptlPRSq1C-3.svg" alt="">
    </div> 
</x-app-layout>
