@extends('master')

@section('title')
{{"Editar Item de Avaliação - ".$registro->nome}}
@endsection

@section('js')
{{url('js/setor_avaliacao_itens.js')}}
@endsection

@section('css')
{{url('css/setor_avaliacao_itens.css')}}
@endsection

@section('content')

<form action="{{route('setor_avaliacao_itens.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('setor_avaliacao_itens._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection