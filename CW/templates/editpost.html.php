<form action='' method="post">
    <input type="hidden" name="postid" value="<?=$post['id']?>">
    <label for='posttext'>Edit your post here:</label>
    <textarea name='posttext' rows="3" cols="40">
    <?=$post['posttext']?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>