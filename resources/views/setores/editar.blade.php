@extends('master')

@section('title')
{{"Editar Setores - ".$registro->nome}}
@endsection

@section('js')
{{url('js/setores-editar.js')}}
@endsection

@section('css')
{{url('css/setores-editar.css')}}
@endsection

@section('content')

<form action="{{route('setores.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('setores._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection