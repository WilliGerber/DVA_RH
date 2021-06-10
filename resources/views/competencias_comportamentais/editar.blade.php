@extends('master')

@section('title')
{{"Editar Competencia Comportamental - ".$registro->nome}}
@endsection

@section('js')
{{url('js/competencias_comportamental-editar.js')}}
@endsection

@section('css')
{{url('css/competencias_comportamental-editar.css')}}
@endsection

@section('content')

<form action="{{route('competencias_comportamentais.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('competencias_comportamentais._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection