<?php session_start();  ob_start();
include_once 'config.php';
Class DB{
    
    private $_host= HOST;
    private $_db = DBNAME;
    private $_dbUserName= DBUSERNAME;
    private $_dbPassword= DBPASSWORD;
    protected $_conn;
    
    public function __construct() {
        
        try {
            $this->_conn = new PDO("mysql:host=$this->_host;dbname=$this->_db", $this->_dbUserName, $this->_dbPassword);
            // set the PDO error mode to exception
            $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
                
    }
    
}
