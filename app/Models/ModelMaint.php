<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMaint extends Model
{
    protected $table            = 'maintenance';
    protected $primaryKey       = 'id_maint';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['alias_ht','tanggal_maint','kondisi_maint','ket_maint','foto_maint1','foto_maint2','foto_maint3'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function get_inv($id)
    {
        return $this->db->table('inventaris')->get($id)->getResult($id);
    }
}
