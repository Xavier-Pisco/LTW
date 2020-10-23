<?php

function getAllNews($db){
    $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
                    FROM news JOIN
                        users USING (username) LEFT JOIN
                        comments ON comments.news_id = news.id
                    GROUP BY news.id, users.username
                    ORDER BY published DESC');
    $stmt->execute();
    $articles = $stmt->fetchAll();
    return $articles;
}

function getNews($db, $id){
    $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = ?');
    $stmt->execute(array($id));
    $article = $stmt->fetch();
    return $article;
}

?>