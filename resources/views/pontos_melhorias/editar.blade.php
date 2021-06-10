@extends('master')

@section('title')
{{"Editar Pontos Melhorias - ".$registro->nome}}
@endsection

@section('js')
{{url('js/pontos_melhorias.js')}}
@endsection

@section('css')
{{url('css/pontos_melhorias.css')}}
@endsection

@section('content')

<form action="{{route('pontos_melhorias.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('pontos_melhorias._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection