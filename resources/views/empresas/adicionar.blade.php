@extends('master')

@section('title', 'Adicionar Empresa')

@section('js')
{{url('js/empresas-adicionar.js')}}
@endsection

@section('css')
{{url('css/empresas-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('empresas.salvar')}}" method="post">
    @include('empresas._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection