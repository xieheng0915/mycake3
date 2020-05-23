<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
    //private $posts;

    public function initialize(){
        //$this->loadComponent('Blog');
        //$this->posts = $this->Blog->getPosts();

        parent::initialize();
        $this->loadComponent('Flash');
        //$this->loadComponent('csrf');
        
    }
    public function index(){
        //die('This is the posts/index');
        //$this->set('person','John Doe');
        // $people = ['Mike','Paul','Jey','Bydon'];
        // $this->set('people',$people);

        //die($this->Blog->sayHello());

        //$this->set('posts', $this->posts);
        $posts = $this->Posts->find('all',array('order' => array('created' => 'desc')));
        $this->set(compact('posts'));

    }

    public function create(){
        //die('Creating post...');
        //$this->set('posts', $this->posts);

        // Get Posts for sidebar
        $posts = $this->Posts->find('all',array('order' => array('created' => 'desc')));
        $this->set(compact('posts'));

        $post = $this->Posts->newEntity();
        if($this->request->is('post')){
            $post = $this->Posts->patchEntity($post,$this->request->data);
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save post.'));
        }
        $this->set('post',$post);
    }

    public function view($id){
        // die('This is post'.$id);
        // $post = [
        //     'id' => $id,
        //     'title' => 'First Post',
        //     'body' => 'This is my first post',
        //     'image' => 'https://www.gstatic.com/webp/gallery/1.jpg'
        // ];
        
        // $languages = [
        //     'language' => [
        //         'English' => [
        //             'American',
        //             'Canadian',
        //             'British',
        //             'Australian'
        //         ],
        //         'Spanish',
        //         'German'
        //     ]

        //     ];

        // $this->set('posts', $this->posts);
        // $this->set('post', $post);
        //$this->set('languages', $languages);

        $posts = $this->Posts->find('all');

        $post = $this->Posts->get($id);
        $this->set(compact('posts','post'));
        
    }

    public function edit($id){
        
        // Get Posts for sidebar
        $posts = $this->Posts->find('all',array('order' => array('created' => 'desc')));
        $this->set(compact('posts'));

        $post = $this->Posts->get($id);

        if($this->request->is(['post','put'])){
            $this->Posts->patchEntity($post,$this->request->data);
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update post.'));
        }
        $this->set('post',$post);
    }

    public function delete($id){
        $this->request->allowMethod(['post','delete']);
        
        $post = $this->Posts->get($id);
        
        if($this->Posts->delete($post)){
            $this->Flash->success(__('Post deleted'));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function hello(){
       // die('hello '.$this->request->query['name']);
       //print_r($this->request->query);
       //print_r($this->request->params);
       //die();
       /*
        if($this->request->is('post')){
            die('this is POST');
        } elseif($this->request->is('get')){
            die('this is GET');
        }
        */
        die($this->request->header('User-Agent'));
    }
}

