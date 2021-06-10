@extends('master')

@section('title', 'Pontos Melhorias')

@section('js')
{{url('js/pontos_melhorias.js')}}
@endsection

@section('css')
{{url('css/pontos_melhorias.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('pontos_melhorias.adicionar')}}">Adicionar</a>
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
                <a class="btn" href="{{route('pontos_melhorias.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
