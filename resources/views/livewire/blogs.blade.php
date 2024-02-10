<div>
    <div class="max-w-[1220px] p-5 mx-auto mt-20 relative h-[500px] lg:h-[300px]">
            <h4 class="font-semibold text-6xl">{{ isset($category) ?  $category->name : 'Laravel News Blog' }}</h4>
            <p class="text-black/50 my-2">{{ isset($category) ?  $category->description : 'All the latest Laravel News posts' }}</p>
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
                @foreach($partners as $partner)
                    <a href="{{ $partner->website }}">
                        <div class=" relative bg-white rounded-lg shadow-lg border border-gray-100 p-8 w-full shrink-0 lg:p-12" >
                            <img src="{{ $partner->logo }}"  class="h-10 object-contain object-left-top transition " height="40" width="300px" >
                            <p class="mt-6 text-gray-600 ">{{ $partner->description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>


</div>

