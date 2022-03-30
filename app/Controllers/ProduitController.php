<?php // controller pour les produits

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProduitModel;

class ProduitController extends BaseController
{
    public function index()
    {
        //
    }
    public function getAllProduit()
    {
        $produit=new ProduitModel();
        $data=$produit->getProduit();
        return $this->response->setJSON($data);// return with JSON format to make data be universal(in all language)  
    }
}
