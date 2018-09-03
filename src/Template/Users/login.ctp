<?php echo $this->Form->Create($user, ['class' => 'form']); ?>
  <label for="user-id" class="form-title">USER ID</label>
  <?= $this->Form->text('email',  array('id' => 'user-id', 'class'=>'input input-text')); ?>
  <label for="password" class="form-title">PASSWORD</label>
  <?= $this->Form->text('password',  array('type' => 'password', 'id' => 'password', 'class'=>'input input-text')); ?>

  <?= $this->Flash->render() ?>
  <label for="submit" class="form-button">
    <div class="button">
      <p class="button-text">Login</p>
    </div>
  </label>

  <?php echo $this->Form->submit('Login',['id' => 'submit', 'class' => 'input input-submit']); ?>
  <?php echo $this->Html->link('Cancel','/',['class' => 'form-button button button-text', 'target' => '_blank']); ?>
<?php echo $this->Form->end(); ?>
