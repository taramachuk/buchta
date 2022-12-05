<?php
session_start();

if(isset($_POST['login'])){

    $validation = true;

    $login = $_POST['login'];
    $email = $_POST['email'];
    $email_after = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];

    if((strlen($login)<2 || (strlen($login)>20)))
    {
        $validation = false;
        $_SESSION['e_login'] = "login must be from 2 to 20";
    }

    if(ctype_alnum($login)==false)
    {
        $validation = false;
        $_SESSION['e_login'] = "contain only letters numbers";
    }

    if(filter_var($email_after, FILTER_VALIDATE_EMAIL)==false || ($email_after!=$email))
    {
        $validation = false;
        $_SESSION['e_email'] = "invalid email domains";
    }

    if((strlen($pass)<1 || (strlen($pass)>20)))
    {
        $validation = false;
        $_SESSION['e_pass'] = "password must be from 5 to 20";
    }

    if($pass != $repass)
    {
        $validation = false;
        $_SESSION['e_pass'] = "passwords didnt mutch";
    }

    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);


    if(!isset($_POST['terms']))
    {
        $validation = false;
        $_SESSION['e_terms'] = "checkbox has been checked";
    }

    require_once "db_data.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        $sql = @new mysqli($host, $db_user, $db_pass, $db_base);
        if($sql->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else
        {
            $result = $sql->query("select id from users where email='$email'");

            if(!$result) throw new Exception($sql->error);

            
            if($result->num_rows>0)
            {
                $validation = false;
                $_SESSION['e_email'] = "email alredy used";    
            }

            $result = $sql->query("select id from users where login='$login'");

            if(!$result) throw new Exception($sql->error);

            
            if($result->num_rows>0)
            {
                $validation = false;
                $_SESSION['e_login'] = "login alredy used";    
            }

            if($validation==true)
            {
                if($sql->query("insert into users(login, password, email) value('$login', 
                '$pass_hash', '$email')")){
                    $_SESSION['validated']=true;
                    header('Location: successful_sing_up.php');
                }
            }

            $sql->close();
        }
    }
    catch(Exception $e)
    {
        echo '<span style="color:red;">sorry, server error</span>';
        echo '<br> dev info: '.$e;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buchta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navigation">
        <div class="nav__container">
            <div class="nav__logo">
                <a href="index.php">www.Buchta.com</a>
            </div>`
            <div class="nav__buttons">
                <ul class="navbar">
                    <div style="display:flex;">
                        <li class="nav__items"><a class="nav__links" href="main.php">main</a></li>
                        <li class="nav__items"><a class="nav__links" href="aboutme.php">about me</a></li>
                        <li class="nav__items"><a class="nav__links" href="contact.php">contact</a></li>
                    </div>
                    <div class="dropdown">
                        <div class="nav__items dropdown-btn">menu</div>
                        <div class="dropdown-menu">
                            <li class="nav__items"><a class="nav__links" href="main.php">main</a></li>
                            <li class="nav__items"><a class="nav__links" href="aboutme.php">about me</a></li>
                            <li class="nav__items"><a class="nav__links" href="contact.php">contact</a></li>
                        </div>
                    </div>
                    <?php
                        if((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)){
                            echo<<<END
                            <div style="display:flex;">
                                <li class="nav__items"><a class="nav__links" href="account.php">account</a></li>
                                <li class="nav__items"><a class="nav__links" href="log_out.php">log out</a></li>    
                            </div>
                            END;
                        } else {
                            echo<<<END
                            <div style="display:flex">
                                <li class="nav__items"><a class="nav__links" href="sing_up_template.php">sing up</a></li>
                                <div class="dropdown">
                                    <div class="nav__items dropdown-btn">
                                        <a class="nav__links" href="log_in_template.php">log in</a>
                                    </div>
                                    <div class="dropdown-menu">
                                        <form action="log_in.php" method="post">
                                            <div class="--log">
                                                <label for="text">login:</label>
                                                <input type="text" name="login">
                                                <br>
                                                <label for="password">password:</label>
                                                <input type="password" name="password">
                                                <br>
                                                <input type="submit" value="log in">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            END;
                        }
                    ?>         
                </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container form">
    <h1 class="form__header">sing up</h1>
    <form  method="post">
        <div class="aboutme" style="width: 250px;display: flex; flex-direction: column;">
            
            login:
            <input type="text" name="login">
            <?php
            if(isset($_SESSION['e_login']))
            {
                echo '<div style="color:red;">'.$_SESSION['e_login'].'</div>';
                unset($_SESSION['e_login']);
            }
            ?>
            <br>
            email:
            <input type="text" name="email">
            <?php
            if(isset($_SESSION['e_email']))
            {
                echo '<div style="color:red;">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            }
            ?>
            <br>
            password:
            <input type="password" name="password">
            <?php
            if(isset($_SESSION['e_pass']))
            {
                echo '<div style="color:red;">'.$_SESSION['e_pass'].'</div>';
                unset($_SESSION['e_pass']);
            }
            ?>
            <br>
            repassword:
            <input type="password" name="repassword">
            <br>
            <label>
            <input type="checkbox" name="terms"> accept terms
            </label>
            <?php
            if(isset($_SESSION['e_terms']))
            {
                echo '<div style="color:red;">'.$_SESSION['e_terms'].'</div>';
                unset($_SESSION['e_terms']);
            }
            ?>
            

            <br>
            <input type="submit" value="log in" style="height:25px; width: 70px;">
        </div>
    </form>
    </div>


    <footer class="footer">
        <div class="nav__footer">
            <ul class="navbar --footer">
                <li class="nav__items"><a class="nav__links" href="#">apps</a></li>
                <li class="nav__items"><a class="nav__links" href="#">about</a></li>
                <li class="nav__items"><a class="nav__links" href="#">support</a></li>
                <li class="nav__items"><a class="nav__links" href="#">tems</a></li>
                <li class="nav__items"><a class="nav__links" href="#">privacy</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>