@extends('master')

@section('title', 'Adicionar Colaboradores')

@section('js')
{{url('js/colaboradores-adicionar.js')}}
@endsection

@section('css')
{{url('css/colaboradores-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('colaboradores.salvar')}}" method="post" enctype="multipart/form-data">
    @include('colaboradores._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection