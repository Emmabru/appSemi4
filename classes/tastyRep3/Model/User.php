<?php
namespace tastyRep3\Model;

use tastyRep3\Model\dbmanager;

class User {
    
    private $username;
    private $password;
    private $dbmanager;
    
    public function __construct($username,$password) {
        $this->dbmanager = new dbmanager();
        $this->username = $username;
        $this->password = $password;
    }
    
    public function signUpUser(){
        $result = $this->dbmanager->getUsernameByName($this->username);  
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            return 'usernameTaken';
        }else{
            $hash = password_hash($this->password, PASSWORD_DEFAULT);
            $this->dbmanager->createUser($this->username, $hash);
            return 'signUpComplete';
        }   
   }
   public function loginUser(){
        $userPass = $this->dbmanager->getUserPasswordByName($this->username);
        if($this->password == $userPass){
            return 'loginOk';            
        } else {
            return 'Invalid';
        }

           /*
        $result1 = $this->dbmanager->getUsernameByName($this->username);
        $resultCheck1 = mysqli_num_rows($result1);
        if($resultCheck1 > 0){
            $result2 = $this->dbmanager->getUserPasswordByName($this->username);
            if(password_verify($this->password, $result2)){
                //return 'loginOk';
            }else{
               // return 'Invalid';
            }
        }else{
            //return 'Invalid';
       }*/
   }
}