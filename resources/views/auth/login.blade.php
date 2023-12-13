<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-blur {
            opacity: 80%;
        }

        .text-custom-black {
            color: black;
        }
    </style>
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('/dist/img/background.jpg') }}');">
    <div class="w-full flex flex-wrap justify-center ">
        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col items-center ">
            <div class="flex flex-col items-center pt-12 pl-12">
                <img src="{{ asset('dist/img/logo1.png') }}" class="h-20 w-20 inline-block mb-2">

                <p class="text-center text-4xl font-serif">Welcome.</p>

                <div
                    class="flex flex-col my-auto pt-8 px-8 lg:px-32 w-full md:w-120 shadow-2xl rounded-md bg-blur bg-white bg-gradient-to-r from-purple-400 to-pink-500">

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-custom-black" />
                            <x-text-input id="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="flex flex-col pt-4">
                            <x-input-label for="password" class="text-custom-black" :value="__('Password')" />

                            <x-text-input id="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        {{-- Login --}}
                        <div class="flex items-center justify-between mt-4">
                            <x-primary-button class="bg-custom-black text-white font-semibold">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a1 1 0 000 2h1v2.5A4.5 4.5 0 0010 15a4.5 4.5 0 004.5-4.5V10h1a1 1 0 100-2h-1V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                {{ __('Log in') }}
                            </x-primary-button>
                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ms-2 text-sm text-custom-black dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-start mt-4 space-x-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-custom-black dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <div class="text-center pt-10 pb-10 justify-end">
                                <p> <a href="{{ route('register') }}" class="underline font-semibold">Register here.</a>
                                </p>
                            </div>
                        </div>
                </div>

            </div>
        </div>

</body>

</html>
