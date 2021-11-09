<?php
    if(count($_POST) > 0) {
        // TELA DE CADASTRO DE PRODUTOS
        $codigo = $_POST['codigo'];
        $nome  = $_POST["nome_produto"]; //no slide da professora ta como "descricao" essa descricao seria o nome do produto, nao?
        $preco = $_POST["preco_produto"];

        try {
            include("conexao_bd.php");

            
            $sql = "INSERT INTO item_pedido 
                    (codigo, nome_produto, preco_produto) 
                    VALUES 
                    (?,?,?)";
            $stmt= $conn->prepare($sql);
            
            $stmt->execute([$codigo, $nome, $preco,]);
        
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

    include("index.html");

?>