<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategorieModel;

class CategorieController extends BaseController
{
    public function index()
    {
        //
    }
    public function getCategorie()
    {
        $cat = new CategorieModel();
        $data = $cat->findAll();
        return $this->response->setJSON($data);
    }
    public function getCategorieByName()
    {
        $nomcategorie = $this->request->getPost("nomCategorie");
        $cat = new CategorieModel();
        $data = $cat->LIKE("nomCategorie",$nomcategorie);
        return $this->response->setJSON($data);
    }

}
