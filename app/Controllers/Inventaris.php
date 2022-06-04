<?php

namespace App\Controllers;
use CodeItNow\BarcodeBundle\Utils\QrCode;


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
            $query = $this->db->table('inventaris')->getWhere(['id_ht' => $id]);
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

        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('inventaris'))->with('success', 'Data berhasil ditambahkan!');
        }
    }

    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('inventaris')->getWhere(['id_ht' => $id]);
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

    public function editproses($id) {
        $data=$this->request->getPost();
        unset($data ['_method']);

        $this->db->table('inventaris')->where(['id_ht' => $id])->update($data);
        return redirect()->to(site_url('inventaris/detail/'.$id))->with('success', 'Data berhasil diperbarui!');

    }

    public function delete($id) {

        $this->db->table('inventaris')->where(['id_ht' => $id])->delete();
        return redirect()->to(site_url('inventaris'))->with('success', 'Data berhasil dihapus!');

    }

    public function qrcode() {

        $writer = new PngWriter(PngWriter::class);

        // Create QR code
        // $qrCode = QrCode::create('bjkbjbjkb');
        $qrCode = new QrCode(123);
                
        $result = $writer->write($qrCode);
        
        header('Content-Type: '.$result->getMimeType(PngWriter::class));
        echo $result->writeString();


    }

    public function qr() 
    {
        $qrCode = new QrCode();
        $qrCode
            ->setText('Yandika')
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
            ->setLabel('Yandika')
            ->setLabelFontSize(16)
            ->setImageType(QrCode::IMAGE_TYPE_PNG)
        ;
        echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
    }
 
}
