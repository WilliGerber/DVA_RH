@extends('master')

@section('title', 'Adicionar Hierarquias')

@section('js')
{{url('js/hierarquias-adicionar.js')}}
@endsection

@section('css')
{{url('css/hierarquias-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('hierarquias.salvar')}}" method="post">
    @include('hierarquias._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection