<?php
class Person 
{
		// Phạm vi truy cập
	    public $fullName = "";
		private $age;
		 // Các phương thức
		  function getFullName()
		{
			  return "tên là:". $this->fullName;
		}		
} 
$per  = new Person();
echo $per->fullName = "Hoàn đây <br/>";
echo $per->getFullName();
echo $per->age = 24;
?>