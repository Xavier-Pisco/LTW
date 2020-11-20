<?php
$id = $_POST['id'];
$username = $_POST['username'];
$comment = $_POST['comment'];
$comment_id = $_POST['comment_id'];

include_once('database/connection.php');

echo $username;

$stmt = $db->prepare('INSERT INTO comments VALUES (?, ?, ?, ?, ?)');
$stmt->execute(array(null, $id, $username, round(microtime(true) * 1000), $comment));


$stmt = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE id > ?');
$stmt->execute(array($comment_id));
$comments = $stmt->fetchAll();

foreach ($comments as $comment) {
	echo json_encode($comment);
}
?>