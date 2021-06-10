@extends('master')

@section('title', 'Colaboradores')

@section('js')
{{url('js/colaboradores.js')}}
@endsection

@section('css')
{{url('css/colaboradores.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('colaboradores.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Data Admissão</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->cargo}}</td>
            <td>{{$registro->data_admissao}}</td>

            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('colaboradores.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
