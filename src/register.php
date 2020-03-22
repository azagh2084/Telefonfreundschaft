<?php declare(strict_types=1);

require_once __DIR__ . '/../inc/database.inc.php';

if (!isset($_POST['register']) || !empty($_POST['captcha'])) {
    // Probably dealing with a bot, exiting
    header('Location: /');
    exit();
}

// Required values
$callName = $_POST['callname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['password_repeat'];
$phoneNumber = $_POST['phone_number'];
$age = (int) $_POST['age'];

// None required values
$motivation = $_POST['message'] ?? null;
$lastName = $_POST['lastname'] ?? null;
$gender = $_POST['gender'] ?? null;
$town = $_POST['town'] ?? null;

if (
    empty($callName) ||
    empty($password) ||
    empty($passwordRepeat) ||
    !($password === $passwordRepeat) ||
    ($age <= 0) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    // ToDo redirect to error page instead of home
    header('Location: /');
    exit();
}

$query = <<<SQL
INSERT INTO `user`
    (
     `call_name`,
     `age`,
     `email`,
     `password`,
     `phone_number`,
     `motivation`,
     `gender`,
     `town`
     ) VALUES (?, ?, ?, ?, ?, ?, ?, ?);
SQL;


$statement = $connection->prepare($query);

try {
    $statement->execute(
        [
            $callName,
            $age,
            $email,
            password_hash($password, PASSWORD_ARGON2ID),
            $phoneNumber,
            $motivation,
            $gender,
            $town
        ]
    );
}
catch(\PDOException $PDOException) {
    // ToDo redirect to error page instead of home
    header('Location: /');
    exit();
}

// For security reasons we unset the statement
unset($statement);

// ToDo redirect to success page instead of home
header('Location: /');
