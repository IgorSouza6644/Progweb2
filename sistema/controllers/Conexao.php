<?php


class ConexaoDB
{
    //usando o padrao singleton para garantir que so tenha uma instacia da classe
    public  static $instance;

    private function __contruct(){

    }

    public static function  getInstace(){

        if (!isset(self::$instance)){
            //conexão com o db
            self::$instance= new PDO('mysql:host=localhost;dbname=pw2_2019_1','desenv','123456');
            //tratamento de excessoes
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}