<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
          'idProfiluser' =>$this->request->getPost('idProfiluser'),
          'userName' =>$this->request->getPost('userName'),
          'userCountry' =>$this->request->getPost('userCountry'),
          'userTown' =>$this->request->getPost('userTown'),
          'dateCreation' =>$this->request->getPost('dateCreation'),
          'dateModification' =>$this->request->getPost('dateModification'),
          'email' =>$this->request->getPost('email'),
          'password' =>$this->request->getPost('password'),
        ];
        $user = new UserModel();
        $user->addUserClient($data);
    }
}
