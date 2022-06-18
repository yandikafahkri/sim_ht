<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_inventaris;
use App\Models\ModelMaint;
use App\Models\Model_user;


class Inventaris extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('inventaris');
        $data   = $builder->get()->getResult();
        return view('inventaris/get', compact('data'));
    }

    public function create()
    {
        return view('inventaris/add');
    }

    public function detail($id)
    {
        if($id != null) {
            $query = $this->db->table('inventaris')->getWhere(['alias_ht' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['inventaris'] = $query->getRow();
                return view('inventaris/detail', $data);
        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }

    public function addproses()
    {
        $data=$this->request->getPost();
        $this->db->table('inventaris')->insert($data);

        // if($this->db->affectedRows() > 0) {
        //     return redirect()->to(site_url('inventaris'))->with('success', 'Data berhasil ditambahkan!');
        // }

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to(site_url('inventaris'));

    }

    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('inventaris')->getWhere(['alias_ht' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['inventaris'] = $query->getRow();
                return view('inventaris/edit', $data);
        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function editproses($alias_ht) {
        $data=$this->request->getPost();
        unset($data ['_method']);

        $this->db->table('inventaris')->where(['alias_ht' => $alias_ht])->update($data);

        session()->setFlashdata('pesan', 'Data berhasil diperbarui!');

        return redirect()->to(site_url('inventaris/'.$alias_ht));           
    }

    public function delete($id) {

        $this->db->table('inventaris')->where(['id_ht' => $id])->delete();
        return redirect()->to(site_url('inventaris'))->with('success', 'Data berhasil dihapus!');

    }

    public function downqr($id) 
    {
        if($id != null) {
            $query = $this->db->table('inventaris')->getWhere(['alias_ht' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['inventaris'] = $query->getRow();
                return view('inventaris/downqr', $data);
        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        // return $response->download('', null);

    }

    public function qr($id) 
    {
        //
    }
 
}
