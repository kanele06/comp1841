    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of jokes</title>
    </head>
    <body>

    <?php if (isset($error)): ?>

        <p><?= $error ?></p>

    <?php else: ?>

        <table border="2px">
            <thead>
                <tr>
                <th>Joke Title</th>
                <th>Category
                <th>Action</th>
                </tr>
            </thead>
            
            <?php foreach ($jokes as $joke): ?>
                <tr>
                    <td width="400px">
                        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>

                        (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
                    </td>

                    <td width="300px">
                        <?= htmlspecialchars($joke['category'], ENT_QUOTES, 'UTF-8') ?>

                    </td>
                    <td width="50px">
                        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8')?>
                        <a href='editjoke.php?id=<?=$joke['id']?>'>Edit</a>
                    </td>
                    <td width="50px">
                        <form action="deletejoke.php" method="post">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>

    <?php endif; ?>

    </body>
    </html>
                