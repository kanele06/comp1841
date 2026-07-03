<?php
function totalPosts($pdo) {
    $query = $pdo->query('SELECT COUNT(*) FROM post');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}

function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function getPost($pdo, $id) {
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM post WHERE id = :id', $parameters);
    return $query->fetch();
}

function updatePost($pdo, $id, $posttext) {
    $query = 'UPDATE post SET posttext = :posttext WHERE id = :id';
    $parameters = [':posttext' => $posttext, ':id' => $id];
    query($pdo, $query, $parameters);
}

function insertPost($pdo, $posttext, $userid, $moduleid) {
    $query = 'INSERT INTO post (posttext, postdate, userid, moduleid) VALUES (:posttext, CURDATE(), :userid, :moduleid)';
    $parameters = [':posttext' => $posttext, ':userid' => $userid, ':moduleid' => $moduleid];
    query($pdo, $query, $parameters);
}

function deletePost($pdo, $id) {
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM post WHERE id = :id', $parameters);
}

function allUsers($pdo) {
    $users = query($pdo, 'SELECT * FROM user');
    return $users->fetchAll();
}

function allModules($pdo) {
    $modules = query($pdo, 'SELECT * FROM module');
    return $modules->fetchAll();
}

function allPosts($pdo) {
    $posts = query($pdo, 'SELECT post.id,
               posttext,
               post.postdate,
               user.username,
               email,
               module.name AS module
        FROM post
        INNER JOIN user
            ON post.userid = user.id
        INNER JOIN module
            ON post.moduleid = module.id');
    return $posts->fetchAll();
}