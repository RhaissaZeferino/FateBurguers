<?php

include "modalAdicional.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Edição de Adicionais</title>
</head>


<body class="container-fluid">

    <h1>Edição de Adicionais</h1>

    <a id="modal-adicionais" href="#" role="button" class="btn btn-outline-primary addButton" data-toggle="modal" data-target="#modalAdicional">Adicionar</a>
    
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($objcli = $dados->fetch_object()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $objcli->codigo; ?></th>
                        <td><?php echo $objcli->descricao; ?></td>
                        <td><?php echo $objcli->preco; ?></td>
                        <td>
                            <a href="editarAdicionais.php?id=<?php echo $objcli->codigo ?>&acao=editar">
                                Editar |

                                <!-- <button location.href="#">Exemplo</button> -->
                                <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este cliente?'))location.href='../controller/filtrar_adicionais.php?id=<?php echo $objcli->codigo ?>&acao=excluir'">
                                    Excluir </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </div>

</body>

</html>