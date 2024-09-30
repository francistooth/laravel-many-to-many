@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                {{-- TITLE --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo (*)</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Inserisci il titolo" value="{{ old('title') }}">
                    {{-- se è presente l'errore su 'title' stampo il tag con dentro l'errore --}}
                    {{-- l'errore se presente lo trovo dentro la variabile message --}}
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>
                {{-- CATEGORY --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Categoria (*)</label>
                    <select name="category_id" class="form-select" aria-label="Default select example" id="category">
                        <option value="" selected>Seleziona una categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>
                {{-- TEXT --}}
                <div class="mb-3">
                    <label for="text" class="form-label">Descrizione (*)</label>
                    <textarea class="form-control @error('text') is-invalid @enderror" id="text" name="text"cols="30" rows="10"
                        placeholder="Inserisci il testo">{{ old('text') }}</textarea>

                    @error('text')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- READING_TIME --}}
                <div class="mb-3">
                    <label for="reading_time" class="form-label">Tempo di lettura (*)</label>
                    <input type="text" class="form-control @error('reading_time') is-invalid @enderror" id="reading_time"
                        name="reading_time" placeholder="Inserisci il tempo di lettura" value="{{ old('reading_time') }}">

                    @error('reading_time')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- ACTION --}}
                <div class="mb-3">
                    <button type="submit" href='#' class="btn btn-success">Invia</button>
                    <button type="reset" href='#' class="btn btn-warning">Annulla</button>
                </div>
            </form>

        </div>

    </div>
@endsection
