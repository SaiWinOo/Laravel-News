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
            <div class="flex justify-between items-center">
                <h2 class="my-20 text-4xl font-bold">The latest</h2>
                <a href="/blogs" class="text-red-600 font-bold">View All -></a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">
                @foreach([1,2,3,4,5,6] as $i)
                    <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                        <img class="rounded-lg w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                        <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                    </div>
                @endforeach
            </div>


            <div class="flex justify-between items-center">
                <h2 class="my-20 text-4xl font-bold">Most Read</h2>
                <a href="/blogs" class="text-red-600 font-bold">View All -></a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">
                @foreach([1,2,3,4,5,6] as $i)
                    <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                        <img class="rounded-lg w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                        <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-between items-center">
                <h2 class="my-20 text-4xl font-bold">Laravel Videos</h2>
                <a href="/blogs" class="text-red-600 font-bold">View All -></a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">
                @foreach([1,2,3,4,5,6] as $i)
                    <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                        <img class="rounded-lg w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel11.jpg" alt="">
                        <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">New Laravel 11 Apps Include a Health Check Endpoint</h2>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection


