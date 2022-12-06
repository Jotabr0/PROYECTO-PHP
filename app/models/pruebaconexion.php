<?php

final class prueba {
	
    private static $_handle = null;
    private static $_dsn = "mysql:dbname=mydb;host=my.host.com;port=3306";
    private static $_user = "myUserName";
    private static $_password = "myPassword";
    private static $_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); // SET UTF-8
    /**
     * Deny Construct
     */
    private function __construct()
    {
    }
    /**
     * Deny Clone
     */
    private function __clone()
    {
    }
    /**
     * Function to connect width database
     */
    function connect()
    {
        if ( is_null( self::$_handle ) ) {
            try {
                self::$_handle = new PDO( 
                    self::$_dsn, self::$_user, self::$_password, self::$_options 
                   );
            } catch ( PDOException $error ){
                die ( $error->getMessage() );
            }
        }
        return self::$_handle;
    }
}