<?php
class User
{
  private $_id;
  private $_nom;
  private $_age;
    
    
    // Constructeur
    public function __construct(array $tab)
    {
    $this->hydrate($tab);
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value)
        {
        $method = 'set'.ucfirst($key);
            
        if (method_exists($this, $method))
        {
            $this->$method($value);
        }
        }
    }
    //Getters
    public function id() { return $this->_id; }
    public function nom() { return $this->_nom; }
    public function age() { return $this->_age; }

    //Setters
    public function setId($id)
    {
        $this->_id = (int) $id;
    }
            
    public function setNom($nom)
    {
        if (is_string($nom) && strlen($nom) <= 30)
        {
        $this->_nom = $nom;
        }
    }

    public function setAge($age)
    {
        $age = (int) $age;
        if ($age >= 0 && $age <= 100)
        {
        $this->_age = $age;
        }
    }
    
    public function __toString() : string
    {
        return  "\n Nom = ".$this->nom()."\n Age = ".$this->age();
    }
}