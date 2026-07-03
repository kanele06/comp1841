<form action="" method="post">
    <label for='posttext'> Type your post here:</label>
    <textarea name="posttext" rows="3" cols="40"></textarea>


    <select name="users">
        <option value="">Select a User</option>
        <?php foreach ($users as $user): ?>
            <option value="<?= htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') ?>
            </option>
        <?php endforeach; ?>
    </select>

    <select name="modules">
        <option value="">Select a Module</option>
        <?php foreach ($modules as $module): ?>
            <option value="<?= htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($module['name'], ENT_QUOTES, 'UTF-8') ?>
            </option>
        <?php endforeach; ?>
    </select>

    <input type="submit" name="submit" value="Add">
</form>