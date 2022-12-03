<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
    <div>
        <main class="container form">
            <h1 class="form__header">contact with me</h1>
            <form action="index.php">
                <div class="form">
                <fieldset class="field">
                    <div class="form__div">
                        <div class="form__el">
                            <div class="inputs">
                                <label>first name:<input type="text"></label>
                            </div>
                            <div class="inputs">
                                <label>last- name:<input type="text"></label>
                            </div>
                        </div>
                        <div class="form__el">
                            <div class="inputs">
                                <label>e-mail:<input type="email"></label>
                            </div>
                            <div class="inputs">
                                <label>phone-:<input type="number"></label>
                            </div>
                        </div>
                   </div>
                    <div class="form__el">
                        <textarea name="lol" id="" cols="65" rows="10"></textarea>
                    </div>
                    <div class="form__el">
                        <label><input type="radio" checked>cooperation</label>
                        <label><input type="radio">critics</label>
                        <label><input type="radio">bug</label>
                    </div>
                    <div class="form__el">
                        <input type="submit" value="submit">
                    </div>
                </fieldset>
            </div>
            </form>
        </main>
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