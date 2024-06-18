<?php
class Connection
{
    static function _connect()
    {
        #$options = array(
       # PDO::MYSQL_ATTR_SSL_CA => '../ssl/BaltimoreCyberTrustRoot.crt.pem'
#);

        // Variables de entorno para la conexión a la base de datos
        $DB_NAME=getenv('db_name');
        $DB_HOST=getenv('db_host');
        $DB_USERNAME = getenv('db_username');
        $DB_PASSWORD = getenv('db_password');

       // Construcción del DSN (Data Source Name) y asignación de credenciales
        $dsn ="mysql:host=$DB_HOST;dbname=$DB_NAME";
        $username = $DB_USERNAME;
        $password =$DB_PASSWORD;
        
        try {
            $connection = new PDO($dsn,$username,$password);
            //echo "conectado";
            return $connection;
        } catch (\Throwable $th) {
            die("Fallo de connection" . $th->getMessage());
        }
    }
}

//Connection::_connect();
