<?php
// Conect database
try {
    $pdo = new PDO('mysql:dbname=church_admin;host=localhost', 'root', '');
    $pdo->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}
