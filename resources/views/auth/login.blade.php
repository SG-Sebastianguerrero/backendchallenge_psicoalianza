<x-guest-layout>
    <div class="flex flex-col md:flex-row justify-start  items-start w-full m-0">
        <div class="w-full md:w-3/5 min-h-screen gradient-blue-light h-auto flex items-center justify-center">
            <div class="left-0 bottom-0 p-16 w-full md:w-3/5 flex flex-col justify-center items-start absolute h-42 text-white text-2xl">
                <h1>
                    Bienvenido a la mejor plataforma <br>
                    <span class="font-bold">organizacional online</span> <br><br>
                    <span>Gestión efectiva del talento humano</span>
                </h1>         
            </div>
            <img  class=" z-[-1] relative w-full h-full object-cover" src="{{asset('/assets/hero_login.jpg')}}" alt="Personas en reunion de negocios">
        </div >
        <div class="w-full md:w-2/5 md:relative flex absolute justify-center h-screen items-center bg-white gap-3 flex-col">
            {{-- <x-auth-card>   --}}
                {{-- <x-slot name="logo"> --}}
                    <img class="w-40 h-auto" src="{{asset('/assets/psico-logo.png')}}" alt="psicoalianza logo">
                   {{--  <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a> --}}
                {{-- </x-slot> --}}
        
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
        
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-3 justify-center items-center">
                    @csrf
        
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
        
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordar cuenta') }}</span>
                        </label>
                    </div>
        
                   
                    <button type="submit" class="btn-primary mx-auto">
                        {{ __('Iniciar sesión') }}
                    </button>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center justify-end mt-4">
                       
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Crea tu cuenta') }}
                        </a>
                        
                    </div>
                </form>
            {{-- </x-auth-card> --}}
        </div>
    </div>
</x-guest-layout>
