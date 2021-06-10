@extends('master')

@section('title', 'Departamentos')

@section('js')
{{url('js/departamentos.js')}}
@endsection

@section('css')
{{url('css/departamentos.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('departamentos.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->descricao}}</td>
            <td>{{$registro->responsavel}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('departamentos.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
