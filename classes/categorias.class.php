<?php

class Categorias
{
    public function getLista()
    {
        global $pdo;
        $array = array();
        $sql = $pdo->query("SELECT * from categorias");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo 'vazio';
        }
        return $array;
    }
};
