@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="data_nascimento">Data Nascimento</label>
    <input type="text" value="{{isset($registro->data_nascimento) ? $registro->data_nascimento : '' }}" class="form-control" id="data_nascimento" placeholder="  /  /  " name="data_nascimento">
</div>
<div class="form-group">
    <label for="id_hierarquia">Hierarquia</label>
    <select class="form-control" name="id_hierarquia" id="id_hierarquia">
        <option value="" selected>Selecione o Cargo Superior</option>
        @foreach($hierarquias as $hierarquia)
        <option value="{{ $hierarquia->id }}" {{ isset($registro->id_hierarquia) && $registro->id_hierarquia == $hierarquia->id ? 'selected' : '' }} >{{ $hierarquia->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="id_setor">Setor</label>
    <select class="form-control" name="id_setor" id="id_setor">
        <option value="" selected>Selecione o Setor</option>
        @foreach($setores as $setor)
        <option value="{{ $setor->id }}" {{ isset($registro->id_setor) && $registro->id_setor == $setor->id ? 'selected' : '' }} >{{ $setor->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="data_admissao">Data Admissao</label>
    <input type="text" value="{{isset($registro->data_admissao) ? $registro->data_admissao : '' }}" class="form-control" id="data_admissao" placeholder="  /  /  " name="data_admissao">
</div>
<div class="form-group">
    <label for="id_cargo">Cargo</label>
    <select class="form-control" name="id_cargo" id="cargo">
        <option value="" selected>Selecione o Cargo</option>
        @foreach($cargos as $cargo)
        <option value="{{ $cargo->id }}" {{ isset($registro->id_cargo) && $registro->id_cargo == $cargo->id ? 'selected' : '' }} >{{ $cargo->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="sexo">Sexo</label>
    <input type="text" value="{{isset($registro->sexo) ? $registro->sexo : '' }}" class="form-control" id="sexo" placeholder="Sexo" name="sexo">
</div>
<div class="form-group">
    <label for="estado_civil">Estado Civil</label>
    <input list="estado_civil" value="{{isset($registro->estado_civil) ? $registro->estado_civil : '' }}" class="form-control" id="estado_civil" placeholder="Estado Civil" name="estado_civil">
</div>
<div class="form-group" enctype="multipart/form-data">
    <label for="foto" class="form-label">Selecione o arquivo</label>
    <input class="form-control" type="file" name="foto" value="{{isset($registro->foto) ? $registro->foto : '' }}" required>
</div>