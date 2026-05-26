@extends('layout')

@section('conteudo')

@foreach ($lista as $item)
    <li>{{ $item }}</li>
@endforeach
@endsection
