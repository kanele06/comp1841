<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
</head>

<body>

<header>
    <h1>Greenwich Student Forum</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="posts.php">Forum</a></li>
        <li><a href="addpost.php">Ask Question</a></li>
    </ul>
</nav>

<main>
    <div class="container">
        <?= $output ?>
    </div>
</main>

</body>
</html>
