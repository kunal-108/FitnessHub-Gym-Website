<?php
session_start();
include ('./config/dbconnection.php');

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password' LIMIT 1";
    $login_query_run = mysqli_query($connection, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        foreach ($login_query_run as $row) {
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_email = $row['user_email'];
            $user_phone = $row['user_phone'];
            $role_as = $row['role_as'];
        }

        $_SESSION['auth'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
            'user_phone' => $user_phone
        ];

        $_SESSION['status'] = "Logged In Successfully !!";
        header("Location : ./index.php");
    } else {
        $_SESSION['status'] = "Invalid Email or Password !!";
        header("Location : ./login.php");
    }

} else {
    $_SESSION['status'] = "Access Denied !!";
    header("Location : ./login.php");
}


?>