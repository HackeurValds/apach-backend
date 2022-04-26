<?php // controller pour les produits

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProduitModel;
use CodeIgniter\HTTP\Request;

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
    public function getProduitCategorie()
    {
        $categorie = $this->request->getGet('categorie');
        $produit = new ProduitModel();
        $data = $produit->getProduitCategorie($categorie);
        return $this->response->setJSON($data);
    }
    public function getProduitDetail()
    {
        $produit = new ProduitModel();
        $data = $produit->where('idProduit',$this->Request->getGet('idProduit'))
                        ->first();
        return $this->response->setJSON($data);    
    }
    public function addProduit()
    {
        $data = [
            'idUser' => $this->request->getPost('idUser'),
            'idFournisseur' => $this->request->getPost('idFournisseur'),
            'idCategorie' => $this->request->getPost('idCategorie'),
            'nameProduit' => $this->request->getPost('nameProduit'),
            'descProduit' => $this->request->getPost('descProduit'),
            'prixProduit' => $this->request->getPost('prixProduit'),
            'paysProduit' => $this->request->getPost('paysProduit'),
            'villeProduit' => $this->request->getPost('villeProduit'),
            'quartierProduit' => $this->request->getPost('quartierProduit'),
            'QtiteDisponible' => $this->request->getPost('QtiteDisponible'),
        ];
        $imageProduit = $this->request->getFile('imageProduit');
        if(!empty($imageProduit))
        {
			if ($imageProduit->isValid() && ! $imageProduit->hasMoved()) {
				$cont = $imageProduit->getRandomName();
				$imageProduit->move('image_produit/',$cont);
                $data['imageProduit'] = $cont;
			}
		}
        $produit = new ProduitModel();
        $produit->addProduit($data);
        return $this->response->setJSON(['status'=>'success']);
    }

    public function updateProduit()
    {
        $data = [
            'idUser' => $this->request->getPost('idUser'),
            'idFournisseur' => $this->request->getPost('idFournisseur'),
            'idCategorie' => $this->request->getPost('idCategorie'),
            'nameProduit' => $this->request->getPost('nameProduit'),
            'descProduit' => $this->request->getPost('descProduit'),
            'prixProduit' => $this->request->getPost('prixProduit'),
            'paysProduit' => $this->request->getPost('paysProduit'),
            'villeProduit' => $this->request->getPost('villeProduit'),
            'quartierProduit' => $this->request->getPost('quartierProduit'),
            'QtiteDisponible' => $this->request->getPost('QtiteDisponible'),
        ];
        $imageProduit = $this->request->getFile('imageProduit');
        if(!empty($imageProduit))
        {
			if ($imageProduit->isValid() && ! $imageProduit->hasMoved()) {
				$cont = $imageProduit->getRandomName();
				$imageProduit->move('image_produit/',$cont);
                $data['imageProduit'] = $cont;
			}
		}
        $produit = new ProduitModel();
        $produit->update($this->request->getPost('idProduit'),$data);
        return $this->response->setJSON(['status'=>'success']);
    }


}
