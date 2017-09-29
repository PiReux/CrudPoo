<?php
require 'Database.php';
use wild\Database;

$db = new Database('blog');
$datas = $db->query('SELECT * FROM article');
var_dump($datas);