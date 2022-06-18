<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['name_user','password_user','email_user','info_user'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    function getAll(){
         $builder = $this->db->table('users');
         $query = $builder->get();
         return $query->getResult();
    }
}
