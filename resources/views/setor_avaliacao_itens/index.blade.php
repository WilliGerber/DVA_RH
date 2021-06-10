@extends('master')

@section('title', 'Itens de Avaliação por Setor')

@section('js')
{{url('js/setor_avaliacao_itens.js')}}
@endsection

@section('css')
{{url('css/setor_avaliacao_itens.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('setor_avaliacao_itens.adicionar')}}">Adicionar</a>
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
                <a class="btn" href="{{route('setor_avaliacao_itens.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
