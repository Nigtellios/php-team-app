<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Team App</title>
</head>
<body>

<?php foreach ($users as $info => $user) : ?>
    <strong>
        <?php echo $info; ?>:
    </strong>
    <p>
        <?php echo $user->name; ?>
    </p>
<?php endforeach; ?>

</body>
</html>