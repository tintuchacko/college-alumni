<?php
/*
* Author: 
* Description: Batch class with Batch member properties.
* Date:  28 - Feb - 2015
* Version: 1.0
* Company: Technolodge.
*/
include_once 'course.php';

class Batch extends Course
{  
	//Properties or Member variables
	var $batchid;
	var $batchname;

	//Constructor
	function __construct()
	{
		$this->batchid=0;
		$this->batchname = "";
	}

	//Functions/Member Functions goes here

	// Magic Getter Method for PHP. Rather than calling individual getters and setters for member properties
	// this method can get any member property by its name.
	// Eg: $object->__get("firstname");
	public function __get($property) 
	{
	    if (property_exists($this, $property)) 
	    {
		    return $this->$property;
		}
	}

	// Magic Setter Method for PHP. Rather than calling individual getters and setters for member properties
	// this method can set any member property by its name and value.
	// Eg: $object->__set("firstname","Joe")
	public function __set($property, $value)
	{
		if (property_exists($this, $property))
	  	{
	  		$this->$property = $value;
		}
		return $this;
	}
}
?>