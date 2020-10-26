<section id="news">
<?php
foreach ($articles as $article) { ?>
  <article>
    <header>
      <h1><a <?php echo 'href="new_item.php?id=' . $article['id'] . '"'  ?>>
          <?= $article['title'] ?>
        </a></h1>
    </header>
    <img src="https://picsum.photos/600/300" alt="">
    <p>
      <?= $article['introduction'] ?>
    </p>
    <footer>
      <span class="author">
        <?= $article['username'] ?>
      </span>

      <span class="tags">
        <a href="index.html">#<?= join("</a> <a>#", explode(',', $article['tags'])) ?></a>
      </span>
      <span class="date"> <?= date("d-M-Y H:m", $article['published']) ?> </span>
      <a class="comments" href="item.html#comments"> <?= $article['comments'] ?> </a>
    </footer>
  </article>

<?php } ?>
</section>