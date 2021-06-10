@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="responsavel">Descrição</label>
    <input type="text" value="{{isset($registro->descricao) ? $registro->descricao : '' }}" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
</div>
<div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" value="{{isset($registro->responsavel) ? $registro->responsavel : '' }}" class="form-control" id="responsavel" placeholder="Nome Responsável" name="responsavel">
</div>
