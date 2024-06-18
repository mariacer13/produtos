<?php
class Connection
{
    static function _connect()
    {
        #$options = array(
       # PDO::MYSQL_ATTR_SSL_CA => '../ssl/BaltimoreCyberTrustRoot.crt.pem'
#);
        $DB_DSN = getenv('db_dsn');
        $DB_USERNAME = getenv('db_username');
        $DB_PASSWORD = getenv('db_password');
        $dsn =$DB_DSN;
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
