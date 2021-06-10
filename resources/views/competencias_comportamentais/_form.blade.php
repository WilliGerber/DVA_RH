@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" value="{{isset($registro->descricao) ? $registro->descricao : '' }}" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
</div>

