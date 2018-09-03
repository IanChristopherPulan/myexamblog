
<div class="button">
  <?= $this->Html->link('New Article','/posts/admin-post',['class' => 'l-main-button button-text']) ?>
</div>

<ul class="archive archive-admin">

  <?php foreach ($posts as $post): ?>
  <li class="archive-item">
    <a href="../posts/admin-post-edit/<?= h($post->id) ?>" class="post-article">
      <time class="post-article-date" datetime="2016-9-16">
        <?php
          $originalFormat = h($post->created);
          $convertedDate = date('j M, Y', strtotime($originalFormat));
          echo $convertedDate;
         ?>
      </time>
      <h1 class="post-article-title"><?= h($post->title) ?></h1>
    </a>
  </li>
  <?php endforeach; ?>
</ul>
