<?php include_once 'db.php';
Class Access extends DB {
    private $_adminTable='admin';
    public function __construct() {
        parent::__construct();
    }
    
    
    public function checkEmail($data){
        try {
            //$query = $this->_conn->prepare('SELECT * FROM admin WHERE email = :email AND password = :password AND status=:status');
            $query = $this->_conn->prepare('SELECT * FROM admin WHERE email = :email AND status=:status');
            $query->execute($data);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $row_count = $query->rowCount();
            if($row_count==1){
            //$user = $query->fetch();
                while($row = $query->fetch()) {
                      return 1;   
                }
            }
            else{
                return 2;
            }
            
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function generatePassword(){
        return $pwd = bin2hex(openssl_random_pseudo_bytes(4));
    }

    public function updatePassword($data) {
        try{	 
            $_data=array(); 
            $_data=$data;//var_dump($_data);return;
            //$sqlInsert = 'UPDATE w_admin set name=:name,email=:email,password=:password where id=:id';
            $query = $this->_conn->prepare('UPDATE '.$this->_adminTable.' set password=:password where email=:email');
            $query->execute($_data); 
            return $query->rowCount();
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}
    }
    
    public function sendMail(){
        
        
    }

    public function forgotPassword($data){
        $emailResult=$this->checkEmail($data);
        if(!empty($emailResult)){
            if($emailResult==1){
                $newPassword=$this->generatePassword();
                $newEncPassword=sha1($newPassword);
                $password=array('email'=>$data['email'],'password'=>$newEncPassword);
                $uResult=$this->updatePassword($password);
                if($uResult==1){
                    $to = $data['email'];
                    $subject = "Forgot Password";
                    $message ='<html>';
                    $message .='<head>';
                    $message .='<title>Forgot Password</title>';
                    $message .='</head>';
                    $message .='<body>';
                    $message .='<table>';
                    $message .='<tr><td>Hi,</td><td></td></tr>';
                    $message .='<tr><td>Your new Password is</td><td>'.$newPassword.'</td></tr>';
                    $message .='</table>';
                    $message .='</body>';
                    $message .='</html>';

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    // More headers
                    $headers .= 'From: <online@esvhvac.ca>' . "\r\n";
                    if(@mail($to, $subject, $message, $headers)){
                        return 1;
                    }
                    else{
                        return 2;
                    }
                    
                }
                else{
                    return 3;
                }
            }
        }
        else{
            return 0;
        }
    }
    


    public function signIn($data){
        try {
            $query = $this->_conn->prepare('SELECT * FROM admin WHERE name = :name AND password = :password AND status=:status');
            $query->execute($data);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $row_count = $query->rowCount();
            if($row_count==1){
            //$user = $query->fetch();
                while($row = $query->fetch()) {
                      $_SESSION['admin']=array('adminId'=>$row['id'],
                                               'adminName'=>$row['name'],
                                               'adminEmail'=>$row['email'],
                                               'adminPassword'=>$row['password'],
                                               'adminStatus'=>TRUE
                                              ); 
                      return 1;   
                }
            }
            else{
                return 2;
            }
            
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function signOut(){
        
        if(empty($_SESSION['admin']['adminStatus'])){
            unset($_SESSION['admin']); // will delete just the name data
            session_destroy(); 
            return 0;
	}
	elseif(!empty($_SESSION['admin']['adminStatus'])){
            unset($_SESSION['admin']); // will delete just the name data
            session_destroy(); 
            return 1;
	}
	else{
            unset($_SESSION['admin']); // will delete just the name data
            session_destroy(); 
            return 2;
	}	
        
    }
    
    public function add($data){
        try{	 
                $_data=array(); 
                $_data=$data;
                $old=$this->select('subscribers where email = "'.$_data["email"].'"');//var_dump($old);
            if(isset($old[0]['id'])) {
			return 0;
	}
               $sql='INSERT INTO subscribers (email)VALUES(:email)';
                $query = $this->_conn->prepare($sql);
                $query->execute($_data);
               $lastId = $this->_conn->lastInsertId();
                return $lastId;
        }
        catch(PDOException $e) {
	    echo $e->getMessage();
	}

    }
 public function select($data){
        $sql='SELECT * FROM '.$data.';';
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

public function delete($data){
        try{	 
            $_data=array(); 
            $_data=$data;
            $sql = 'DELETE FROM subscribers where email=:id';
            $query = $this->_conn->prepare($sql);
            $query->execute($_data); 
            return $query->rowCount();
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}
    }
 public function update($data){
        
        try{	 
            $_data=array(); 
            $_data=$data;
            $sql = 'UPDATE subscribers set '
                                            . 'is_verified=:status'
                                            . ' where email=:id';
            $query = $this->_conn->prepare($sql);
            $query->execute($_data); 
            return $query->rowCount();
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}
    }

}
