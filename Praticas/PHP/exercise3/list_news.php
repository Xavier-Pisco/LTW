<?php

include_once("database/connection.php");
include_once("database/news.php");

$articles = getAllNews($db);

include("templates/common/head.php");
include("templates/common/header.php");
include("templates/common/menu.php");
include("templates/common/related.php");
include("templates/news/list_news.php");
include("templates/common/footer.php");
?>