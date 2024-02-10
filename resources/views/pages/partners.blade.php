@extends('.layouts/frontend-layout')

@section('title','Tutorial')


@section('content')

    <div class="max-w-[1220px]  p-5 mx-auto mt-20 relative h-[500px] lg:h-[300px]">
        <h4 class="font-semibold text-6xl">{{ isset($partnerType) ?  $partnerType->name : 'Laravel News Blog' }}</h4>
        <p class="text-black/50 my-2">{{ isset($partnerType) ?  $partnerType->description : 'All the latest Laravel News posts' }}</p>
    </div>

    <section class="bg-white">
        <div class="max-w-[1220px] mx-auto">
            <div class="flex items-center py-10 border-b ">
                <p>Filter :  &nbsp&nbsp </p>
                <div class="flex items-center gap-10">
                    @foreach($partnerTypes as $type)
                        <a class="text-lg mr-2" href="{{ '/partners/' . $type->slug }}">{{ $type->name }}</a>
                    @endforeach
                </div>
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


@endsection

