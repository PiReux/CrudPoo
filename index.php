<?php
require 'Database.php';
use wild\Database;

$db = new Database('blog');
$datas = $db->query('SELECT * FROM article');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>text</td>
            <td>autor</td>
            <td>Action</td>

        </tr>
        <?php foreach ($datas as $data): ?>
            <tr>
                <td><?php echo $data->id; ?></td>
                <td><?php echo $data->title; ?></td>
                <td><?php echo $data->text; ?></td>
                <td><?php echo $data->autor; ?></td>
                <td><a href="edit.php?id=<?php echo $data->id; ?>">Editer</a></td>

            </tr>
        <?php endforeach; ?>

    </table>

    <a href="edit.php">Ajouter un contact</a>
</div>
<link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
