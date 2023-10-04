<?php
class Car 
{
//Privare property inside the class Car
   private $model;
//Public setter method
   public function setModel($model)
   {
   $this->model=$model;
   }
   public function hello()
   {
   return "beep! I am a <i>".$this->model."</i><br/>";
   }
}

//The child inherits the code dorm parent class
class SportsCar extends Car
{
//No code in here
}

//create an instance from the child class
$sportsCar1 = new SportsCar();

//Set the value of the class' property
//For this aim, we use a method that we created in the parent
$sportsCar1 -> setModel('Mercedes Benz');

//use another method that the child class inherited from the parent class
echo $sportsCar1 -> hello();

