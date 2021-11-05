<?php

    if(count($_POST) > 0) {
        // 1. Dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // 2. Conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Nas linhas de baixo vai tentar fazer conexão
        try {
            $conn = new PDO("mysql:host=$servername;dbname=lanchonete", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexão realizada com sucesso!"; 

            // 3. Verificar se o email e a senha estão no banco de dados
            $stmt = $conn->prepare("SELECT codigo FROM usuario WHERE email=:email AND senha=md5(:senha)");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll();
            $qtd_usuarios = count($result);
            if($qtd_usuarios == 1){
                $resultado["msg"] = "Usuário logado com sucesso!";
                $resultado["cod"] = 1;
            } elseif($qtd_usuarios == 0) {
                $resultado["msg"] = "Usuário ou senha inválidos!";
                $resultado["cod"] = 0;
            }
        }
        catch(PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
        $conn = null;    
    }
    include ("logar.php");
?>