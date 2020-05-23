<?php
namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController
{
   private $posts;
   public function initialize(){
      //$this->loadComponent('Blog');
      $this->loadComponent('Devs');
      //$this->posts = $this->Blog->getPosts();
   }
   public function index(){
       //$this->set('posts',$this->posts);
       
      // Pay attention to loadModel
       $posts = $this->loadModel('Posts')->find('all');
       $this->set(compact('posts'));
       $this->set('password',$this->Devs->generatePassword());
   }
}

