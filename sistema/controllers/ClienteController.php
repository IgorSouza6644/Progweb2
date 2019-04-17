<?php
require_once"../models/Cliente.php";
require_once "Conexao.php";
class ClienteController
{

    public static function inserir(Cliente $cliente){
        //string de incerção no banco de dados
        $sql = "INSERT INTO cliente (nome, cpf,endereco, email,senha,telefone) 
                VALUES (:nome , :cpf, :endereco, :email, :senha, :telefone)";//criando parametros

        $db = ConexaoDB::getInstace();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':nome',$cliente->getNome());
        $stmt->bindValue(':cpf',$cliente->getCpf());
        $stmt->bindValue(':endereco',$cliente->getEndereco());
        $stmt->bindValue(':email',$cliente->getemail());
        $stmt->bindValue(':senha',$cliente->getSenha());
        $stmt->bindValue(':telefone',$cliente->getSenha());

        $stmt->execute();

        //return $sql;
    }

    public static function trazerTodos()
    {
        $sql = "SELECT * FROM cliente ORDER BY nome";

        $db = ConexaoDB::getInstace();
        $stmt = $db->query($sql);

        $listagem = $stmt-> fetchAll( PDO::FETCH_ASSOC);

        $arrRetorno[]= array();
        foreach ($listagem as $itemLista)
        {
            $arrRetorno[] = self::popularCliente($itemLista);
        }
        return $arrRetorno;

        private static function popularCliente($itemLista){
            $cliente = new Cliente();
            $cliente->setId($itemLista['id']);
            $cliente->setnome($itemLista['nome']);
            $cliente->setcpf($itemLista['cpf']);
            $cliente->setEndereco($itemLista['endereco']);
            $cliente->setEmail($itemLista['email']);
            $cliente->setSenha($itemLista['senha']);
            $cliente->setTelefone($itemLista['telefone']);
            $arrRetorno[] = $cliente;

        }

        public static  function excluir($id){
        $sql = "DELETE FROM cliente WHERE  id = :id";
        $db = ConexaoDB::getInstace();
        $stmt = $db->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();




    }

    }



}