@extends('master')

@section('title')
{{"Editar Departamento - ".$registro->nome}}
@endsection

@section('js')
{{url('js/departamentos-editar.js')}}
@endsection

@section('css')
{{url('css/departamentos-editar.css')}}
@endsection

@section('content')

<form action="{{route('departamentos.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('departamentos._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection