<?php

require_once "connection.php";
require_once "cart.php";

session_destroy();
session_start();

function login($email, $password)
{
    $response = false;
    $connection = Conecta();
    $response = $connection->query("select * from users where email = '$email' and password = '$password'");

    //save user data in session
    if ($response->num_rows > 0) {
        $row = $response->fetch_assoc();
        $_SESSION['user'] = $row;
        $user_id = $_SESSION['user']['user_id'];
        createCart($user_id);
    }

    return $response;

    Desconecta($connection);
}

function register($username, $password, $email)
{
    $response = false;
    $connection = Conecta();

    // Check if the user with this email already exists
    $email_check = $connection->query("SELECT * FROM users WHERE email = '$email'");
    if ($email_check->num_rows > 0) {
        // User with this email already exists
        return false;
    }

    // Insert the new user data into the database
    $insert = $connection->query("INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')");

    // If the insert is successful, log the user in and create their cart
    if ($insert) {
        $user_id = $connection->insert_id;
        $_SESSION['user'] = array(
            'user_id' => $user_id,
            'username' => $username,
            'email' => $email
        );
        createCart($user_id);
        $response = true;
    }

    Desconecta($connection);
    return $response;
}
