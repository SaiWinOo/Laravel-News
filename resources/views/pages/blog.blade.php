@extends('.layouts/frontend-layout')

@section('title', $category->name . ' | Laravel News')


@section('content')

    @livewire('blogs',['category' => $category])

@endsection

