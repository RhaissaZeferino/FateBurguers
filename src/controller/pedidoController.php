<?php
require "../model/conexao.php";
require "../model/pedido.php";
include "variaveisPedido.php";

$objPedido = new Pedido(); //instância da classe pedido

//popular o objeto
$objPedido->setCodigoPedido($codigoPedido);
$objPedido->setNomePedido($nomePedido);
$objPedido->setLanchePedido($lanchePedido);
$objPedido->setAdicionalPedido($adicionalPedido);
$objPedido->setBebidaPedido($bebidaPedido);
$objPedido->setBebidaGeladaPedido($bebidaGeladaPedido);
$objPedido->setBebidaTipoPedido($bebidaTipoPedido);
$objPedido->setAdicionalListaPedido($adicionalListaPedido);
$objPedido->setDataPedido($dataPedido);
$objPedido->setObservacoesPedido($observacoesPedido);
$objPedido->setTotalPedido($totalPedido);

//carrego todos os dados do cliente no vetor $dados
$pedido = $objPedido->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if($acao == 'editar'){
        if($objPedido->inserirPedido($conexao, $objPedido)){
            header("location:../view/index.php");
        }
    }
}