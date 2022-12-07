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
                <form style="display:flex;" action="index.php" method="GET">
                    <input type="submit" name="p" value="main" class="nav__links nav__items" style="border: 0;">
                    <input type="submit" name="p" value="about me" class="nav__links nav__items" style="border: 0;">
                    <input type="submit" name="p" value="contact" class="nav__links nav__items" style="border: 0;">
                </form>
            </div>
            <div class="dropdown">
                <div class="nav__items dropdown-btn">menu</div>
                <div class="dropdown-menu">
                        <form style="display:block;" action="index.php" method="GET">
                            <input type="submit" name="p" value="main" class="nav__links nav__items" style="border: 0; background-color: #bbb">
                            <input type="submit" name="p" value="about me" class="nav__links nav__items" style="border: 0; background-color: #bbb">
                            <input type="submit" name="p" value="contact" class="nav__links nav__items" style="border: 0; background-color: #bbb">
                        </form>
                    </div>
                </div>                   
                <?php
                if((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)){
                    echo<<<END
                    <div style="display:flex;">
                        <form style="display:flex;" action="index.php" method="GET">
                            <input type="submit" name="p" value="account" class="nav__links nav__items" style="border: 0;">
                            <li class="nav__items"><a class="nav__links" href="./logic/log_out.php">log out</a></li>
                        </form>
                    </div>
                    END;
                } else {
                    echo<<<END
<div style="display:flex">

    <form style="display:flex;" action="index.php" method="GET">

        <input type="submit" name="p" value="sign up" class="nav__links nav__items" style="border: 0;">

        <input type="submit" name="p" value="log in" class="nav__links nav__items" style="border: 0;">

    </form>

        <div class="dropdown">

            <div class="nav__items dropdown-btn">   

                <a class="nav__links" href="log_in_template.php">log in old</a>

            </div>

        <div class="dropdown-menu">
            <form action="./logic/log_in.php" method="post">
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
    </form>

</div>
END;
                }
                ?>                
            </div>
        </ul>
    </div>
</nav>
