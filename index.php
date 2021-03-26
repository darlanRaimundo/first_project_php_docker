<?php
    $pdo = new \PDO(
        'mysql:host=mysql;dbname=dbTest',
        'root',
        '32130'
    );

    $stmt = $pdo->query("SELECT * FROM user");
    $all = $stmt->fetchall(PDO::FETCH_ASSOC);

    echo "<pre>".print_r($all, true);

?>