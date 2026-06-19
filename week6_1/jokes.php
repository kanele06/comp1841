<?php
try{
    include 'includes/DatabaseConnection.php';
    $sql = 'SELECT joke.id,
               joketext,
               author.name,
               email,
               category.name AS category
        FROM joke
        INNER JOIN author
            ON joke.authorid = author.id
        INNER JOIN category
            ON joke.categoryid = category.id';
    $jokes = $pdo->query($sql);
    $title = 'Joke List';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database Error:' . $e->getMessage();
}
include 'templates/layout.html.php';