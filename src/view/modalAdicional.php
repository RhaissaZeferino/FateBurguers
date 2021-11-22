<body>
    <div class="modal fade" id="modalAdicional" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">
                        Cadastro de Adicionais
                        <!-- Modal Adicionais -->
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../controller/cadastrar_adicionais.php">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control" id="codigo" name="codigo">
                            <label for="codigo">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao">
                            <label for="codigo">Preço</label>
                            <input type="text" class="form-control" id="preco" name="preco">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>