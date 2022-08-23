<?php
class Hero
{
    private $name;
    private $surname;
    private $age;
    private $mother;
    private $father;
    function __construct($name, $surname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
    }
    function getName()
    {
        return $this->name;
    }
    function getSurname()
    {
        return $this->surname;
    }
    function getAge()
    {
        return $this->age;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "
            <h3>A few words about myself</h3><br>" . "
            My name is " . $this->getName() . " " . $this->getSurname() . ". " . "
            I'm " . $this->getAge() . " years old." . "<br>" . "
            My mother's name is " . $this->getMother()->getName() . " " . $this->getMother()->getSurname() . ". " . "
            She is " . $this->getMother()->getAge() . " years old." . "<br>" . "
            My father's name is " . $this->getFather()->getName() . " " . $this->getFather()->getSurname() . ". " . "
            He is " . $this->getFather()->getAge() . " years old." . "<br>" . "
            My maternal grandmother's name is " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getSurname() . ". " . "
            She is " . $this->getMother()->getMother()->getAge() . " years old." . "<br>" . "
            My maternal grandfather's name is " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getSurname() . ". " . "
            He is " . $this->getMother()->getFather()->getAge() . " years old." . "<br>" . "
            My paternal grandmother's name is " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getSurname() . ". " . "
            She is " . $this->getFather()->getMother()->getAge() . " years old." . "<br>" . "
            My paternal grandfather's name is " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getSurname() . ". " . "
            He is " . $this->getFather()->getFather()->getAge() . " years old.";
    }
}
$nina = new Hero("Nina", "Rudnykh", "85");
$anatoly = new Hero("Anatoly", "Rudnykh", "88");
$raisa = new Hero("Raisa", "Mishakina", "88");
$ivan = new Hero("Ivan", "Mishakin", "89");
$elena = new Hero("Elena", "Mishakina", "58", $nina, $anatoly);
$mikhail = new Hero("Mikhail", "Mishakin", "56", $raisa, $ivan);
$me = new Hero("Ksenia", "Kormakova", "27", $elena, $mikhail);


echo $me->getInfo();
