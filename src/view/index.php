<?php
    require "header.php";
    include "modalCliente.php";
    include "modalBebida.php";
    include "modalLanche.php";
    include "modalAdicional.php";
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Aqui está o menu da página inicial -->
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <img src="../../assets/logo.png" alt="FateBurguers" width="100" height="100">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Novo <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fechar Pedido</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Salvar</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cadastros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="modal-clientes" href="#" role="button" class="btn" data-toggle="modal" data-target="#modalCliente">Clientes</a>
                                    <a class="dropdown-item" id="modal-bebidas" href="#" role="button" class="btn" data-toggle="modal" data-target="#modalBebida">Bebidas</a>
                                    <a class="dropdown-item" id="modal-lanches" href="#" role="button" class="btn" data-toggle="modal" data-target="#modalLanches">Lanches</a>
                                    <a class="dropdown-item" id="modal-adicionais" href="editarAdicionais.php" role="button" class="btn">Adicionais</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Relatórios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="modal-pedidoatual" href="#modal-container-pedidoatual" role="button" class="btn" data-toggle="modal">Pedido Atual</a>
                                    <a class="dropdown-item" id="modal-todospedidos" href="#modal-container-todospedidos" role="button" class="btn" data-toggle="modal">Todos Pedidos</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Aqui estão armazenados todos os Modals da página incial -->
            <div class="modal fade" id="modal-container-pedidoatual" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">
                                Modal Pedido Atual
                            </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">
                                Salvar
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-container-todospedidos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">
                                Modal Todos Pedidos
                            </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">
                                Salvar
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aqui começa os campos da página incial -->
        <div class="row">
            <!-- Parte "Dados": -->
            <div class="col-md-7">
                <fieldset class="border p-2">
                    <legend class="scheduler-border w-auto">Dados</legend>
                    <form>
                        <div class="form-group">
                            <label for="codigo">Código do Pedido</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código do Pedido">
                        </div>
                        <div class="form-group ">
                            <label for="nome">Nome do Cliente</label>
                            <div class="grupoMesmaLinha">
                                <select class="form-control" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                                    <option>Caroline</option>
                                    <option>João</option>
                                    <option>Rhaissa</option>
                                </select>
                                <a id="modal-clientes" href="#" role="button" class="btn btn-outline-primary addButton" data-toggle="modal" data-target="#modalCliente">+</a>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <!-- Aqui estão posicionados "Tipos de Lanche" e primeira parte de "Adicionais" -->
                <div class="row">
                    <!-- Tipos de Lanche:-->
                    <div class="col-md-8">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Tipos de Lanche</legend>
                            <form>
                                <div class="form-group grupoMesmaLinha">
                                    <select class="form-control" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                                        <option>Cachorro Quente</option>
                                        <option>Coxinha</option>
                                        <option>Pastel</option>
                                        <option>Hambúrguer</option>
                                        <option>Sanduíche</option>
                                        <option>Batata Frita</option>
                                    </select>
                                    <a id="modal-lanches" href="#" role="button" class="btn btn-outline-primary addButton" data-toggle="modal" data-target="#modalLanches">+</a>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <!-- Adicionais: -->
                    <div class="col-md-4">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Adicionais</legend>
                            <form>
                                <div class="form-group ">
                                    <input type="radio" name="opcao" value="op1"> Sim
                                    <input type="radio" name="opcao" value="op2"> Não
                                    <a id="modal-adicionais" href="#" role="button" class="btn btn-outline-primary addButton" data-toggle="modal" data-target="#modalAdicional">+</a>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <!-- Bebidas: -->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Bebidas</legend>
                                    <form>
                                        <div class="form-group">
                                            <input type="radio" name="opcao" value="op1"> Sim
                                            <input type="radio" name="opcao" value="op2"> Não

                                    </form>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Bebida Gelada?</legend>
                                    <form>
                                        <div class="form-group">
                                            <input type="radio" name="opcao" value="op1"> Sim
                                            <input type="radio" name="opcao" value="op2"> Não

                                    </form>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Tipos de Bebidas</legend>
                                    <form>
                                        <div class="form-group grupoMesmaLinha">
                                            <select class="form-control tipoSelects" id="nome" name="nome" placeholder="Nome do Cliente">
                                                <option>Coca Cola</option>
                                                <option>Sprite</option>
                                                <option>Pepsi</option>
                                                <option>Água</option>=
                                            </select>
                                            <a id="modal-bebidas" href="#" role="button" class="btn btn-outline-primary addButton" data-toggle="modal" data-target="#modalBebida">+</a>
                                        </div>
                                    </form>
                                </fieldset>
                                <!-- Data do Pedido -->
                                <fieldset class="border p-2">
                                    <legend class="scheduler-border w-auto">Data do Pedido</legend>
                                    <form>
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="data" name="data" placeholder="Data do Pedido">
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- Parte 2 de Adicionais: -->
                    <div class="col-sm-4">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Adicionais</legend>
                            <form>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> Coca Cola</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Fanta Laranja</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3">Fanta Uva</label>
                            </form>
                        </fieldset>
                    </div>
                    <!-- Observações -->
                    <div class="col-md-12">
                        <fieldset class="border p-2">
                            <legend class="scheduler-border w-auto">Observações</legend>
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" id="observacao" rows="3" placeholder="Observações"></textarea>
                                </div>
                            </form>
                        </fieldset>
                    </div>

                </div>
            </div>
            <!-- Coluna 2, com o Textarea -->
            <div class="col-md-5">
                <fieldset class="border p-2">
                    <legend class="scheduler-border w-auto">Pedido</legend>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="exampleTextarea" rows="25" placeholder="Os dados do pedido aparecerão aqui."></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>
</body>

</html>