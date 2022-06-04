<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('users');
        $data   = $builder->get()->getResult();
        return view('users/get', compact('data'));
    }

    public function create()
    {
        return view('users/add');
    }

    public function detail($id)
    {
        if($id != null) {
            $query = $this->db->table('users')->getWhere(['id_user' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['users'] = $query->getRow();
                return view('users/detail', $data);
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
        $this->db->table('users')->insert($data);

        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('users'))->with('success', 'Data berhasil ditambahkan!');
        }
    }

    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('users')->getWhere(['id_user' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['users'] = $query->getRow();
                return view('users/edit', $data);
        } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function editproses($id) {
        $data=$this->request->getPost();
        unset($data ['_method']);

        $this->db->table('users')->where(['id_user' => $id])->update($data);
        return redirect()->to(site_url('users/detail/'.$id))->with('success', 'Data berhasil diperbarui!');

    }

    public function delete($id) {

        $this->db->table('users')->where(['id_user' => $id])->delete();
        return redirect()->to(site_url('users'))->with('success', 'Data berhasil dihapus!');

    }
 
}
