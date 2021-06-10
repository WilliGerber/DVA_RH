@extends('master')

@section('title', 'Adicionar Curso Extra Curricular')

@section('js')
{{url('js/extra_curricular_cursos-adicionar.js')}}
@endsection

@section('css')
{{url('css/extra_curricular_cursos-adicionar.css')}}
@endsection

@section('content')

<form action="{{route('extra_curricular_cursos.salvar')}}" method="post" enctype="multipart/form-data">
    @include('extra_curricular_cursos._form')
    <button class="btn btn-success mt-4" type="submit">Salvar</button>
</form>

@endsection