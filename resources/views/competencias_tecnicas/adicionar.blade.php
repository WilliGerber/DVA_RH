@extends('master')

@section('title', 'Adicionar Competência Técnica')

@section('js')
{{url('js/competencias_tecnicas-adicionar.js')}}
@endsection

@section('css')
{{url('css/competencias_tecnicas-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('competencias_tecnicas.salvar')}}" method="post">
    @include('competencias_tecnicas._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection