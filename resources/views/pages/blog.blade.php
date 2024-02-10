@extends('.layouts/frontend-layout')

@section('title', isset($category) ? $category->name : 'Blog' . ' | Laravel News')

@section('content')

    @livewire('blogs',['category' => @isset($category) ? $category : null])

@endsection

