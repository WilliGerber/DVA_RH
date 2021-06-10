@extends('master')

@section('title', 'Adicionar Grau de Escolaridade')

@section('js')
{{url('js/escolaridade-graus-adicionar.js')}}
@endsection

@section('css')
{{url('css/escolaridade-graus-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('escolaridade_graus.salvar')}}" method="post">
    @include('escolaridade_graus._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection