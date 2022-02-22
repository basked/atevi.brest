<?php
declare(strict_types=1);

 require_once '../../vendor/autoload.php';
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo(string $i = 'Info'):string
    {
        return $i . ': ' . $this->name . ' ' . $this->age;
    }
}

$p = new Person('basked', 35);
$info = $p->getInfo(51521);
echo $info;

$bas= ['bas', 'ket'];
$ket = [1,2,3,...$bas];
dd($ket);
return;