<?php echo $this->Form->create([$user, 'class' => 'form']); ?>
  <label for="user-id" class="form-title">USER ID</label>
  <?= $this->Form->text('email',  array('id' => 'user-id', 'class'=>'input input-text')); ?>
  <label for="password" class="form-title">PASSWORD</label>
  <?= $this->Form->text('password',  array('id' => 'password', 'class'=>'input input-text')); ?>

  <?php
  $created = date("Y-m-d H:i:s");
  echo $this->Form->control('created', ['type' => 'hidden', 'value' => $created]);
  ?>

  <?= $this->Flash->render() ?>
  <label for="submit" class="form-button">
    <div class="button">
      <p class="button-text">Submit</p>
    </div>
  </label>

  <?php echo $this->Form->submit('Add',['id' => 'submit', 'class' => 'input input-submit']); ?>
  <?php echo $this->Html->link('Cancel','/',['class' => 'form-button button button-text', 'target' => '_blank']); ?>
<?php echo $this->Form->end(); ?>
