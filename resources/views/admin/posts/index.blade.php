@extends('layouts.app')

@section('content')
    <h1 class="ms-3">Elenco post</h1>

    @if (session('delete'))
        {{ session('delete') }}
    @endif
    <table class="table ms-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tag</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <span class="badge text-bg-success">{{ $post->category?->name }}</span>
                    </td>
                    <td>
                        @forelse ($post->tags as $tag)
                            <span class="badge text-bg-warning">
                                {{ $tag->name }}

                            </span>
                        @empty
                        @endforelse
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.posts.show', ['post' => $post->id]) }}"><i
                                class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}"><i
                                class="fa-solid fa-pen"></i></a>
                        @include('admin.partials.formdelete', [
                            'route' => route('admin.posts.destroy', $post),
                            'message' => "Sei sicuro di eliminare il fumetto:  $post->title ?",
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
