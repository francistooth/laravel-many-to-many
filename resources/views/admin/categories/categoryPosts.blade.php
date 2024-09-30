@extends('layouts.app')

@section('content')
    <h1>Elenco post per categoria</h1>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <ul class="list-group">
            @foreach ($category->posts as $post)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $post->title }}</span>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-warning">vedi</a>


                </li>
            @endforeach

        </ul>
    @endforeach
@endsection
