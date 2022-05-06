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
    public function getProduitByFournisseur()
    {
        $produit = new ProduitModel();
        $data = $produit->where('idFournisseur',$this->request->getGet('idFournisseir'))->getResult();
        return $this->response->setJSON($data);    
    }
    public function getProduitByCategorieByFournisseur()
    {
        $produit = new ProduitModel();
        $data = $produit->where('idFournisseur',$this->request->getGet('idFournisseir'))
                        ->where('idCategorie',$this->request->getGet('idCategorie'))->getResult();
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
            'ancienPrix' => $this->request->getPost('ancienPrix'),
            'nouveauPrix' => $this->request->getPost('nouveauPrix'),
            'promotion' => 0,
            //'pourcentageReduction' => $this->request->getPost('pourcentageReduction'),
           // 'paysProduit' => $this->request->getPost('paysProduit'),
           // 'villeProduit' => $this->request->getPost('villeProduit'),
           // 'quartierProduit' => $this->request->getPost('quartierProduit'),
            'qtiteDisponible' => $this->request->getPost('qtiteDisponible'),
        ];
        $image1 = $this->request->getFile('image1');
        if(!empty($image1))
        {
			if ($image1->isValid() && ! $image1->hasMoved()) {
				$cont = $image1->getRandomName();
				$image1->move('image_produit/',$cont);
                $data['image1'] = $cont;
			}
		}
        $image2 = $this->request->getFile('image2');
        if(!empty($image2))
        {
			if ($image2->isValid() && ! $image2->hasMoved()) {
				$cont = $image2->getRandomName();
				$image2->move('image_produit/',$cont);
                $data['image2'] = $cont;
			}
		}
        $image3 = $this->request->getFile('image3');
        if(!empty($image3))
        {
			if ($image3->isValid() && ! $image3->hasMoved()) {
				$cont = $image3->getRandomName();
				$image3->move('image_produit/',$cont);
                $data['image3'] = $cont;
			}
		}
        $produit = new ProduitModel();
        $produit->addProduit($data);
        return $this->response->setJSON(['status'=>'success']);
    }

    public function updateProduit()
    {
        $data = [
            'idFournisseur' => $this->request->getPost('idFournisseur'),
            'idCategorie' => $this->request->getPost('idCategorie'),
            'nameProduit' => $this->request->getPost('nameProduit'),
            'descProduit' => $this->request->getPost('descProduit'),
            'ancienPrix' => $this->request->getPost('ancienPrix'),
            'nouveauPrix' => $this->request->getPost('nouveauPrix'),
            'promotion' => $this->request->getPost('promotion'),
           // 'pourcentageReduction' => $this->request->getPost('pourcentageReduction'),
           // 'paysProduit' => $this->request->getPost('paysProduit'),
           // 'villeProduit' => $this->request->getPost('villeProduit'),
           // 'quartierProduit' => $this->request->getPost('quartierProduit'),
            'qtiteDisponible' => $this->request->getPost('qtiteDisponible'),
        ];
        $image1 = $this->request->getFile('image1');
        if(!empty($image1))
        {
			if ($image1->isValid() && ! $image1->hasMoved()) {
				$cont = $image1->getRandomName();
				$image1->move('image_produit/',$cont);
                $data['image1'] = $cont;
			}
		}
        $image2 = $this->request->getFile('image2');
        if(!empty($image2))
        {
			if ($image2->isValid() && ! $image2->hasMoved()) {
				$cont = $image2->getRandomName();
				$image2->move('image_produit/',$cont);
                $data['image2'] = $cont;
			}
		}
        $image3 = $this->request->getFile('image3');
        if(!empty($image3))
        {
			if ($image3->isValid() && ! $image3->hasMoved()) {
				$cont = $image3->getRandomName();
				$image3->move('image_produit/',$cont);
                $data['image3'] = $cont;
			}
		}
        $produit = new ProduitModel();
        $produit->update($this->request->getPost('idProduit'),$data);
        return $this->response->setJSON(['status'=>'success']);
    }
    public function setPromotion()
    {
        $data = [
            'nouveauPrix' => $this->request->getPost('nouveauPrix'),
            'promotion' => 1,
            'pourcentageReduction' => $this->request->getPost('pourcentageReduction'),
        ];
        $produit = new ProduitModel();
        $produit->update($this->request->getPost('idProduit'),$data);
        return $this->response->setJSON(['status'=>'success']);
    }
    public function deletePromotion()
    {
        $data = [
            'promotion' => 0,
        ];
        $produit = new ProduitModel();
        $produit->update($this->request->getPost('idProduit'),$data);
        return $this->response->setJSON(['status'=>'success']);
    }
}
