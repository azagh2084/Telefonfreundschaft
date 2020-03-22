<?php declare(strict_types=1);

@include(__DIR__ . '/database.rm.inc.php');
if (!isset($username)) {
    $username = '';
    $password = '';
}

$dsn = "mysql:host=127.0.0.1;dbname=wirvsvirus;charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];

try {
    $connection = new \PDO($dsn, $username, $password, $options);
} catch (\Exception $e) {
    error_log(print_r($e->getMessage(), true), 3, sprintf(__DIR__ . '/../log/%s.log', time()));
}
