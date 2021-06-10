@extends('master')

@section('title')
{{"Editar Pontos Fortes - ".$registro->nome}}
@endsection

@section('js')
{{url('js/pontos_fortes.js')}}
@endsection

@section('css')
{{url('css/pontos_fortes.css')}}
@endsection

@section('content')

<form action="{{route('pontos_fortes.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('pontos_fortes._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection