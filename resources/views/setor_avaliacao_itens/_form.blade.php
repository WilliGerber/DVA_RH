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
    <label for="setor">Selecione um Setor</label>
    <select class="form-control" name="id_setor" id="setor">
        <option value="" selected>Setor</option>
        @foreach($setores as $setor)
        <option value="{{ $setor->id }}" {{ isset($registro->id_setor) && $registro->id_setor == $setor->id ? 'selected' : '' }} >{{ $setor->nome }}</option>
        @endforeach
    </select>
</div>