@extends('master')

@section('title', 'Setores')


@section('js')
{{url('js/setores.js')}}
@endsection

@section('css')
{{url('css/setores.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('setores.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Departamento</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->descricao}}</td>
            <td>{{$registro->departamento}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('setores.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
