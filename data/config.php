<?php
class Connection
{
    static function _connect()
    {
        try {
            $connection = new PDO("mysql:host=dbproductosml.mysql.database.azure.com,
            dbname=db_personaproducto", "administrador", "12345678ml_");
            //echo "conectado";
            return $connection;
        } catch (\Throwable $th) {
            die("Fallo de connection" . $th->getMessage());
        }
    }
}

//Connection::_connect();
