<?php
 require_once('IEmployee.php');

class  Employee  implements IEmployee
{
private $id;
public $name;
private $age;
 

// Constructeur
public function __construct(int $id, string $name, int $age)
{
  $this->setId($id);
  $this->setName($name);
  $this->setAge($age);
}

  // Liste des getters
 

public function getId() :int {    return $this->id;}
public function getName() :string { return $this->name;}
public function getAge() :int { return $this->age;}

  // Liste des setters
  
public function setId(int $id)
  {

              $id = (int) $id;

              if ($id > 0)
              { 
                $this->id = $id;
              }
  }
  
  public function setName(string $name)
  {

            if (is_string($name))
            {
                $this->name = $name;
            }
  } 

  public function setAge(int $age)
  {

      $a = (int) $age;

              if ($a > 0)
              { 
                $this->age = $a;
              }
  }
  
  public function __toString() : string
  {
      return  "Id = ".$this->getId()."\n Nom = ".$this->getName()."\n Age = ".$this->getAge();
  }

 

}  //Fin de classe

 

 
