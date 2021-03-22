<?php 
class ViewUser extends UserManager {

    public function showAllUser(){
         $datas = $this->getAllUser();
         foreach($datas as $data){
            echo "<p>(Nom) = ".$data['nom']." (Age) = ".$data['age']."</p>";
             
         }
    }

    public function showUserStatment($id){
        return $this->getUserStatment($id);
    }
    
}