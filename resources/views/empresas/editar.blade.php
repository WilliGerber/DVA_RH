@extends('master')

@section('title')
{{"Editar Empresa - ".$registro->nome}}
@endsection

@section('js')
{{url('js/empresas-editar.js')}}
@endsection

@section('css')
{{url('css/empresa-editar.css')}}
@endsection

@section('content')

<form action="{{route('empresas.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('empresas._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection