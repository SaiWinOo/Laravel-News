@extends('.layouts/frontend-layout')


@section('title' ,'Laravel News')

@section('content')

    <div class="max-w-[1220px] p-5 mx-auto mt-20 relative h-auto lg:h-[300px]">
        <h4 class="font-semibold text-5xl">Laravel News</h4>
        <p class="text-black/50 my-2">Join the Laravel Newsletter and never miss out on any Laravel News</p>
        <div class="w-full lg:w-1/2 static pb-10 lg:absolute bottom-[-30%]">
            @livewire('news-letter-form')
        </div>
    </div>
    <div class="bg-white pt-20">
        <div class="max-w-[1220px] p-5 mx-auto">

            <section>
                <div class="flex justify-between items-center">
                    <h2 class="my-20 text-4xl font-bold">The latest</h2>
                    <a href="/blog" wire:navigate class="text-red-600 font-bold">View All</a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">
                    @foreach([1,2,3,4,5,6] as $i)
                        <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                            <img class="rounded-lg w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                            <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="py-12 ">
                <div class="mx-auto  w-full max-w-2xl px-6 lg:max-w-7xl">
                    <div class="relative shadow-lg">
                        <img class="absolute  -top-10 right-16 z-10 lg:-top-6 lg:left-1/3 lg:right-auto duration-1000 animate-bounce" src="https://picperf.io/https://laravel-news.com/images/cube.svg" alt="Cube">
                        <div class="relative flex flex-wrap items-center justify-between gap-8 overflow-hidden rounded-lg border border-gray-100 bg-white p-8 shadow-card lg:flex-nowrap">
                            <span class="absolute inset-y-0 left-0 w-1 bg-red-600"></span>
                            <div>
                                <h2 class="text-2xl font-bold sm:text-3xl">Laravel Newsletter</h2>
                                <p class="mt-1 text-gray-600">
                                    Join 40k+ other developers and never miss out on new tips, tutorials, and more.
                                </p>
                            </div>
                            <div class="lg:shrink-0">
                                <div>
                                     <form>
                                        <div class="flex w-full flex-wrap items-stretch  gap-4">
                                            <label class="relative flex min-w-[240px] border border-gray-300 rounded-lg flex-1 items-center bg-white">
                                                <span class="sr-only">Email</span>
                                                <img src="https://picperf.io/https://laravel-news.com/images/icons/newsletter.svg" alt="Newsletter icon" class="pointer-events-none absolute  left-3 top-3">
                                                <input type="text" class="w-full rounded-lg border-gray-100 bg-transparent px-12 py-3 text-gray-600 placeholder-gray-600/50 transition focus:border-gray-100 focus:bg-gray-100/40 focus:outline-none focus:ring-2 focus:ring-red-600/80 focus:ring-offset-2" placeholder="Email">
                                            </label>
                                            <button type="submit" class="inline-flex items-center justify-center leading-none bg-red-600 border border-transparent rounded-lg font-bold text-base text-white hover:bg-red-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 focus-visible:ring-offset-2 disabled:bg-red-600/50 disabled:cursor-not-allowed transition ease-in-out duration-300 px-6 py-4">
                                                Join free
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <section class="bg-black/5">
            <div class="max-w-[1220px] mx-auto">
                <div class="flex justify-between items-center">
                    <h2 class="my-20 text-6xl font-bold">Partners</h2>
                    <a href="/partners" class="text-red-600 font-bold">View All</a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 pb-20 p-5">
                    @foreach($partners as $partner)
                        <a href="{{ $partner->website }}" target="_blank">
                            <div class="group relative bg-white rounded-lg shadow-lg border border-gray-100 p-8 w-full shrink-0 lg:p-12" >
                                <img src="{{ $partner->logo }}" alt="Curotec logo" class="h-10 object-contain object-left-top transition group-hover:opacity-80" height="40" width="300px" loading="lazy">
                                <p class="mt-6 text-gray-600 group-hover:opacity-80"> {{ $partner->description }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <div>
            <section class="max-w-[1220px] mx-auto">
                <div class="flex justify-between items-center">
                    <h2 class="my-20 text-4xl font-bold">Tutorials</h2>
                    <a href="/blogs" class="text-red-600 font-bold">View All</a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">
                    @foreach([1,2,3,4,5,6] as $i)
                        <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                            <img class="rounded-lg w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                            <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="max-w-[1220px] mx-auto">
                <div class="flex justify-between items-center">
                    <h2 class="my-20 text-4xl font-bold">Laravel Packages</h2>
                    <a href="/blogs" class="text-red-600 font-bold">View All</a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 my-10 ">
                    @foreach([1,2,3,4,5,6,7,8] as $i)
                        <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                            <img class="rounded-lg w-full group-hover:opacity-80 h-[250px] lg:h-[180px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                            <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>

    </div>

@endsection


