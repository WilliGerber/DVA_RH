@extends('master')

@section('title', 'Adicionar Departamento')

@section('js')
{{url('js/departamentos-adicionar.js')}}
@endsection

@section('css')
{{url('css/departamentos-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('departamentos.salvar')}}" method="post">
    @include('departamentos._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection