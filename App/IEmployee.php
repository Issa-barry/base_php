<?php
interface IEmployee {
    public function __construct(int $id, string $name, int $age);
    public function getId() :int;
    public function getName() :string;
    public function setId(int $id);
    public function setName(string $name);
    public function setAge(int $age);
    public function __toString() : string;
}
?>