<?php

namespace App\Controllers;
use App\Models\Model_home;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        //menampilkan jml data di database
        $data = array(
        'jml_inv' => $this->Model_home->jml_inv(),
        'jml_user' => $this->Model_home->jml_user(),
        'get_inv' => $this->Model_home->get_inv(),
        'get_usr' => $this->Model_home->get_usr(),
        'get_maint' => $this->Model_home->get_maint(),
        'jml_maint' => $this->Model_home->jml_maint()
         );   

        return view('home', $data);
    }

    public function generate()
    {
        echo password_hash('admin123', PASSWORD_BCRYPT);
    }
}
