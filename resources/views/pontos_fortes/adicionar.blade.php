@extends('master')

@section('title', 'Adicionar Pontos Fortes')

@section('js')
{{url('js/pontos_fortes-adicionar.js')}}
@endsection

@section('css')
{{url('css/pontos_fortes-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('pontos_fortes.salvar')}}" method="post">
    @include('pontos_fortes._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection