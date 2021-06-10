@extends('master')

@section('title', 'Adicionar Setores')

@section('js')
{{url('js/setore-adicionar.js')}}
@endsection

@section('css')
{{url('css/setores-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('setores.salvar')}}" method="post">
    @include('setores._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection