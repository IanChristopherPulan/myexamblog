<?php
  namespace App\Controller;
  use App\Controller\AppController;
  use Cake\Routing\Router;

  /**
   *
   */
  class PostsController extends AppController
  {
    public $helpers = [
      'Paginator' => ['templates' => 'paginator-templates']
    ];
    public $paginate = [
        'limit' => 5,
        'order' => [
            'created' => 'desc'
        ]
    ];


    public function initialize(){
      parent::initialize();
      $this->loadModel('Posts');
    }

    public function index(){
      $posts = $this->paginate($this->Posts);
      $this->set(compact('posts'));
    }

    public function single($id = null){
      $post = $this->Posts->get($id);
      $this->set('post',$post);
    }

    public function archive(){
      $posts = $this->paginate($this->Posts);
      $this->set(compact('posts'));
    }

    public function adminPost(){
    
      $post = '';

      if ($this->request->is('post')) {
        if (!empty($this->request->data['file']['name']) && !empty($this->request->data['title']) && !empty($this->request->data['inquiry'])) {
          $title = $this->request->data['title'];
          $body = $this->request->data['inquiry'];
          $filename = $this->request->data['file']['name'];
          $url = Router::url('/', true) . 'uploads/photo/' . $filename;
          $uploadpath = 'uploads/photo/';
          $uploadfile = $uploadpath.$filename;
          if (move_uploaded_file($this->request->data['file']['tmp_name'], $uploadfile)) {
            $post = $this->Posts->newEntity();
            $post->image = $filename;
            $post->path = $url;
            $post->title = $title;
            $post->body = $body;
            $post->created = date("Y-m-d H:i:s");
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
              return $this->redirect(
                ['controller' => 'Posts', 'action' => 'admin-list']
              );
            }
            else{
              $this->Flash->error(__('Error!'));
            }
          }
          else{
            $this->Flash->error(__("Error!"));
          }
        }
        else{
          $this->Flash->error(__("Error!"));
        }
      }
      $this->set('post', $post);
    }

    public function adminPostEdit($id = null){
      $post = $this->Posts->get($id);
      if ($this->request->is(['patch', 'post', 'put'])) {
        $post = $this->Posts->get($id);
        if (!empty($this->request->data['imagefile']['name']) && !empty($this->request->data['title']) && !empty($this->request->data['body'])) {
          $title = $this->request->data['title'];
          $body = $this->request->data['body'];
          $filename = $this->request->data['imagefile']['name'];
          $url = Router::url('/', true) . 'uploads/photo/' . $filename;
          $uploadpath = 'uploads/photo/';
          $uploadfile = $uploadpath.$filename;
          if (move_uploaded_file($this->request->data['imagefile']['tmp_name'], $uploadfile)) {
            $post = $this->Posts->patchEntity($post,[
              'image'   => $filename,
              'path'    => $url,
              'title'   => $title,
              'body'    => $body,
              'modified'=> date("Y-m-d H:i:s")
            ]);
            if ($this->Posts->save($post)) {
              return $this->redirect(
                ['controller' => 'Posts', 'action' => 'admin-list']
              );
            }
            else{
              $this->Flash->error(__('Error!'));
            }
          }
          else{
            $this->Flash->error(__('Error!'));
          }
        }
        elseif(!empty($this->request->data['title']) && !empty($this->request->data['body'])){
          $post = $this->Posts->patchEntity($post,[
            'image'   => $this->request->data['image'],
            'path'    => $this->request->data['path'],
            'title'   => $this->request->data['title'],
            'body'    => $this->request->data['body'],
            'modified'=> date("Y-m-d H:i:s")
          ]);
          if ($this->Posts->save($post)) {
            return $this->redirect(
              ['controller' => 'Posts', 'action' => 'admin-list']
            );
          }
          else{
            $this->Flash->error(__('Error!'));
          }
        }
        else{
          $this->Flash->error(__("Error!"));
        }
      }
      $this->set('post', $post);
    }

    public function adminList(){
      $this->paginate = array('limit' => 100, 'order' => ['created' => 'desc']);
      $posts = $this->paginate($this->Posts);
      $this->set(compact('posts'));
    }


  }



 ?>
