<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPilihan extends CI_Model {
    protected $_table = 'admin';
    function __construct() {
        parent::__construct(); 
    }
    public function get_data($table) 
    {
        return $this->db->get($table)->result_array();
    }

 
 }
