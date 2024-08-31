<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--
Change class "fixed" to "sticky" in "navbar" (l. 33) so the navbar doesn't hide any of your page content!
-->

    <style>
    ul.breadcrumb li+li::before {
        content: "\276F";
        padding-left: 8px;
        padding-right: 4px;
        color: inherit;
    }

    ul.breadcrumb li span {
        opacity: 60%;
    }

    #sidebar {
        -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }

    #sidebar ul li a.active {
        background: #1f2937;
        background-color: #1f2937;
    }
    </style>


</head>

<body class="font-sans antialiased">
    <!-- Navbar start -->
    <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-end bg-blue-700 px-4 sm:justify-between">

        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
            <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="hidden h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
            <li class="inline">
                <a href="#">Main</a>
            </li>
            <li class="inline">
                <span>Homepage</span>
            </li>
        </ul>
    </nav>
    <!-- Navbar end -->

    <!-- Sidebar start-->
    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-blue-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
                <!-- one category / navigation group -->
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Main
                    </h3>

                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a href="#"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                                Home
                            </a>

                        </li>
                        <li>
                            <a href=""
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                                About
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                                Pricing
                            </a>

                        </li>
                    </ul>
                </div>
                <!-- navigation group end-->

                <!-- example copies start -->
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Legal
                    </h3>
                </div>


                <!-- example copies end -->
            </nav>
        </div>
        <div class="mx-auto lg:ml-80"></div>
    </div>
    <!-- Sidebar end -->
    <div>
        <div class="mt-10 pt-10 grow flex flex-shrink-0 p-10 text-2xl bg-gray-500 font-bold">
            content goes here

            <main>
                <!-- your content goes here -->
                <h1>Bytex Automation Limited </h1>
            </main>

        </div>
    </div>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
    </script>
</body>

</html>