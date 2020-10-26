<section id="news">
    <article>
        <header>
            <h1><a <?php echo 'href="new_item.php?id=' . $_GET['id'] . '"' ?>> <?= $article['title'] ?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300" alt="">
        <p> <?= $article['introduction'] ?> </p>
        <p> <?= join("</p> <p>", explode("\n", $article['fulltext'])) ?> </p>

        <?php include("templates/comments/list_comments.php"); ?>
    </article>
</section>