<?php 
class LopCha{
    public $name = "anh hoan day";
    protected $age = 20;
    private $salary = 5000;

    public function getSalary(){
        return $this->salary;
    }
    public function getAge(){
        return $this->age;
    }
}
$x = new LopCha();
echo $x->getAge();
?>