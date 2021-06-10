@extends('master')

@section('title', 'Adicionar Item de Avaliação')

@section('js')
{{url('js/setor_avaliacao_itens-adicionar.js')}}
@endsection

@section('css')
{{url('css/setor_avaliacao_itens-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('setor_avaliacao_itens.salvar')}}" method="post">
    @include('setor_avaliacao_itens._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection