<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="anime.css">
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
                                <li class="nav__items"><a class="nav__links" href="sign_up_template.php">sign up</a></li>
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
    </nav>
