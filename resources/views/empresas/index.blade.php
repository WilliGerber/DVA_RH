@extends('master')

@section('title', 'Empresas')


@section('js')
{{url('js/empresas.js')}}
@endsection

@section('css')
{{url('css/empresas.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('empresas.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->cidade}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('empresas.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
