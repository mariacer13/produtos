<?php
class Connection
{
    static function _connect()
    {
        $dsn = "mysql:host=dbproductosml.mysql.database.azure.com;dbname=db_personaproducto";
        $username = "administrador";
        $password = "12345678ml_";
        try {
            $connection = new PDO($dsn, $username, $password);
            //echo "conectado";
            return $connection;
        } catch (\Throwable $th) {
            die("Fallo de connection" . $th->getMessage());
        }
    }
}

//Connection::_connect();
