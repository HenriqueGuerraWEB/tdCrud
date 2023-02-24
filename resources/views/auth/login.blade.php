<x-guest-layout>
    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ session('status') }}
        </div>
    @endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="sm:px-10 bg-sky-800">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen text-center">
                <a href="/" class="-intro-x flex items-center pt-5 text-center inline-block">
                    <img alt="Midone - HTML Admin Template" class="w-6 text-center inline-block" src="http://rubick.left4code.com/dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">
                        GUPE
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16 inline-block" src="http://rubick.left4code.com/dist/images/illustration.svg" >
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Olá! Seja bem-vindo.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Para acessar todos os nossos recursos<br/> exclusivos é necessário ter uma conta.</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Login</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Para acessar todos os nossos recursos<br/> exclusivos é necessário ter uma conta.</div>
                    <div class="intro-x mt-8">
                       
                        
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                       
                        {{-- <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email">
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"> --}}
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember">
                            <label class="cursor-pointer select-none" for="remember-me">Lembrar</label>
                        </div>
                        <a href="">Perdeu a senha?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                            <span>Login</span>
                          </button>                        
                        {{-- <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button> --}}
                        <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Registrar</button>
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-300 dark:text-slate-300 text-center xl:text-left">
                        Ao se inscrever, você concorda com nossos <a class="text-primary dark:text-slate-200" href="">Termos e condições</a> &amp; <a class="text-primary dark:text-slate-200" href="">Política de privacidade</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
</form>

    {{--  --}}
{{-- 
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        
    </x-authentication-card> --}}
</x-guest-layout>
