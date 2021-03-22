<?php 
class UserManager extends Database {

    protected function getAllUser(){
       
        $q =  $this->connect()->query("SELECT * FROM user"); 
     
            while($row = $q->fetch()){
                $data[] = $row;
            }
            return $data;
    } 

    protected function getUserStatment($id){
        $id = (int) $id;

        $q = $this->connect()->query('SELECT nom, age FROM user WHERE id = '.$id);
        $data = $q->fetch(PDO::FETCH_ASSOC);

       echo "<p>".$data['nom']." à ".$data['age']." ans</p>";
       
    }

    public function addUser(User $user)
    {
      $q = $this->connect()->prepare('INSERT INTO user(nom, age) VALUES(:nom, :age)');
      $q->bindValue(':nom', $user->nom());
      $q->bindValue(':age', $user->age(), PDO::PARAM_INT);

      $q->execute();
    }

    public function updateUser(User $user){
        $q = $this->connect()->prepare('UPDATE user SET nom = :nom, age = :age WHERE id = :id');
        $q->bindValue(':nom', $user->nom(), PDO::PARAM_STR);
        $q->bindValue(':age', $user->age(), PDO::PARAM_INT);
        $q->bindValue(':id', $user->id(), PDO::PARAM_INT);
    
        $q->execute();
    }

    public function removeUser($id){
        $this->connect()->exec('DELETE FROM user WHERE id = '.$id);
    }
}
