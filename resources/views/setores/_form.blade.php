@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" value="{{isset($registro->descricao) ? $registro->descricao : '' }}" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Selecione um Departamento</label>
    <select class="form-control" name="id_departamento" id="departamento">
        <option value="" selected>Departamento</option>
        @foreach($departamentos as $departamento)
        <option value="{{ $departamento->id }}" {{ isset($registro->id_departamento) && $registro->id_departamento == $departamento->id ? 'selected' : '' }} >{{ $departamento->nome }}</option>
        @endforeach
    </select>
</div>