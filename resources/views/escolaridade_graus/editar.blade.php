@extends('master')

@section('title')
{{"Editar Grau de Escolaridade - ".$registro->nome}}
@endsection

@section('js')
{{url('js/escolaridade-graus-editar.js')}}
@endsection

@section('css')
{{url('css/escolaridade-graus-editar.css')}}
@endsection

@section('content')

<form action="{{route('escolaridade_graus.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('escolaridade_graus._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection