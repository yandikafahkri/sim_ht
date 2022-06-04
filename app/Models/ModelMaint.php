<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMaint extends Model
{
    protected $table            = 'maintenance';
    protected $primaryKey       = 'id_maint';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['alias_ht','tanggal_maint','kondisi_maint','foto_maint'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    function getAll(){
         $builder = $this->db->table('maintenance');
        //  $builder->join('inventaris', 'inventaris.id_ht = maintenance.id_ht');
         $query = $builder->get();
         return $query->getResult();
    }
}
