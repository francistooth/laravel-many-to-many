@extends('layouts.app')

@section('content')
    <h1 class="ms-3 mt-2">Post n* id: {{ $post->id }}</h1>
    <div class="card text-white bg-success m-3">
        <div class="card-body">
            <h4 class="card-title">Titolo: {{ $post->title }}</h4>
            <h4 class="card-title">Categoria: {{ $post->category ? $post->category->name : 'Nessuna Categoria' }}</h4>
            <p class="card-text">{{ $post->text }}</p>
            <ul>
                <li>Tempo di lettura: {{ $post->reading_time }}</li>
                <li>Data Creazione: {{ $post->created_at }}</li>
                <li>Data ultima modifica: {{ $post->updated_at }}</li>

            </ul>
        </div>
    </div>
@endsection
