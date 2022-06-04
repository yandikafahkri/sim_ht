<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_inventaris;
use App\Models\ModelMaint;


class Maintenance extends ResourceController
{
    protected $helpers = ['custom'];

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->inventaris = new Model_inventaris();
        $this->maintenance = new ModelMaint();
    }

    public function index()
    {
        $data['maintenance'] = $this->maintenance->getAll();
        return view('maintenance/get', $data);
    }

    public function new()
    {
        $data['inventaris'] = $this->inventaris->findAll();
        return view('maintenance/new', $data);
    }

    public function create()
    {
        // //ambil gambar
        // $foto = $this->request->getFile('foto_maint');

        // //pindahkan gambar 
        // $foto->move('template/assets/img');

        // //ambil nama file
        // $namaFoto = $foto->getName();

        // $data=$this->request->getPost();
        // $this->maintenance->insert($data);
        // return redirect()->to(site_url('maintenance'))->with('success', 'Data berhasil ditambahkan!');
    
        $data = array(
            'insertData' => $this->maintenance->insertData(),
            'getFoto' => $this->maintenance->getFoto()
             );   
            
        $this->maintenance->insert($data);
        return redirect()->to(site_url('maintenance'))->with('success', 'Data berhasil ditambahkan!');
    }    






 
}
