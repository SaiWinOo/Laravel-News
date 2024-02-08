<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')


</head>

<body>

<div class="bg-black/5">
    <div class="max-w-[1220px] mx-auto">
        @livewire('navbar')
    </div>
    @yield('content')
</div>


<footer class="relative overflow-hidden py-24 sm:py-32">
    <svg class="absolute bottom-0 right-0" width="603" height="419" viewBox="0 0 603 419" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity=".2" filter="url(#filter0_f_4_553)">
            <circle cx="462" cy="462" r="258" fill="#F9332B"></circle>
        </g>
        <defs>
            <filter id="filter0_f_4_553" x="0" y="0" width="924" height="924" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                <feGaussianBlur stdDeviation="102" result="effect1_foregroundBlur_4_553"></feGaussianBlur>
            </filter>
        </defs>
    </svg>
    <div class="relative mx-auto flex w-full max-w-2xl flex-col items-start justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl lg:flex-row">
        <div class="lg:w-1/2">
            <h2 class="text-2xl font-bold lg:text-[28px]">Subscribe to our newsletter</h2>
            <div class="relative mt-10">
                <img  class="absolute -top-10 transition-all duration-500 right-48 z-10 animate-bounce" src="https://picperf.io/https://laravel-news.com/images/cube.svg" alt="Cube">
                <div class="relative overflow-hidden rounded-lg border border-gray-100 bg-white p-8 shadow-lg">
                    <span class="absolute inset-y-0 left-0 w-1 bg-red-600"></span>
                    <div wire:snapshot="{&quot;data&quot;:{&quot;email&quot;:null,&quot;submitted&quot;:false,&quot;failed&quot;:false,&quot;location&quot;:&quot;footer&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;JTYIhRlSmtIUEIvfGQro&quot;,&quot;name&quot;:&quot;newsletter-signup&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;4b0c0fb1cf46edb680fb5ae3d35423949735e8261b7f3bbdb2abd82dd991919c&quot;}" wire:effects="{}" wire:id="JTYIhRlSmtIUEIvfGQro">
                        <!--[if BLOCK]><![endif]--> <form wire:submit="submit">
                            <div class="flex w-full flex-wrap items-stretch gap-4">
                                <label class="relative flex min-w-[240px] flex-1 items-center bg-white border rounded-lg">
                                    <span class="sr-only">Email</span>
                                    <img src="https://picperf.io/https://laravel-news.com/images/icons/newsletter.svg" alt="Newsletter icon" class="pointer-events-none absolute left-3 top-3">
                                    <input wire:model="email" type="text" class="w-full rounded-lg border-gray-100 bg-transparent px-12 py-3 text-gray-600 placeholder-gray-600/50 transition focus:border-gray-100 focus:bg-gray-100/40 focus:outline-none focus:ring-2 focus:ring-red-600/80 focus:ring-offset-2" placeholder="Email">
                                </label>
                                <button type="submit" class="inline-flex items-center justify-center leading-none bg-red-600 border border-transparent rounded-lg font-bold text-base text-white hover:bg-red-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 focus-visible:ring-offset-2 disabled:bg-red-600/50 disabled:cursor-not-allowed transition ease-in-out duration-300 px-6 py-4">
                                    Join free
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex flex-wrap items-center gap-8">
                <p class="font-bold">and follow us on</p>
                <div class="flex flex-wrap items-center gap-2 sm:flex-nowrap">
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://www.facebook.com/laravelnews" target="_blank">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/facebook.svg" alt="Facebook" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://instagram.com/laravelnews">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/instagram.svg" alt="Instagram" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://twitter.com/laravelnews">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/x.svg" alt="X" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">X</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://www.linkedin.com/company/laravel-news">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/linkedin.svg" alt="Linkedin" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Linkedin</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://t.me/laravelnews">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/telegram.svg" alt="Telegram" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Telegram</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://www.youtube.com/c/Laravel-news">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/youtube.svg" alt="Youtube" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Youtube</span>
                    </a>
                    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60" href="https://www.threads.net/@laravelnews">
                        <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/threads.svg" alt="Threads" class="h-6 w-6 object-contain" rel="nofollow">
                        <span class="sr-only">Threads</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid w-full max-w-sm gap-x-12 gap-y-4 sm:grid-cols-2">
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/newsletter" wire:navigate.hover="">
                Laravel Newsletter
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/links" wire:navigate.hover="">
                Laravel Links
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/category/packages" wire:navigate.hover="">
                Laravel Packages
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/category/tutorials" wire:navigate.hover="">
                Laravel Tutorials
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/events" wire:navigate.hover="">
                Laravel Events
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="https://laravel-news.com/popular-laravel-packages" wire:navigate.hover="">
                Popular Packages
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="tag/releases" wire:navigate.hover="">
                Laravel Releases
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/partners" wire:navigate.hover="">
                Partners
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/advertising" wire:navigate.hover="">
                Advertising
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="https://larajobs.com">
                Laravel Jobs
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/contact" wire:navigate.hover="">
                Contact Us
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/login" wire:navigate.hover="">
                Your account
            </a>
        </div>
    </div>
    <div class="relative mx-auto mt-20 flex w-full max-w-2xl flex-wrap justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl">
        <p class="text-sm text-gray-600">
            © 2012 - 2024 Laravel News
            <br>
            A division of dotdev inc.
        </p>
        <p class="text-sm text-gray-600">
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 text-black hover:text-red-600" href="/about" wire:navigate.hover="">
                Colophon / About
            </a>
        </p>
    </div>
</footer>
</body>

</html>
