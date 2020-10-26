<?php
include_once("database/connection.php");
include_once("database/news.php");
include_once("database/comments.php");


$article = getNews($db, $_GET['id']);
$comments = getComments($db, $_GET['id']);

include("templates/common/head.php");
include("templates/common/header.php");
include("templates/common/menu.php");
include("templates/common/related.php");
include("templates/news/view_news.php");
include("templates/common/footer.php");

?>