<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeIgniter\RESTful\ResourceController;

use App\Models\Model_home;
use App\Models\ModelMaint;
use App\Models\Model_user;


class Home extends BaseController
{
    protected $helpers = ['custom'];
    protected $maintenance;
    protected $inventaris;
    protected $user;
    protected $Model_home;


    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->Model_home = new Model_home();
        $this->maintenance = new ModelMaint();
        $this->user = new Model_user();

    }

    public function index($id = null)
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
