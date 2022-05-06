<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MessageModel;

class MessageController extends BaseController
{
    public function index()
    {
        //
    }
    public function sendMessage()
    {
        $data = [
            'content' => $this->request->getPost('content'),
            'dateSend' => date('Y-m-d'),
            'id_emetteur' => $this->request->getPost('id_emetteur'),
            'id_recepteur' => $this->request->getPost('id_recepteur')
        ];
        $msg = new MessageModel();
        $msg->save($data);
    }
    public function getMessage()
    {
        $emetteur = $this->request->getPost('id_emetteur');
        $recepteur = $this->request->getPost('id_recepteur');
        $msg = new MessageModel();
        $data = $msg->where('id_emetteur',$emetteur)
                    ->where('id_recepteur',$recepteur)
                    ->orderBy('dateSend','ASC')
                    ->get()
                    ->getResult();
        return $this->response->setJSON($data);
    }
}