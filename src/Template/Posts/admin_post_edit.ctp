
<?php echo $this->Form->create($post, ['type' => 'file', 'class' => 'form']); ?>
  <label for="image" class="form-title">EYE CATCH IMAGE
      <div class="form-file u-clear">
          <span class="form-file-button">UPLOAD</span>
      </div>
  </label>
  <div class="form-input-controller">
    <?php echo $this->Form->input('imagefile',['type' => 'file', 'id' => 'image', 'class' => 'input input-image']); ?>
  </div>

  <label for="title" class="form-title">TITLE</label>
  <div class="form-body">
    <?php echo $this->Form->text('title',['id' => 'title', 'class' => 'input input-text']); ?>
    <?php echo $this->Form->control('id', ['type' => 'hidden']); ?>
    <?php
    $modified = date("Y-m-d H:i:s");
    echo $this->Form->control('image', ['type' => 'hidden', 'value' => h($post->image)]);
    echo $this->Form->control('path', ['type' => 'hidden', 'value' => h($post->path)]);
    echo $this->Form->control('modified', ['type' => 'hidden', 'value' => $modified]); ?>
  </div>

  <label for="contents" class="form-title">CONTENTS</label>
  <div class="form-textarea">
    <?php echo $this->Form->textarea('body', ['id' => 'inquiry', 'cols' => '30', 'rows' => '10', 'class' => 'input input-contents']); ?>
  </div>

  <?= $this->Flash->render() ?>
  <label for="submit" class="form-button">
    <div class="button">
      <p class="button-text">Submit</p>
    </div>
  </label>

  <?php echo $this->Form->submit('Submit',['id' => 'submit', 'class' => 'input input-submit']); ?>
  <?php echo $this->Html->link('Back','/posts/admin-list',['class' => 'form-button button button-text', 'target' => '_blank']); ?>
<?php echo $this->Form->end(); ?>
