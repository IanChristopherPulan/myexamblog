<div class="single">
  <img src="../../uploads/photo/<?= h($post->image) ?>" alt="" class="single-image">
  <div class="l-container u-clear">
    <h1 class="single-title"><?= h($post->title) ?></h1>
    <time class="single-date" datetime="2016-9-16">

      <?php
        $originalFormat = h($post->created);
        $convertedDate = date('j M, Y', strtotime($originalFormat));
        echo $convertedDate;
       ?>
       
    </time>
    <p class="single-desc"><?= h($post->body) ?></p>
    <div class="single-button">
      <?php echo $this->Html->link('Top','/',['class' => 'button button-text']); ?>
    </div>
  </div>
</div>
