<?php
include 'includes/DatabaseConnection.php';
include 'includes/DataBaseFunctions.php';
try {
    if(isset($_POST['posttext'])){
        updatePost($pdo, $_POST['postid'], $_POST['posttext']);
        header('location: posts.php');
    //$sql = 'UPDATE post SET posttext = :posttext WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->bindValue(':posttext', $_POST['posttext']);
    //$stmt->bindValue(':id', $_POST['postid']);
    //$stmt->execute();
    } else {
        // $sql = 'SELECT * FROM post WHERE id = :id';
        // $stmt = $pdo->prepare($sql);
        // $stmt->bindValue(':id', $_GET['id']);
        // $stmt->execute();
        // $post = $stmt->fetch();
        $post = getPost($pdo, $_GET['id']);
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