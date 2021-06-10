@extends('master')

@section('title')
{{"Editar Permissoes - ".$registro->nome}}
@endsection

@section('js')
{{url('js/permissoes.js')}}
@endsection

@section('css')
{{url('css/permissoes.css')}}
@endsection

@section('content')

<form action="{{route('permissoes.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('permissoes._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection