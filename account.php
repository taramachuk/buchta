<?php
session_start();
if((isset($_SESSION['logged']))&&($_SESSION['logged'] == true)){

} else {
    header('Location: index.php');
    exit();
}

require_once "db_data.php";

$sql = @new mysqli($host, $db_user, $db_pass, $db_base);

if($sql->connect_errno!=0){
    echo "lox sql fall";
} else {

    if(isset($_POST["text"])&&$_POST["text"]){
        $text = str_replace("\\n", "<br>", mysqli_real_escape_string($sql, $_POST["text"]));
        mysqli_query($sql,'insert into comments(user_id ,comment) values('.$_SESSION['id'].',"'.$text.'");');
    }
    
    $result = $sql->query( "select count(user_id) from comments where user_id = {$_SESSION['id']};");
    $count = $result->fetch_assoc();
    $count = intval($count['count(user_id)']);




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
            </div>
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
                        if($_SESSION['logged']){
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
    <div>
        <main class="container form" style="width:820;">
            <h1 class="form__header">account</h1>
            <div class="aboutme">
               
                <?php
                    echo<<<END
                    id: {$_SESSION['id']} <br>
                    login: {$_SESSION['login']} <br>
                    email: {$_SESSION['email']} <br>
                    money: {$_SESSION['money']} <br>
                    END;
                ?>
                        
            </div>
            <h1 class="form__header">add comment</h1>
            <form action="" method="post">
            <div class="aboutme" style="display: flex; flex-direction: column;">
                    <textarea style="resize: none;" rows="7" cols="103" name="text"></textarea>
                    <br>    
                    <input type="submit" value="post" style="height:25px; width: 70px;">
                </div>
            </form>
            <h1 class="form__header">comments</h1>
            <?php
                $result = mysqli_query($sql, "select date,comment from comments where user_id=".$_SESSION['id']." ORDER by date desc;");
                while($row = $result->fetch_assoc()){
                    echo<<<END
                    <div class="aboutme" style="width: 820px;flex-direction: column">
                        <div style="width: 700px;display: flex; justify-content: space-between;"> 
                            <div>{$_SESSION['login']} </div>
                            <div>{$row['date']}</div>
                        </div>
                        <br>
                        <div>
                            <p style="width:700px; word-wrap: break-word">{$row['comment']}</p>
                        </div>
                    </div>
                    <br><br>
                    END;
                    unset($_SESSION['text']);
                }       
            ?>
        </main>
        <div style="height: 70px"   ></div>
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