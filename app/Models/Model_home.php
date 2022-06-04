<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_home extends Model
{
    public function jml_inv()
    {
        return $this->db->table('inventaris')->countAll();
    }

    public function get_inv()
    {
        return $this->db->table('inventaris')->get()->getResult();
    }

    public function jml_user()
    {
        return $this->db->table('users')->countAll();
    }

    public function get_usr()
    {
        return $this->db->table('users')->get()->getResult();
    }
    
    public function jml_maint()
    {
        return $this->db->table('maintenance')->countAll();
    }

    public function get_maint()
    {
        return $this->db->table('maintenance')->get()->getResult();
    }
}