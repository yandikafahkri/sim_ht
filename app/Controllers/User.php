<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_inventaris;
use App\Models\ModelMaint;
use App\Models\Model_user;

class User extends BaseController
{
    protected $helpers = ['custom'];
    protected $maintenance;
    protected $inventaris;
    protected $user;

    public function __construct() 
    {
        $this->db = \Config\Database::connect();
        $this->inventaris = new Model_inventaris();
        $this->maintenance = new ModelMaint();
        $this->user = new Model_user();
    }

    public function index()
    {
        $data = [
            'title' => 'User',
            'user' => $this->user->findAll()
        ] ;

        return view('users/get', $data);

    }

    public function new()
    {
        return view('users/new');
    }

    public function create()
    {
        $hash_password = password_hash($this->request->getVar('password_user'), PASSWORD_BCRYPT);   

        $this->user->save([
            'name_user' => $this->request->getVar('name_user'),
            'email_user' => $this->request->getVar('email_user'),
            'password_user' => $hash_password,
            'info_user' => $this->request->getVar('info_user')
        ]);

        session()->setFlashdata('pesan', 'Akun berhasil didaftarkan!');

        return redirect()->to(site_url('user'));
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

    public function editproses($id) 
    {
        $hash_password = password_hash($this->request->getVar('password_user'), PASSWORD_BCRYPT);   

        $this->user->save([
            'id_user' => $id,
            'name_user' => $this->request->getVar('name_user'),
            'email_user' => $this->request->getVar('email_user'),
            'password_user' => $hash_password,
            'info_user' => $this->request->getVar('info_user')
        ]);

        session()->setFlashdata('pesan', 'Akun berhasil diperbarui!');

        return redirect()->to(site_url('/'));
    }

    public function delete($id) 
    {

        $this->db->table('users')->where(['id_user' => $id])->delete();
        session()->setFlashdata('pesan', 'Akun berhasil dihapus!');

        return redirect()->to(site_url('users'));

    }
 
}
