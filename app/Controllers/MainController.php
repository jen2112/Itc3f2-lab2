<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $music;
    private $play;

    public function __construct(){
        $this->music = new \App\Models\SongModel();
        $this->play = new \App\Models\PlayListModel();
    }

    public function index()
    {
        //
    }

    public function songs()
    {
        $data=[
            'music' => $this->music->findAll(),
            'play' => $this->play->findAll()
        ];
        return view ('songs', $data);
    }

    public function save(){
        $data = ['playlist' => $this->request->getVar('playlist')];
        $this->play->save($data);
        return redirect()->to('PlayTrack');
    }

    public function insert(){
        $data=['File'=>$this->request->getVar('File'),
        'Artist'=>$this->request->getVar('Artist'),
        'Title'=>$this->request->getVar('MusicName'),
    ];
    $this->music->save($data);
    return redirect()->to('PlayTrack');
    }

    public function search(){
        $searchQuery = $this->request->getVar('search');

        if ($searchQuery) {
           
          
        $data= ['music' => $this->music->like('File', $searchQuery)->findAll(),
        'play' => $this->play->findAll()]; 
    }
    return view('songs', $data);
}

    
}