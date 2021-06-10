@extends('master')

@section('title')
{{"Editar Curso Extra Curricular - ".$registro->nome}}
@endsection

@section('js')
{{url('js/extra_curricular_cursos-editar.js')}}
@endsection

@section('css')
{{url('css/extra_curricular_cursos-editar.css')}}
@endsection

@section('content')

<form action="{{route('extra_curricular_cursos.atualizar', $registro->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @include('extra_curricular_cursos._form')
    <button class="btn btn-success mt-4" type="submit">Atualizar</button>
</form>

@endsection