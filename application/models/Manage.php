<?php

/**
	This represents the Robots model. It contains mock data that is to 
	represent a database. It contains robot model IDs, each robort part 
	IDs, the type as well as the picture that goes along with the robot
	
	Author: Alex Zielinski
*/

class Robots extends CI_Model 
{
	// array to hold mock data

	
	
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single entry
	public function get($which)
	{
		$this->db->order_by("id");
        $query = $this->db->get('robots');
        $data = $query->result_array();
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the robots
	public function all()
	{
		$this->db->order_by("id");
        $query = $this->db->get('robots');
        $data = $query->result_array();
		return $data;
	}
};