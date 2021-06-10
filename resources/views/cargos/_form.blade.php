@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="id_setor">Selecione um Setor</label>
    <select class="form-control" name="id_setor" id="setor">
        <option value="" selected>Setor</option>
        @foreach($setores as $setor)
        <option value="{{ $setor->id }}" {{ isset($registro->id_setor) && $registro->id_setor == $setor->id ? 'selected' : '' }} >{{ $setor->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="id_empresa">Selecione a Empresa</label>
    <select class="form-control" name="id_empresa" id="empresa">
        <option value="" selected>Empresa</option>
        @foreach($empresas as $empresa)
        <option value="{{ $empresa->id }}" {{ isset($registro->id_empresa) && $registro->id_empresa == $empresa->id ? 'selected' : '' }} >{{ $empresa->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="id_cargo_superior">Cargo Superior</label>
    <select class="form-control" name="cargo_superior" id="cargo_superior">
        <option value="" selected>Selecione o Cargo Superior</option>
        @foreach($cargos as $cargo)
        <option value="{{ $cargo->id }}" {{ isset($registro->id_cargo) && $registro->id_cargo == $cargo->id ? 'selected' : '' }} >{{ $cargo->nome }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="data_revisao">Data Revisão</label>
    <input type="text" value="{{isset($registro->data_revisao) ? $registro->data_revisao : '' }}" class="form-control" id="data_revisao" placeholder="  /  /  " name="data_revisao">
</div>
<div class="form-group">
    <label for="descricao_sumaria">Descrição Sumária</label>
    <input type="text" value="{{isset($registro->descricao_sumaria) ? $registro->descricao_sumaria : '' }}" class="form-control" id="descricao_sumaria" placeholder="Descrição Sumária" name="descricao_sumaria">
</div>
<div class="form-group">
    <label for="descricao_detalhada">Descrição Detalhada</label>
    <input type="text" value="{{isset($registro->descricao_detalhada) ? $registro->descricao_detalhada : '' }}" class="form-control" id="descricao_detalhada" placeholder="Descrição Sumária" name="descricao_detalhada">
</div>
<div class="form-group">
    <label for="experiencia_acumulada">Experiências</label>
    <input type="text" value="{{isset($registro->experiencia_acumulada) ? $registro->experiencia_acumulada : '' }}" class="form-control" id="experiencia_acumulada" placeholder="Descrição Sumária" name="experiencia_acumulada">
</div>
