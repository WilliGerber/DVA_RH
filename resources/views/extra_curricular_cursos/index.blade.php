@extends('master')

@section('title', 'Curos Extra Curriculares')


@section('js')
{{url('js/extra_curricular_cursos.js')}}
@endsection

@section('css')
{{url('css/extra_curricular_cursos.css')}}
@endsection

@section('content')

<a class="btn btn-primary mb-4" href="{{route('extra_curricular_cursos.adicionar')}}">Adicionar</a>
<table id="myTable" class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Data Conclusão</th>
            <th>Certificado</th>
            <th>Carga Horária</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->descricao}}</td>
            <td>{{$registro->data_conclusao}}</td>
            <td>{{$registro->certificado}}</td>
            <td>{{$registro->carga_horaria}}</td>
            <td style="width:1%; padding:0.25rem;">
                <a class="btn" href="{{route('extra_curricular_cursos.editar', $registro->id)}}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
