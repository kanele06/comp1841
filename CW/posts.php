<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';
    $sql = 'SELECT post.id,
               posttext,
               post.postdate,
               user.username,
               email,
               module.name AS module
        FROM post
        INNER JOIN user
            ON post.userid = user.id
        INNER JOIN module
            ON post.moduleid = module.id';

    $posts = allPosts($pdo);
    $title = 'Post List';
    $totalPosts = totalPosts($pdo);

    ob_start();
    include 'templates/posts.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database Error:' . $e->getMessage();
}
include 'templates/layout.html.php';