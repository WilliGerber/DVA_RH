@extends('master')

@section('title')
{{"Editar Hierarquias - ".$registro->nome}}
@endsection

@section('js')
{{url('js/hierarquias-editar.js')}}
@endsection

@section('css')
{{url('css/hierarquias-editar.css')}}
@endsection

@section('content')

<form action="{{route('hierarquias.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('hierarquias._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection