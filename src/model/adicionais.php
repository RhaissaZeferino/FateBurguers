<?php

class adicionais
{

    //atributos
    private $codigo;
    private $descricao;
    private $preco;

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    public function listarTodos($conexao)
    {
        //consulta banco de dados e trazer todos os registros do adicional
        $comandosql = "Select * from adicionais";
        $dados = $conexao->query($comandosql);
        return $dados;
    }

    public function fecharConexao($conexao, $dados = null)
    {
        if ($dados != null)
            $dados->free_result();
        $conexao->close();
    }

    public function inserirAdicionais($conexao, $obj)
    {
        $comandosql = "Insert into adicionais(codigo, descricao, preco) values
        (null, '$obj->descricao', '$obj->preco')";
        if ($conexao->query($comandosql))
            return true;
    }
    public function listarporCodigo($conexao, $codigo)
    {
        $comandosql = "Select * from adicionais where codigo=$codigo";
        $dados = $conexao->query($comandosql);
        return $dados;
    }

    // ?????????????????????????????????????????????????????????????????????????????????????????????
    /*
    public function listarporTipo($conexao, $tipo)
    {
        $comandosql = "Select * from produto where tipo=$tipo";
        $dados = $conexao->query($comandosql);
        return $dados;
    }
    */
    public function atualizarCliente($conexao, $obj)
    {
        $comandosql = "Update adicionais set descricao = '$obj->descricao',
                        preco = '$obj->preco'
                        where codigo = $obj->codigo";
        echo $comandosql;
        if ($conexao->query($comandosql))
            return true;
    }

    public function excluirCliente($conexao, $codigo)
    {
        $comandosql = "Delete from cliente where codigo = $codigo";
        if ($conexao->query($comandosql))
            return true;
    }
}