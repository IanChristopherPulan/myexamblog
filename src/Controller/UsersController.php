<?php
  namespace App\Controller;
  use App\Controller\AppController;
  use Cake\Routing\Router;

  /**
   *
   */
  class UsersController extends AppController
  {
    public function login(){
      $user = "";
      if ($this->request->is('post')) {
        // print_r($this->request->data('email'));
        // print_r($this->request->data('password'));
        // exit();

        $user = $this->Auth->identify();
        if ($user) {
          $this->Auth->setUser($user);
          return $this->redirect(['controller' => 'posts', 'action' => 'admin-list']);
        } else {
          $this->Flash->error(__('Error'));
        }
      }
      $this->set('user', $user);
    }


    public function addUser(){
      $user = '';
      $user = $this->Users->newEntity();
      if ($this->request->is('post')) {
          $user = $this->Users->patchEntity($user, $this->request->getData());
          if ($this->Users->save($user)) {
              $this->Flash->success(__('Success'));

              return $this->redirect(['controller' => 'users', 'action' => 'admin-login']);
          }
          $this->Flash->error(__('Error!'));
      }
      $this->set('user', $user);
    }

    public function logout(){

    return $this->redirect($this->Auth->logout());

      // $this->Auth->logout()
      // $this->redirect(['controller' => 'users', 'action' => 'admin-login']);
    }

  }



 ?>
