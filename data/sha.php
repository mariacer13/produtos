<?php
//METODO PARA ENCRYTAR Y DESENCRYTAR PASSWORD
define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$harlericho@2020');
define('SECRET_IV', '909090');
class SED
{
    public static function encryption($string)
    {
        
        return $string;
    }
    public static function decryption($string)
    {
        
        return $string;
    }
}
