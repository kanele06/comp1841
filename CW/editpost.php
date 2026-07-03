<?php
include 'includes/DatabaseConnection.php';
try {
    if(isset($_POST['posttext'])){

    $sql = 'UPDATE post SET posttext = :posttext WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':posttext', $_POST['posttext']);
    $stmt->bindValue(':id', $_POST['postid']);
    $stmt->execute();
    header('Location: posts.php');
    } else {
        $sql = 'SELECT * FROM post WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $post = $stmt->fetch();
        $title = 'Edit post';

        ob_start();
        include 'templates/editpost.html.php';
        $output = ob_get_clean();
    }
}catch (PDOException $e) {
    $title = 'An error occurred';
    $output = 'Error editing post: ' . $e->getMessage();
}
include 'templates/layout.html.php';