<?php

session_start();

if($_SESSION['logged']){ 
    header('Location: ./index.php');
    exit();
}

require_once "../db_data.php";

$sql = @new mysqli($host, $db_user, $db_pass, $db_base);

if($sql->connect_errno!=0){
    echo "lox sql fall";
} else {

    $login = $_POST["login"];

    $pass = $_POST["password"];
    
    $login = htmlentities($login, ENT_QUOTES, "UTF-8"); 
    
    if($result = @$sql->query(sprintf("select * from users where login='%s'",mysqli_real_escape_string($sql,$login))))
    {
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
            if(password_verify($pass, $row['password'])){
            $_SESSION['logged'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['money'] = $row['money'];
            header('Location: ../index.php?p=account');
            } else {
                #wrong pass
                $_SESSION['login_failed'] = '<span style="color:red"> wrong login or !!!password</span>';
                header('Location: ../index.php?p=log+in');
            }
        } else {
            #wrong login
            $_SESSION['login_failed'] = '<span style="color:red"> wrong !!!login or password</span>';
            header('Location: ../index.php?p=log+in');
        }

    }
}
?>
