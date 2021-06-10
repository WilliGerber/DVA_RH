@extends('master')

@section('title', 'Adicionar Cargo')

@section('js')
{{url('js/cargos-adicionar.js')}}
@endsection

@section('css')
{{url('css/cargos-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('cargos.salvar')}}" method="post">
    @include('cargos._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection