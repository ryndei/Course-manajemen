<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SkillSync</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="app.css">
    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    @include('layouts.script')
    <style>
        @import url("https://rsms.me/inter/inter.css");

        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
        }

        .gradient {
            background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
        }

        button,
        .gradient2 {
            background-color: #f39f86;
            background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
        }

        /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

        .browser-mockup {
            border-top: 2em solid rgba(230, 230, 230, 0.7);
            position: relative;
            height: 60vh;
        }

        .browser-mockup:before {
            display: block;
            position: absolute;
            content: "";
            top: -1.25em;
            left: 1em;
            width: 0.5em;
            height: 0.5em;
            border-radius: 50%;
            background-color: #f44;
            box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
        }

        .browser-mockup>* {
            display: block;
        }

        /* Custom code for the demo */
    </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6">
            <div class="pl-4 flex items-center">
                <a class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <img src="{{ asset('dist/img/logo1.png') }}" alt="Logo" class="h-15 w-20 inline-block">
                    SkillSync
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="mx-auto lg:mx-0 hover:underline text-white font-extrabold bg-gray-700 rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="mx-auto lg:mx-0 hover:underline text-white font-extrabold bg-gray-700 rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Register</a>
                                @endif
                            @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto h-screen">
        <div class="text-center px-3 lg:px-0">
            <h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight">
                SkillSync IT Courses : Your Path to Tech Mastery
            </h1>
            <p class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8">
                The only way to do great work is to love what you do
            </p>
        </div>

        <div class="flex items-center w-full mx-auto content-end">
            <div class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl relative">
                <img src="{{ asset('dist/img/IMGHero.jpg') }}" alt="Hero Image"
                    class="w-full h-full object-cover rounded shadow-xl">
            </div>
        </div>
    </div>
    <section class="bg-gray-100 border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                So many reasons to start
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Peluang Karir yang Luas
                    </h3>
                    <p class="text-gray-600 mb-8 text-justify">
                        Teknologi terus berkembang dengan cepat, dan keberhasilan pribadi maupun profesional semakin
                        tergantung pada pemahaman yang kuat tentang IT. Kursus kami dirancang untuk membantu Anda
                        menghadapi tantangan-tantangan ini dengan memberikan pemahaman mendalam tentang konsep-konsep IT
                        terkini.<br /><br />
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <img src="/dist/img/Img21.png" alt="Gambar PNG">
                </div>
            </div>

            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <img src="/dist/img/img3.png" alt="">
                </div>
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            Tantangan Era Digital
                        </h3>
                        <p class="text-gray-600 mb-8 text-justify">
                            Industri IT menyediakan berbagai peluang karir yang menarik dan beragam. Melalui
                            kursus-kursus kami, Anda akan memperoleh keterampilan yang sangat dicari oleh
                            perusahaan-perusahaan di seluruh dunia. Ini membuka pintu untuk karir yang sukses dan
                            memuaskan dalam dunia teknologi.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Popular topics
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full font-bold text-xl text-gray-800 px-6 mt-5">
                            Web Development
                        </div>
                        <p class="text-justify text-gray-600 text-base px-6 mb-5">
                            Web development, atau pengembangan web, adalah proses menciptakan dan memelihara situs web
                            atau aplikasi web. Ini melibatkan serangkaian kegiatan yang mencakup desain, pengembangan,
                            pengujian, dan pemeliharaan situs web atau aplikasi web.
                        </p>
                    </a>

                    {{-- <div class="p-6 flex items-center justify-start">
                        <button
                            class="msx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-4 py-4 px-8 shadow-lg">
                            Action
                        </button>
                    </div> --}}
                </div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full font-bold text-xl text-gray-800 px-6 mt-5">
                            Mobile Development
                        </div>
                        <p class="text-justify text-gray-600 text-base px-6 mb-5">
                            Mobile development atau pengembangan mobile adalah proses menciptakan perangkat lunak atau
                            aplikasi yang dirancang untuk dijalankan pada perangkat mobile, seperti smartphone dan
                            tablet.
                        </p>
                    </a>
                    {{-- <div class="flex items-center my-8 justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-7 py-4 px-8 shadow-lg">
                            Action
                        </button>
                    </div> --}}
                </div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Cybersecurity
                        </div>
                        <p class="text-justify text-gray-600 text-base px-6 mb-5">
                            Cybersecurity adalah serangkaian praktik, teknologi, dan kebijakan
                            yang dirancang untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman
                            siber. untuk mencegah akses yang tidak sah,
                            melindungi kerahasiaan data, memastikan integritas informasi,
                        </p>
                    </a>
                    {{-- <div class="flex items-center justify-end mt-0">
                        <button
                            class=" hover:underline gradient2 text-gray-800 font-extrabold rounded my-7 py-4 px-8 mr-6 shadow-lg">
                            Action
                        </button> --}}
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="gradient w-full mx-auto text-center pt-6 pb-12">
        <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-white">
            Daftar Sekarang
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <h3 class="my-4 text-2xl font-extrabold">
            Bergabunglah Sekarang dan Raih Keberhasilan
        </h3>

        <button
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg">
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        </button>
    </section>

    <!--Footer-->
    <footer class="bg-white ">
        <div class="container mx-auto mt-8 px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6">
                    <a class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                        href="#">
                        <img src="{{ asset('dist/img/logo1.png') }}" alt="Logo" class="h-12 w-12 inline-block">
                        SkillSync
                    </a>
                </div>

                <div class="flex-1">
                    <p class="uppercase font-extrabold text-gray-500 md:mb-6">Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-gray-500 md:mb-6">Legal</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-gray-500 md:mb-6">
                        Company
                    </p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Official
                                Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">About
                                Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;

        }
    </script>
    @endif
</body>

</html>
