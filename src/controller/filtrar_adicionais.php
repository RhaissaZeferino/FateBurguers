<?php
    /*
    if(count($_POST) > 0) {
        // TELA DE CADASTRO DE PRODUTOS
        $codigo = $_POST['codigo'];
        $descricao  = $_POST["descricao"];
        $preco = $_POST["preco"];

        try {
            require("../model/conexao.php");

            
            $sql = "INSERT INTO adicionais 
                    (codigo, descricao, preco) 
                    VALUES 
                    (?,?,?)";
            $stmt= $conn->prepare($sql);
            
            $stmt->execute([$codigo, $descricao, $preco]);
        
            $resultado["msg"] = "Item inserido com sucesso!";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";
        }
        catch(PDOException $e){
            $resultado["msg"] = "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        }
        $conn = null;
    }

    include("../view/index.php");
    */

require "../model/conexao.php";

$objAdicionais = new Adicionais();

//popular o objeto
$objAdicionais->setCodigo($codigo);
$objAdicionais->setDescricao($descricao);
$objAdicionais->setPreco($preco);

//carrego todos os dados do cliente no vetor $dados
$dados = $objAdicionais->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objAdicionais->excluirAdicionais($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
    elseif($acao == 'editar'){
        $dadoscodigo = $objAdicionais->listarporCodigo($conexao, $codigo);
        while($dadosAdicionais=$dadoscodigo->fetch_object()){
            //variaveis
            $codigo = $dadosAdicionais->codigo;
            $descricaco = $dadosAdicionais->descricao;
            $preco = $dadosAdicionais->preco;
            $edicao = true;
        }
    }
}elseif(isset($_POST['edicao'])){
        if($objAdicionais->atualizarAdicionais($conexao, $objAdicionais)){
        header("location:../view/index.php");
    }else{
        echo "Erro ao inserir!";
    }
}elseif(isset($_POST['codigo'])){
    if($objAdicionais->inserirAdicionais($conexao, $objAdicionais)){
        header("location:../view/index.php");
    }
}

?>