<?php declare(strict_types=1);

$dsn = "mysql:host=127.0.0.1;dbname=wirvsvirus;charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];

try {
    $connection = new \PDO($dsn, 'root', 'root', $options);
} catch (\Exception $e) {
    // ToDo enable die on server
    // die('Could not establish connection to database.');
}