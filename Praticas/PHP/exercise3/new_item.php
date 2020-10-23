<?php
include_once("templates/common/head.html");
include_once("templates/common/header.html");
include_once("templates/common/menu.html");
include_once("database/connection.php");
include_once("database/news.php");
include_once("database/comments.php");

$article = getNews($db, $_GET['id']);
$comments = getComments($db, $_GET['id']);


?>
<section id="news">
    <article>
        <header>
            <h1><a <?php echo 'href="new_item.php?id=' . $_GET['id'] . '"' ?>> <?= $article['title'] ?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300" alt="">
        <p> <?= $article['introduction'] ?> </p>
        <p> <?= join("</p> <p>", explode("\n", $article['fulltext'])) ?> </p>
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
    </article>
</section>

<?php

include_once("footer.html");

?>