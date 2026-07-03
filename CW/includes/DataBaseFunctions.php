<?php
function totalPost($pdo) {
    $query = $pdo->query('SELECT COUNT(*) FROM post');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}