<?php
class Connection
{
    static function _connect()
    {
        try {
            $connection = new PDO("mysql:host=localhost;dbname=db_personaproducto", "root", "");
            //echo "conectado";
            return $connection;
        } catch (\Throwable $th) {
            die("Fallo de connection" . $th->getMessage());
        }
    }
}

//Connection::_connect();
