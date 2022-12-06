<?php 

final class conexion {
	
    private static $_handle = null;
    private static $_dsn = "mysql:dbname=miproyectophp;host=localhost";
    private static $_user = "root";
    private static $_password = "";
    private static $_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); // SET UTF-8
    private static $instance;
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


    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new conexion();
        }
        return static::$instance;
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