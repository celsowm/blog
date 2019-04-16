<?php

namespace App\Controller;

use App\Controller\AppController;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP AlbumsController
 * @author celso
 * @property \App\Model\Table\AlbumsTable $Albums
 */
class AlbumsController extends AppController {
    
    
    public function index(){
        
        $albums = $this->Albums->find()
                        ->contain('Photos');
        
        $this->set(compact('albums'));
        
    }
    
}
