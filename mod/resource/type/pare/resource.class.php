<?php

require_once('FirePHPCore/fb.php');

class resource_pare extends resource_base
{
 
	function resource_pare($cmid=0)
	{
		parent::resource_base($cmid);
	}

	function display()
	{
		///Display the resource

		global $CFG;
		parent::display();
		
		
	}

	function add_instance($resource)
	{
		return parent::add_instance($resource);
	}

	function update_instance($resource)
	{
		return parent::update_instance($resource);
	}

	function delete_instance($resource)
	{
		return parent::delete_instance($resource);
	}

	function setup_elements(&$mform)
	{
	}

	function setup_preprocessing(&$default_values)
	{
	}
 
}