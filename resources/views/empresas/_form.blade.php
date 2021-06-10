@csrf
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="{{isset($registro->nome) ? $registro->nome : '' }}" class="form-control" id="nome" placeholder="Nome" name="nome" required>
</div>
<div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" value="{{isset($registro->cidade) ? $registro->cidade : '' }}" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
</div>
