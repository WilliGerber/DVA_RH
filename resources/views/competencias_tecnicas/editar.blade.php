@extends('master')

@section('title')
{{"Editar Competencia Tecnicas - ".$registro->nome}}
@endsection

@section('js')
{{url('js/competencias_tecnicas-editar.js')}}
@endsection

@section('css')
{{url('css/competencias_tecnicas-editar.css')}}
@endsection

@section('content')

<form action="{{route('competencias_tecnicas.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('competencias_tecnicas._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection