<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model{


    public function getAllBarang ()
    {
        return $this->db->get('barang')->result_array(); 
    }

}

