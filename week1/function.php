<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<?php
function tester()
{
    echo "This is my first function which I am going to call twice";
}
tester(); ?>
<p> ********** Here is some HTML *********** </p>
<p> *** And now I will use PHP function again *** </p>
<?php tester(); ?>
</body>
</html>