<?php
// A way to connect to the database that is less secure
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
$username = 'guitar_shop_app';
$password = 'pa55word';

try {
    $db = new PDO($dsn, $username, $password);
    if ($db != null) {
        echo '<p>Database connection established.</p>';
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo '<p>Database connection error. ' . $error . '</p>';
    exit;
}

//phpinfo();


