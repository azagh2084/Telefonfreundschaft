<?php declare(strict_types=1);

$dsn = "mysql:host=127.0.0.1;dbname=wirvsvirus;charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
@include('/inc/database.rm.inc.php');
#$mysql_username = '';
#$mysql_password = '';
try {
    $connection = new \PDO($dsn, $mysql_username, $mysql_password, $options);
} catch (\Exception $e) {
    // ToDo enable die on server
    // die('Could not establish connection to database.');
}
