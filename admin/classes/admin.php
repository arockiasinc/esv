<?php include_once 'db.php';
Class Admin extends DB{
    
    private $_adminTable='admin';
    //private $_orderTable='ai_order';
    private $_orderTable='invoice';
    private $_quoteTable='quote';
    private $_letterPadTable='ai_letter_pad';
    
    public function __construct() {
        parent::__construct();
        $this->checkauth();
    }
    
    public function checkauth() {
        if(empty($_SESSION['admin']['adminStatus']) && !isset($_SESSION['admin']['adminStatus'])){
            header("location:index.php?msg=auth"); 
        }
    }
    
    public function updateSetting($data){
	try{	 
            $_data=array(); 
            $_data=$data;
            //$sqlInsert = 'UPDATE w_admin set name=:name,email=:email,password=:password where id=:id';
            if(isset($data['password']))
                $query = $this->_conn->prepare('UPDATE '.$this->_adminTable.' set name=:name,email=:email,password=:password,updated=:updated where id=:id');
            else
                $query = $this->_conn->prepare('UPDATE '.$this->_adminTable.' set gst=:gst,pst=:pst,updated=:updated where id=:id');
            $query->execute($_data); 
            return $query->rowCount();
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}
		 
    }
    
    public function add($data){
        try{	 
                $_data=array(); 
                $_data=$data;
               $sql='INSERT INTO '.$this->_quoteTable.'(email)VALUES(:email)';
                $query = $this->_conn->prepare($sql);
                $query->execute($_data);
               $lastId = $this->_conn->lastInsertId();
                return $lastId;
        }
        catch(PDOException $e) {
	    echo $e->getMessage();
	}

    }
    
    public function delete($data){
        try{	 
            $_data=array(); 
            $_data=$data;
            $sql = 'DELETE FROM subscribers where id=:id';
            $query = $this->_conn->prepare($sql);
            $query->execute($_data); 
            return $query->rowCount();
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}
    }
    
   
    public function select($data){
        $sql='SELECT * FROM '.$data.'';
        $query = $this->_conn->prepare($sql);
        $query->execute();
        $row_count = $query->rowCount();
        if($row_count!==0){
            //$user = $query->fetch();
                while($row = $query->fetch()) {
                   $rows[]=$row;  
                }
                return $rows;
        }
        else{
            return 0;
        }
        
    }
}
