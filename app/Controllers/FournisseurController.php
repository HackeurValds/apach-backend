<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FournisseurModel;

class FournisseurController extends BaseController
{
    public function index()
    {
        //
    }
    public function getFournisseur()
    {
        $fourn = new FournisseurModel();
        $data = $fourn->findAll();
        return $this->response->setJSON($data);
    }
    public function addFournisseur()
    {
        $fourn = new FournisseurModel();
        $data = [
            'idUser' => $this->request->getPost('idUser'),
            'etatFournisseur'=> 1
        ];
        $fourn->save($data);
        return $this->response->setJSON(['status'=>'success']);
    }
    
}
