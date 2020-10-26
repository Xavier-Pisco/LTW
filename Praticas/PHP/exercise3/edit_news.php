<?php

include_once("database/connection.php");

$id = $_GET('id');

include("templates/common/head.php");
include("templates/common/header.php");
include("templates/common/menu.php"); ?>

<form method="get" action="">
  <label>Title:<input type="text" id="title" require minlength="1"/> </label>
</form>

<?php
include("templates/common/footer.php");
?>