<div class="archive">
  <ul class="archive-list">
  <?php foreach ($posts as $post): ?>
    <li class="archive-item">
      <article class="card">
        <a href="posts/single/<?= h($post->id) ?>" class="card-link">
          <img src="uploads/photo/<?= h($post->image) ?>" alt="" class="card-image">
          <div class="card-bottom">
            <h1 class="card-title"><?= h($post->title) ?></h1>
            <time class="card-date" datetime="2016-9-16">
              <?php
                $originalFormat = h($post->created);
                $convertedDate = date('j M, Y', strtotime($originalFormat));
                echo $convertedDate;
               ?>
            </time>
          </div>
        </a>
      </article>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
<a href="posts/archive" class="archive-button">
  <div class="button">
    <p class="button-text">More</p>
  </div>
</a>
