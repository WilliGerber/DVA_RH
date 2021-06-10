@extends('master')

@section('title')
{{"Editar Colaboradores - ".$registro->nome}}
@endsection

@section('js')
{{url('js/colaboradores-editar.js')}}
@endsection

@section('css')
{{url('css/colaboradores-editar.css')}}
@endsection

@section('content')

<form action="{{route('colaboradores.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('colaboradores._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection