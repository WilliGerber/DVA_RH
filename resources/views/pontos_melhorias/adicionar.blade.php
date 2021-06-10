@extends('master')

@section('title', 'Adicionar Pontos Melhorias')

@section('js')
{{url('js/pontos_melhorias-adicionar.js')}}
@endsection

@section('css')
{{url('css/pontos_melhorias-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('pontos_melhorias.salvar')}}" method="post">
    @include('pontos_melhorias._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection