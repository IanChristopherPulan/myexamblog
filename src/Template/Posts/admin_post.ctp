
<?php echo $this->Form->create($post, ['type' => 'file', 'class' => 'form']); ?>
  <label for="image" class="form-title">EYE CATCH IMAGE
      <div class="form-file u-clear">
          <span class="form-file-button">UPLOAD</span>
      </div>
  </label>
  <div class="form-input-controller">
    <?php echo $this->Form->input('file',['type' => 'file', 'id' => 'image', 'class' => 'input input-image']); ?>
  </div>

  <label for="title" class="form-title">TITLE</label>
  <div class="form-body">
    <?php echo $this->Form->text('title',['id' => 'title', 'class' => 'input input-text']); ?>
  </div>

  <label for="contents" class="form-title">CONTENTS</label>
  <div class="form-textarea">
    <?php echo $this->Form->textarea('inquiry', ['id' => 'inquiry', 'cols' => '30', 'rows' => '10', 'class' => 'input input-contents']); ?>
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
