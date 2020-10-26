<section id="comments">
  <h1> <?= count($comments) ?> Comments</h1>
  <?php foreach ($comments as $comment) { ?>
  <article class="comment">
    <span class="user"><?= $comment['username'] ?></span>
    <span class="date"><?= date("d-M-Y H:m:s", $comment['published']) ?></span>
    <p> <?= $comment['text'] ?></p>
  </article>
  <?php } ?>
  </section>