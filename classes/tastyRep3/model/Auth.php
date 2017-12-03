<?php

  namespace tastyRep3\model


class Auth extends AbstractModel
{
   public function loginUser(){
        $result1 = $this->databaseManager->getUsernameByName($this->username);
        $resultCheck1 = mysqli_num_rows($result1);
        if($resultCheck1 > 0){
            $result2 = $this->databaseManager->getUserPasswordByName($this->username);
            if(password_verify($this->password, $result2)){
                return 'OK';
            }else{
                return 'Invalid';
            }
        }else{
            return 'Invalid';
       }
   }

}