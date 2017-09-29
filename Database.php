<?php

namespace wild;

use \PDO;
use wilder\Article;

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'wilder', $db_pass = 'jesaiscequejefais', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'wilder', 'jesaiscequejefais');
            $this->pdo = $pdo;
        }
        return $this->pdo = $pdo;
    }

    public function query($statement)
    {
        $res = $this->getPdo()->query($statement);
        $datas = $res->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

    /**
     * @param $table
     * @param $fields
     * @return int
     */
    public function exec($table, $fields)
    {
        $article = new Article($fields['title'], $fields['text'], $fields['autor']);
        $sql = "INSERT INTO $table VALUES (NULL, '$article->getTitle', '$article->getText', '$article->getAutor')";
        $res = $this->getPdo()->exec($sql);
        return $res;
    }
}