<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="resources/css/app.css" rel="stylesheet">
</head>

<body>

    {{-- [Masthead] ::start --}}
    <section class="mx-8 xl:mx-auto">
        <h2 class="sr-only">Masthead</h2>

        <section class="container flex items-center justify-between mx-auto pt-7 pb-5">
            <h2 class="sr-only">Action Buttons</h2>

            <a href="/" class="inline-flex items-center text-sm uppercase font-semibold hover:text-blue-800 transition-colors">
                Help and Support
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-3.5 ml-2 -mt-0.5">
                    <path fill-rule="evenodd"
                        d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <div
                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                <input id="price" type="text" name="price"
                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" data-slot="icon" aria-hidden="true" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>
        </section>

        <section>
            <h2 class="sr-only">Navigation</h2>

            <nav class="container mx-auto bg-blue-950 rounded-xl">
                <div class="max-w-7xl px-2 sm:px-6 lg:px-10">
                    <div class="relative flex h-28 items-center justify-between">
                        <div class="absolute inset-y-0 left-0 flex items-center xl:hidden">
                            <!-- Mobile menu button-->
                            <button type="button" command="--toggle" commandfor="mobile-menu"
                                class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-1 items-center justify-center xl:justify-start">
                            <a href="/" class="flex shrink-0 items-center w-40 h-20 hover:opacity-50 transition-opacity">
                                {!! file_get_contents('img/ui/logo.svg') !!}
                            </a>
                            <div class="hidden xl:ml-14 xl:block">
                                <div class="flex space-x-2 font-semibold">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="#" aria-current="page"
                                        class="inline-flex items-center rounded-md px-3 py-2 font-medium text-yellow-300">
                                        Residential &amp; Personal
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4 ml-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex items-center rounded-md px-3 py-2 font-medium text-white hover:text-yellow-300">
                                        Business
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4 ml-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex items-center rounded-md px-3 py-2 font-medium text-white hover:text-yellow-300">
                                        Visitors
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4 ml-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="rounded-md px-3 py-2 font-medium text-white hover:text-yellow-300">Online
                                        Store</a>
                                    <a href="#"
                                        class="inline-flex items-center rounded-md px-3 py-2 font-medium text-white hover:text-yellow-300">
                                        About PNCC
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4 ml-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button"
                                class="relative flex items-center rounded-full bg-yellow-300 py-1.5 px-5 xl:px-8 xl:text-xl text-blue-900 font-semibold tracking-wide hover:bg-yellow-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <span class="absolute -inset-1.5"></span>
                                <span>MyPNCC</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6 ml-2 hidden xl:inline-block">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <el-disclosure id="mobile-menu" hidden class="block xl:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <a href="#" aria-current="page"
                            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Residential &amp; Personal</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Business</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Visitors</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Online Store</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About PNCC</a>
                    </div>
                </el-disclosure>
            </nav>
        </section>
    </section>
    {{-- [Masthead] ::end --}}

    {{-- [Carousel] ::start --}}
    <section class="container my-20 mx-auto">
        <h2 class="sr-only">Carousel</h2>

        <ul class="text-gray-600 text-xl tracking-wider mx-8 lg:mx-auto">
            <li class="lg:flex lg:items-center lg:ml-20">
                <div>
                    <h3 class="text-sky-500 text-5xl font-[900] mb-5 leading-tight">
                        Maximize your mobile data <br class="hidden xl:block" />
                        with PNCC 4G Coverage
                    </h3>

                    <p>
                        Enjoy Palau's Best Mobile Data - Highest LTE Speeds, Biggest <br class="hidden xl:block" />
                        Network Coverage, and many Prepaid and Postpaid options
                    </p>

                    <button type="button"
                        class="relative flex items-center rounded-full bg-yellow-300 mt-14 p-5 px-12 xl:text-xl text-blue-900 font-semibold tracking-wide transition-colors hover:bg-yellow-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span>Learn More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 ml-2 hidden xl:inline-block">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <img src="/img/ui/slider/slide-01.png" class="hidden lg:block w-[45%]" />
            </li>
        </ul>
    </section>
    {{-- [Carousel] ::end --}}

    {{-- [Products & Services] ::start --}}
    <section class="container mx-auto my-40 text-center">
        <h2 class="h3 text-sky-500 text-4xl lg:text-5xl font-semibold mb-20">Products &amp; Services</h2>

        <ul class="lg:flex lg:justify-between lg:flex-wrap text-white tracking-wider mx-8 lg:mx-auto xl:w-[85%]">
            <li class="relative bg-gradient-to-b from-teal-400 to-red-200 flex flex-col items-center text-lg rounded-3xl lg:w-[46.5%] lg:flex-[0_0_46.5%] mb-14 lg:mb-20 pt-10 px-8 pb-0">
                <h3 class="text-4xl font-bold mb-5 leading-tight">
                    Residential &amp; Personal
                </h3>

                <p>
                    Palau's One-Stop Shop for Home &amp; <br />Personal Telecom
                </p>

                <button type="button"
                    class="absolute bottom-0 inline-flex items-center rounded-full bg-red-400 border-2 border-white border-solid my-8 p-4 px-16 text-white font-semibold tracking-wider transition-colors hover:bg-white hover:text-red-400 hover:border-red-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span>Learn More</span>
                </button>
                <img src="/img/pages/index/residential-and-personal.png" />
            </li>
            <li class="relative bg-gradient-to-b from-teal-400 to-red-200 flex flex-col items-center text-lg rounded-3xl lg:w-[46.5%] lg:flex-[0_0_46.5%] mb-14 lg:mb-20 pt-10 px-8 pb-0">
                <h3 class="text-4xl font-bold mb-5 leading-tight">
                    Business
                </h3>

                <p>
                    Reliable internet, voice, and TV solutions <br />
                    for Palau's business
                </p>

                <button type="button"
                    class="absolute bottom-0 inline-flex items-center rounded-full bg-red-400 border-2 border-white border-solid my-8 p-4 px-16 text-white font-semibold tracking-wider transition-colors hover:bg-white hover:text-red-400 hover:border-red-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span>Learn More</span>
                </button>
                <img src="/img/pages/index/business.png" />
            </li>
            <li class="relative bg-gradient-to-b from-teal-400 to-red-200 flex flex-col items-center text-lg rounded-3xl lg:w-[46.5%] lg:flex-[0_0_46.5%] mb-14 lg:mb-20 pt-10 px-8 pb-0">
                <h3 class="text-4xl font-bold mb-5 leading-tight">
                    Visitors
                </h3>

                <p>
                    Palau's fastest LTE with prepaid SIMs <br />
                    in downtown Koror
                </p>

                <button type="button"
                    class="absolute bottom-0 inline-flex items-center rounded-full bg-red-400 border-2 border-white border-solid my-8 p-4 px-16 text-white font-semibold tracking-wider transition-colors hover:bg-white hover:text-red-400 hover:border-red-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span>Learn More</span>
                </button>
                <img src="/img/pages/index/visitors.png" />
            </li>
            <li class="relative bg-gradient-to-b from-teal-400 to-red-200 flex flex-col items-center text-lg rounded-3xl lg:w-[46.5%] lg:flex-[0_0_46.5%] mb-14 lg:mb-20 pt-10 px-8 pb-0">
                <h3 class="text-4xl font-bold mb-5 leading-tight">
                    Bundles
                </h3>

                <p>
                    Save on prepaid data, voice &amp; internet with <br />
                    PNCC's latest bundles and promos
                </p>

                <button type="button"
                    class="absolute bottom-0 inline-flex items-center rounded-full bg-red-400 border-2 border-white border-solid my-8 p-4 px-16 text-white font-semibold tracking-wider transition-colors hover:bg-white hover:text-red-400 hover:border-red-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span>Learn More</span>
                </button>
                <img src="/img/pages/index/bundles.png" />
            </li>
        </ul>
    </section>
    {{-- [Products & Services] ::end --}}

    {{-- [How can we help?] ::start --}}
    <section class="container mx-auto my-40 text-center">
        <h2 class="h3 text-sky-500 text-4xl lg:text-5xl font-semibold mb-20">How can we help?</h2>

        <ul class="sm:flex sm:justify-between sm:flex-wrap text-white tracking-wider mx-8 sm:mx-auto xl:w-[85%]">
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/cart.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Buy Prepaid Airtime <br />
                    or Internet Online
                </p>
            </li>
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/pointer-hand.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Pay my bill online, view bill <br />
                    history and check postpaid <br />
                    mobile data usage
                </p>
            </li>
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/pointer-hand.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Pay my bill online <br />
                    (no registration required)
                </p>
            </li>
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/app.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Download the <br />
                    SmartHub app
                </p>
            </li>
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/lifebuoy.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Customer Support: <br />
                    Call 611
                </p>
            </li>
            <li class="relative bg-gray-100 flex flex-col items-center justify-center text-red-400 rounded-3xl sm:w-[46.5%] sm:flex-[0_0_46.5%] lg:w-[32%] lg:flex-[0_0_32%] mb-14 lg:mb-20 py-16 px-10">
                <i class="size-14">
                    {!! file_get_contents('img/ui/icons/svg/star-on-hand.svg') !!}
                </i>

                <p class="font-semibold leading-tight mt-2">
                    Unlock exclusive rewards
                </p>
            </li>
        </ul>
    </section>
    {{-- [How can we help?] ::end --}}

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
