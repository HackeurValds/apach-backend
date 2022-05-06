<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuartierModel;
use App\Models\VilleModel;

class LocalisationController extends BaseController
{
    public function index()
    {
        //
    }
    public function getVille()
    {
        $ville = new VilleModel();
        $data = $ville->findAll();
        return $this->response->setJSON($data);
    }
    public function getQuartierByVille()
    {
        $city = new QuartierModel();
        $data = $city->where('idVille',$this->request->getGet('idVille'))->getResult();
        return $this->response->setJSON($data);
    }
    public function getQuartierByUser()
    {
        $city = new QuartierModel();
        $data = $city->where('idQuartier',$this->request->getGet('idQuartier'))->getResult();
        return $this->response->setJSON($data);
    }
}