<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenwich Student Forum</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<main class="container">
    <p class="subtitle">A place for students to connect.</p>

    <?php if (isset($error)): ?>

        <div class="errors">
            <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
        </div>

    <?php else: ?>
        <p>There are <?= $totalPosts ?> posts in the forum.</p>
        <?php foreach ($posts as $post): ?>

            <div class="post">

                <div class="module">
                    <?= htmlspecialchars($post['module'], ENT_QUOTES, 'UTF-8') ?>
                </div>

                <div class="post-text">
                    <?= nl2br(htmlspecialchars($post['posttext'], ENT_QUOTES, 'UTF-8')) ?>
                </div>

                <div class="post-footer">

                    <div class="author">
                        Posted by
                        <a href="mailto:<?= htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </div>

                    <div class="actions">

                        <a href="editpost.php?id=<?= $post['id'] ?>">
                            Edit
                        </a>

                        <form action="deletepost.php" method="post">
                            <input type="hidden"
                                   name="id"
                                   value="<?= $post['id'] ?>">

                            <button type="submit">
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

</main>

</body>
</html>
