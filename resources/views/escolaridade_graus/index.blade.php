@extends('master')

@section('title', 'Graus de Escolaridade')


@section('js')
{{url('js/escolaridade-graus.js')}}
@endsection

@section('css')
{{url('css/escolaridade-graus.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('escolaridade_graus.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->descricao}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('escolaridade_graus.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
