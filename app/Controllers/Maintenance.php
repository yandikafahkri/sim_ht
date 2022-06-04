<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_inventaris;
use App\Models\ModelMaint;


class Maintenance extends ResourceController
{
    protected $helpers = ['custom'];
    protected $maintenance;
    protected $inventaris;

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->inventaris = new Model_inventaris();
        $this->maintenance = new ModelMaint();
    }

    public function index()
    {
        // $data['maintenance'] = $this->maintenance->getAll();
        // return view('maintenance/get', $data);
        $maintenance = $this->maintenance->findAll();

        $data = [
            'title' => 'Maintenance',
            'maintenance' => $maintenance
        ] ;

        return view('maintenance/get', $data);
    }

    public function new()
    {
        // $data['inventaris'] = $this->inventaris->findAll();
        // return view('maintenance/new', $data);

        $data = [
            'title' => "Tambah Data Maintenance",
            'inventaris' => $this->inventaris->findAll()
        ];


        //untuk detail
        // if(empty($data['maintenance'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');

        // }

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
        $foto = $this->request->getFile('foto_maint');

        //pindahkan gambar 
        $foto->move('img');

        //ambil nama file
        $namaFoto = $foto->getName('alias_ht');

        $this->maintenance->save([
            'alias_ht' => $this->request->getVar('alias_ht'),
            'tanggal_maint' => $this->request->getVar('tanggal_maint'),
            'kondisi_maint' => $this->request->getVar('kondisi_maint'),
            'foto_maint' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to(site_url('maintenance'));


        // $data=$this->request->getPost();
        // $this->maintenance->insert($data);
        // return redirect()->to(site_url('maintenance'))->with('success', 'Data berhasil ditambahkan!'); 
            
    }    






 
}
