<?php

require_once('FirePHPCore/fb.php');

class resource_pare extends resource_base
{
 
	function resource_pare($cmid=0)
	{
		parent::resource_base($cmid);
		
		fb('Constructor called');
	}

	function display()
	{
		///Display the resource

		global $CFG;
		fb('display was called');
		
		parent::display();
		
	}

	function add_instance($resource)
	{
		fb('add_instance called');
		return parent::add_instance($resource);
	}

	function update_instance($resource)
	{
		fb('update_instance called');
		return parent::update_instance($resource);
	}

	function delete_instance($resource)
	{
		fb('delete_instance called');
		return parent::delete_instance($resource);
	}
	
	/**
	*	setup_elements 
	* 	Sets up the 
	* 
	* 	@param $mform 
	*/
	function setup_elements(&$mform)
	{
		fb('setup_elements called');
	    return 'test';
		//$mform->addElement('htmleditor', 'alltext', get_string('fulltext', 'resource'), array('cols'=>85, 'rows'=>30));
		$mform->addElement('checkbox', 'blockdisplay', get_string('showcourseblocks', 'resource'));
	    
		fb($mform);
	}

	function setup_preprocessing(&$default_values)
	{
		fb('setup_preprocessing called');
		fb($default_values);
	}
 
}