<?php
/**
* Author:
* Description:  Department member properties declaration.
* Date: 28 - Feb - 2015
* Version: 1.0
* Company: Technolodge 
*/
class Department 
{	
	//Member properties
	var $departmentid;
	var $departmentname;

	//Constructor
	function __construct()
	{
		$this->departmentid=0;
		$this->departmentname = "";
	}

	//Member functions goes here

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