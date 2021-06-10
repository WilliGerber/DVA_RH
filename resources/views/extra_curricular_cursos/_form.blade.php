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
    <label for="data_conclusao">Data de Conclusão</label>
    <input type="text"  value="{{isset($registro->data_conclusao) ? $registro->data_conclusao : '' }}" class="form-control" id="data_conclusao" placeholder="    /    /    " name="data_conclusao">
</div>
<div class="form-group" enctype="multipart/form-data">
    <label for="certificado" class="form-label">Selecione o arquivo</label>
    <input class="form-control" type="file" name="certificado" value="{{isset($registro->certificado) ? $registro->certificado : '' }}" required>
</div>
<div class="form-group">
    <label for="carga_horaria">Carga Horária</label>
    <input type="text" value="{{isset($registro->carga_horaria) ? $registro->carga_horaria : '' }}" class="form-control" id="carga_horaria" placeholder="Informe a carga horária" name="carga_horaria">
</div>


