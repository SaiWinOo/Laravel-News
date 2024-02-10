<div>
    <div class="max-w-[1220px]  p-5 mx-auto mt-20 relative h-[500px] lg:h-[300px]">
            <h4 class="font-semibold text-5xl">{{ $category->name }}</h4>
            <p class="text-black/50 my-2">{{ $category->description }}</p>
    </div>

    <div class="bg-white py-20">
        <section class="max-w-[1220px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 ">

                @foreach($blogs as $blog)
                    <div class="group transition-all duration-500 max-w-[500px] mx-auto">
                        <img class="rounded-lg object-cover w-full group-hover:opacity-80 h-[300px] lg:h-[220px] " src={{ $blog->thumbnail }} alt="">
                        <h2 class="font-bold group-hover:text-red-600 text-2xl my-2">{{ $blog->title }}</h2>
                        <p class="text-[15px] text-gray-500">{{ $blog->description }}</p>
                    </div>
                @endforeach
            </div>
            {{ $blogs->links('vendor.livewire.simple-tailwind') }}
        </section>
    </div>

    <section class="">
        <div class="max-w-[1220px] mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="my-20 text-6xl font-bold">Partners</h2>
                <a href="/blogs" class="text-red-600 font-bold">View All -></a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10 pb-20 p-5">
                @foreach([1,2,3,4,5,6] as $i)
                    <div class="group relative bg-white rounded-lg shadow-lg border border-gray-100 p-8 w-full shrink-0 lg:p-12" >
                        <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/partners/logos/curotec2.png" alt="Curotec logo" class="h-10 object-contain object-left-top transition group-hover:opacity-80" height="40" width="300px" loading="lazy">
                        <h3 class="sr-only">
                            Curotec
                        </h3>
                        <p class="mt-6 text-gray-600 group-hover:opacity-80">A flexible agency partner that helps you build great quality products on schedule Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias assumenda corporis debitis ducimus eius eveniet ipsam iusto, maxime, nam nisi odio rem repellendus similique ..</p>
                        <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg" href="https://www.curotec.com/services/technologies/laravel/" target="_blank">
                            <span class="sr-only">Curotec</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</div>

