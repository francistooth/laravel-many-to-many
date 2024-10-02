@extends('layouts.app')

@section('content')
    <h1>Benvenuti nella dashboard di Boolfolio</h1>
    <h3>Attualmente sono presenti {{ $count_posts }} post da leggere</h3>
    <h4>Many to Many</h4>
@endsection
