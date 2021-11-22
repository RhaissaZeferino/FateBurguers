<body>
    <div class="col-md-12">
        <div class="modal fade" id="modalCliente" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">
                            Cadastro de Clientes
                            <!-- Modal Cliente -->
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="../controller/cadastrar_clientes.php">
                            <?php if (isset($resultado) && $resultado["cod"] == 0) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $resultado["msg"]; ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" class="form-control" id="codigo" name="codigo">
                                <label for="codigo">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                                <label for="codigo">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco">
                                <label for="codigo">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone">
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
    </div>
</body>