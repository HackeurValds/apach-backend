<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FournisseurModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function addUserClient()
    {
        $data = [
          'idUser' =>$this->request->getPost('idUser'),
          'userName' =>$this->request->getPost('userName'),
          'idQuartier' =>$this->request->getPost('idQuartier'),
          'dateCreation' =>$this->request->getPost('dateCreation'),
          'dateModification' =>$this->request->getPost('dateModification'),
          'telephone' =>$this->request->getPost('telephone'),
          'email' =>$this->request->getPost('email'),
          'password' =>$this->request->getPost('password'),
        ];
        $image1 = $this->request->getFile('userImage');
        if(!empty($image1))
        {
			if ($image1->isValid() && ! $image1->hasMoved()) {
				$cont = $image1->getRandomName();
				$image1->move('image_user/',$cont);
                $data['userImage'] = $cont;
			}
		}
        $user = new UserModel();
        $user->addUserClient($data);
    }
    public function login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = new UserModel();
        $data = $user->where("email",$email)
                    ->where("password",$password)
                    ->get()->getFirstRow();
        $n=count($data);
        if($n>0){
            $fourn = new FournisseurModel();
            if($fourn->checkIn($data->idUser)){
                return $this->response->setJSON(['etat'=>'success','data'=>$data,'type'=>'fournisseur']);
            }
            else{
                return $this->response->setJSON(['etat'=>'success','data'=>$data,'type'=>'user']);
            }
        }else{
            return $this->response->setJSON(['etat'=>'fail']);
        }
    }
    
}