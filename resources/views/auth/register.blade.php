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

        .text-custom-black {
            color: black
        }

        .bg-blur {
            opacity: 80%;
        }
    </style>
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('/dist/img/background.jpg') }}');">
    <div class="w-full flex flex-wrap justify-center ">
        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col items-center ">
            <div class="flex flex-col items-center pt-12 pl-12">
                <img src="{{ asset('dist/img/logo1.png') }}" class="h-20 w-20 inline-block mb-2">

                <p class="text-center text-4xl text-bold font-serif">Welcome</p>

                <div
                    class="flex flex-col my-auto pt-8 px-8 lg:px-32 w-full md:w-250 shadow-2xl rounded-md bg-blur bg-white bg-gradient-to-r from-purple-400 to-pink-500">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" class="text-custom-black" />
                            <x-text-input id="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="name" :value="old('name')" required autofocus
                                autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" class="text-custom-black" />
                            <x-text-input id="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        {{-- No telepon --}}
                        <div class="mt-4">
                            <x-input-label for="no_telepon" :value="__('Nomor Telepon')" class="text-custom-black" />
                            <x-text-input id="no_telepon"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="number" name="no_telepon" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class="text-custom-black" />

                            <x-text-input id="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-custom-black" />

                            <x-text-input id="password_confirmation"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4 mr-4">
                            <a class="font-bold underline text-sm text-custom-black hover:text-gray-700 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="bg-custom-black text-white font-semibold px-5 mb-5 ml-4">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a1 1 0 000 2h1v2.5A4.5 4.5 0 0010 15a4.5 4.5 0 004.5-4.5V10h1a1 1 0 100-2h-1V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

</body>

</html>
