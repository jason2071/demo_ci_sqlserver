<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drink_model extends CI_Model 
{
    protected $sqlDb;
    function __construct() 
    {
        parent::__construct();
        $this->sqlDb = $this->load->database('sqlserver', TRUE);
	}

    public function get_raw_query() 
    {
        $query = $this->sqlDb->query('SELECT * FROM product_detail'); 
        return $query->result_array();
    }

    public function get_ci_data() 
    {      
        $query = $this->sqlDb->get('product_detail'); 
        return $query->result_array();
	}
}
