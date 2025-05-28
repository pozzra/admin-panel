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
    </head>
    <body x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" class="bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-white">
    {{-- add box shadow in nav  --}}

    <nav class="bg-white dark:bg-gray-800 p-2 flex justify-between shadow-md border-b border-gray-200 dark:border-gray-700 shadow-md items-center">
        {{-- add logo --}}
        <div class="flex items-center gap-4" id="admin-panel-title">
            <img src="https://laraveldaily.com/uploads/2019/02/Screen-Shot-2019-02-08-at-9.44.00-AM-1024x708.png" alt="Logo" class="h-10 w-10 rounded-full">
            <span class="font-bold size-10  text-white "  >Your User</span>
        </div>

        {{-- add right side --}}

        <div class="flex items-center gap-4">
            <!-- Toggle sidebar button -->
            <button class="toggle-sidebar  p-2 rounded text-white">
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>

            <!-- Language -->
            <form action="{{ route('lang.switch') }}" method="POST">
                @csrf
                <select name="lang" onchange="this.form.submit()" class="bg-gray-200 dark:bg-gray-700 text-white  rounded">
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                    <option value="km" {{ app()->getLocale() == 'km' ? 'selected' : '' }}>ខ្មែរ</option>
                </select>
            </form>

            <!-- Dark mode switch -->
            <button @click="darkMode = !darkMode" class="bg-gray-300 zp-1 rounded">
                <span x-show="!darkMode">
                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
                    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                    </svg>
                </span>
                <span x-show="darkMode">
                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                    <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                    </svg>
                </span>
            </button>

            <!-- add icon logout if clcick on icon please popup confirm logout or cancel icon not text -->
            <form method="POST" action="{{ url('/logout') }}" x-data="{ open: false }"> 
                @csrf
                <button type="button" @click="open = !open" class="bg-gray-300 p-1 rounded" id="logout-button">
                    {{-- add icon logout --}}
                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                </button>
                {{-- open popup  confirm logout to center screen --}}
                <div x-show="open" class="fixed inset-0  flex items-center justify-center z-50" >
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                        <p class="text-gray-700 dark:text-gray-300">Are you sure you want to logout?</p>
                        <div class="mt-4 flex justify-end" id="div-buttons">
                            <button type="button" @click="open = false" class="ml-2 text-gray-700 dark:text-gray-300 px-4 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700" id="cancel-button">
                                {{-- add icon cancel --}}
                                Cancel
                            </button>
                            <button type="submit" class="ml-2 text-gray-700 dark:text-gray-300 px-4 py-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 " id="confirm-logout-button">
                                {{-- add icon logout --}}
                                Logout
                            </button>
                            
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </nav>
    {{-- create slide left bar --}}
    {{-- if click on li please show background color  example click on dashboard please show bg-gray-200 --}}

    <div  class="flex shadow-md border-b  border-gray-200 dark:border-gray-700 shadow-md  " style="height: calc(100vh - 60px);">
        {{-- add sidebar --}}

        <aside class=" bg-white dark:bg-gray-800 p-4 shadow-lg justify-between flex flex-col w-64 " >

            <ul class="text-white dark:text-gray-300  ">
                <li><a id="a" href="" class="flex py-4 px-6  hover:bg-gray-200 dark:hover:bg-gray-700 rounded ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z"/>
                    </svg>
                    <span class="px-4">Dashboard</span></a></li>
                <li><a id="a" href="{{ url('/manage-slider') }}" class="flex py-4 px-6  hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4H1.5a.5.5 0 0 1 0-1H10V1.5a.5.5 0 0 1 .5-.5M12 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m-6.5 2A.5.5 0 0 1 6 6v1.5h8.5a.5.5 0 0 1 0 1H6V10a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5M1 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 1 8m9.5 2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V13H1.5a.5.5 0 0 1 0-1H10v-1.5a.5.5 0 0 1 .5-.5m1.5 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <span class="px-4">Slider</span></a></li>
                {{-- User Profile --}}
                
                {{-- Role and Permission --}}
                <li><a id="a" href="{{ url('/manage-admin') }}" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg> <span class="px-4 font-bold">Manage Admin</span>
                    </a></li>
                <li><a id="a" href="{{ url('/manage-products') }}" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                    </svg><span class="px-4">Manage Products</span></a></li>
                <li><a id="a" href="{{ url('/manage-orders') }}" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
                    </svg><span class="px-4">Manage Orders</span></a></li>
                <li><a id="a" href="" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg><span class="px-4">Reports</span></a></li>
                <li><a id="a" href="" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1"/>
                    </svg><span class="px-4">Analytics</span></a></li>
                <li><a id="a" href="" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                    <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0m1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627"/>
                    </svg><span class="px-4">Support</span></a></li>
                <li><a id="a" href="" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                     <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg><span class="px-4">Settings</span></a></li>
                    {{-- add show popup --}}

                <li><a id="a" href="" class="flex py-4 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded" >
                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg><span class="px-4">Logout</span></a></li>

            </ul>
            <footer>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-gray-700 dark:text-gray-300">AL Store</span>
                    <a href="#" class="text-white hover:underline">Help</a>
                </div>
            <div class="text-center text-gray-500 dark:text-gray-400 mt-4">
                &copy; {{ date('Y') }} AL Store. All rights reserved.
            </div>
        </footer>
        </aside>
        <main class="flex-1 p-2 ">
            {{ $slot }}
        </main>
    </div>
    
    </body>
    {{-- add responsive design if viewport is less than 768px please hidden sidebar add menu button  click show  add animation --}}
    {{-- if media screen 768px < please hidden button logout --}}
    <style>
        .toggle-sidebar {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        #cancel-button {
            background-color: green;
            color: white;
            padding: 5px 10px;
            margin-right: 10px;
        }
        #cancel-button:hover {
            background-color: darkgreen;
        }
        #confirm-logout-button {
            background-color: #dc3545;
            color: white;   
            padding: 5px 10px;
        }
        #confirm-logout-button:hover {
            background-color: #c82333;
        }
        #div-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 50px;
        }
        #sidebar {
            transition: transform 0.3s ease;
            /* width: 250px; */
        }
        #sidebar:active {
            transform: translateX(0);
            background-color: white;
        }
        
        
        aside.hidden {
            display: none;
        }
        @media (max-width: 768px) {
            aside {
                display: none;
            }
            .toggle-sidebar {
                display: block;
            }
            aside ul li #a {
                font-size: 14px;
                margin-bottom: 5px;
            }
            #admin-panel-title {
                display: flex;
                justify-content: center;
                width: 100%;
            }
            #logout-button {
                        display: none;
                    }

            
        }
        @media (min-width: 769px) {
            .toggle-sidebar {
                display: none;
            }
            aside {
                display: block;
            }
            #admin-panel-title {
                width: auto;
                font-size: 1.25rem;
                padding-left: 2.5rem;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.querySelector('aside');
            const toggleButton = document.querySelector('.toggle-sidebar');

            toggleButton.addEventListener('click', function () {
                sidebar.classList.toggle('hidden');
            });
            // Close sidebar when clicking outside of it
            
        });
    </script>
</body>
    
</html>
