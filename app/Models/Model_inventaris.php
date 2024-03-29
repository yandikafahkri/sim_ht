<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_inventaris extends Model

{
    protected $table            = 'inventaris';
    protected $primaryKey       = 'id_ht';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['dep_ht','lokasi_ht','alias_ht','tipe_ht','sn_ht','pj_ht','kondisi_ht','ket_ht'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}
