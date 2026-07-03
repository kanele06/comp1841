<?php
if (isset($_POST['posttext'])) {
    try {
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO post SET
            posttext = :posttext,
            postdate = CURDATE(),
            userid = :userid,
            moduleid = :moduleid';

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':posttext', $_POST['posttext']);
        $stmt->bindValue(':userid', $_POST['users']);
        $stmt->bindValue(':moduleid', $_POST['modules']);

        $stmt->execute();

        header('location: posts.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include 'includes/DatabaseConnection.php';
    $title = 'Add a new post';
    $sql_a = 'SELECT * FROM user';
    $users = $pdo->query($sql_a);
    $sql_c = 'SELECT * FROM module';
    $modules = $pdo->query($sql_c);
    ob_start();
    include 'templates/addpost.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';