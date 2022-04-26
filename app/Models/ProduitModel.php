<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produit';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idUser',
        'idFournisseur',
        'idCategorie',
        'nameProduit',
        'descProduit',
        'prixProduit',
        'imageProduit',
        'payProduit',
        'villeproduit',
        'quartierProduit',
        'QtiteVendu',
        'QtiteDisponible'
     
    ];// pour pouvoir faire des requetes directement ici 

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



    public function getProduit()
    {
       return $this->findAll();
    }

    public function getProduitCategorie($categorie)
    {
       return $this->where('idCategorie',$categorie);
    }
    public function addProduit($data)
    {
        $this->save($data);
    }
}
