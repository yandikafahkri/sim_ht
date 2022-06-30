<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_inventaris;
use App\Models\ModelMaint;
use App\Models\Model_user;


class Maintenance extends ResourceController
{
    protected $helpers = ['custom'];
    protected $maintenance;
    protected $inventaris;

    public function __construct() 
    {
        $this->db = \Config\Database::connect();
        $this->inventaris = new Model_inventaris();
        $this->maintenance = new ModelMaint();
    }

    public function index($id = null)
    {
        $foto = $this->db->table('maintenance')->getWhere(['id_maint' => $id]);
        
        $data = [
            'title' => 'Maintenance',
            'maintenance' => $this->maintenance->findAll(),
            'foto' => $foto->getRow()

        ] ;

        return view('maintenance/get', $data);
    }

    public function new()
    {        
        //select data inven yg data nya belum ada di maintenance
        $query = $this->db->query('SELECT alias_ht FROM inventaris WHERE alias_ht not in (SELECT alias_ht FROM maintenance)');

        $data = [
            'title' => "Tambah Data Maintenance",
            'inventaris' => $query->getResult(),
            'maintenance' => $this->maintenance->findAll()
        ];

        return view('maintenance/new', $data);
    }

    public function create()
    {
        //validasi
        if(!$this->validate([
            'alias_ht' => [
                'rules' => 'required|is_unique[maintenance.alias_ht]',
                'errors' => [
                    'required' => '{field} Nama tidak boleh kosong',
                    'is_unique' => '{field} Perangkat sudah di maintenance'
                ]
            ]
        ])) 
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/maintenance/new')->with('validation', $validation);
        }

        //ambil gambar
        $foto_maint1 = $this->request->getFile('foto_maint1');
        $foto_maint2 = $this->request->getFile('foto_maint2');
        $foto_maint3 = $this->request->getFile('foto_maint3');

        //pindahkan gambar 
        $foto_maint1->move('img');
        $foto_maint2->move('img');
        $foto_maint3->move('img');

        //ambil nama file
        $namaFoto1 = $foto_maint1->getName('foto_maint1');
        $namaFoto2 = $foto_maint2->getName('foto_maint2');
        $namaFoto3 = $foto_maint3->getName('foto_maint3');

        $this->maintenance->save([
            'alias_ht' => $this->request->getVar('alias_ht'),
            'tanggal_maint' => $this->request->getVar('tanggal_maint'),
            'kondisi_maint' => $this->request->getVar('kondisi_maint'),
            'foto_maint1' =>  $namaFoto1,
            'foto_maint2' => $namaFoto2,
            'foto_maint3' => $namaFoto3,
            'ket_maint' => $this->request->getVar('ket_maint')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to(site_url('maintenance'));           
    }    

    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('maintenance')->getWhere(['id_maint' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'title' => "Tambah Data Maintenance",
                    'maintenance' => $query->getRow(),
                    'inventaris' => $this->inventaris->findAll()
                ];

                return view('maintenance/edit', $data);

        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function editproses($id) 
    {
        //ambil gambar
        $foto_maint1 = $this->request->getFile('foto_maint1');
        $foto_maint2 = $this->request->getFile('foto_maint2');
        $foto_maint3 = $this->request->getFile('foto_maint3');

        //pindahkan gambar 
        $foto_maint1->move('img', null);
        $foto_maint2->move('img', null);
        $foto_maint3->move('img', null);

        //ambil nama file
        $namaFoto1 = $foto_maint1->getName('foto_maint1');
        $namaFoto2 = $foto_maint2->getName('foto_maint2');
        $namaFoto3 = $foto_maint3->getName('foto_maint3');


        $this->maintenance->save([
            'id_maint' => $id,
            'alias_ht' => $this->request->getVar('alias_ht'),
            'tanggal_maint' => $this->request->getVar('tanggal_maint'),
            'kondisi_maint' => $this->request->getVar('kondisi_maint'),
            'foto_maint1' =>  $namaFoto1,
            'foto_maint2' => $namaFoto2,
            'foto_maint3' => $namaFoto3,
            'ket_maint' => $this->request->getVar('ket_maint')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diperbarui!');

        return redirect()->to(site_url('maintenance'));  

    }
    
    public function cetak($id)
    {
        if($id != null) {
            $query = $this->db->table('maintenance')->getWhere(['id_maint' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'title' => "Cetak Data Maintenance",
                    'maintenance' => $query->getRow(),
                    'inventaris' => $this->inventaris->findAll()
                ];

                return view('maintenance/cetak', $data);

        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }
    
    public function foto($id)
    {
        if($id != null) {
            $query = $this->db->table('maintenance')->getWhere(['id_maint' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'title' => "Foto  Maintenance",
                    'maintenance' => $query->getRow(),
                    'inventaris' => $this->inventaris->findAll()
                ];

                return view('maintenance/foto', $data);

        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }
    
    public function print($id)
    {
        if($id != null) {
            $query = $this->db->table('maintenance')->getWhere(['id_maint' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'title' => "Cetak Data Maintenance",
                    'maintenance' => $query->getRow(),
                    'inventaris' => $this->inventaris->findAll()
                ];

                return view('maintenance/print', $data);

        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }

    public function delete($id = null) 
    {
        $this->db->table('maintenance')->where(['id_maint' => $id])->delete();

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to(site_url('maintenance'));

    }








 
}
