@extends('master')

@section('title', 'Adicionar Competencia Comportamental')

@section('js')
{{url('js/competencias_comportamental-adicionar.js')}}
@endsection

@section('css')
{{url('css/competencias_comportamental-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('competencias_comportamentais.salvar')}}" method="post">
    @include('competencias_comportamentais._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection