@extends('master')

@section('title', 'Adicionar Permissão')

@section('js')
{{url('js/permissoes-adicionar.js')}}
@endsection

@section('css')
{{url('css/permissoes-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('permissoes.salvar')}}" method="post">
    @include('permissoes._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection