<?php

session_start();
require_once __DIR__ . "/../src/classes/user.php";
require_once __DIR__ . "/../repository/userRepository.php";
require_once __DIR__ . "/../src/classes/Database.php";

if ( 
    isset($_POST['email']) &&
    isset($_POST['motDePasse']) &&
    !empty($_POST['email']) &&
    !empty($_POST['motDePasse'])
) {
    $email = $_POST['email'];
    $motDePasse = $_POST['motDePasse'];

    $DB = new Database();
    $connexion = $DB->getDB();

    $request = "SELECT * FROM todo_user WHERE email = ?";
    $statement = $connexion->prepare($request);

    $statement->bindvalue(1, $email);

    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if(password_verify($motDePasse, $row['motDePasse'])) {

            $_SESSION['user'] = $row ['userID'];
            $_SESSION['connecté'] = true;
            header ('location: ./../index.php');
            exit;
        } else {
            header('location: ./../connexion.php');
            exit;
        }

    } else {
        header('location: ./../connexion.php');
        exit;
    }

} else {
    header('location: ././connexion.php');
    exit;
}