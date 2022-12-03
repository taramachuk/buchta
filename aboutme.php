<?php
session_start();
?>
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
    </nav>
    <div>
        <main class="container form">
           <h1 class="form__header">about me</h1>
           <div class="aboutme">
                <div class="cv-left">
                    <div class="cv-header">
                        <img class="cv-photo" src="./static/default-avatar.png" alt="">
                        <div class="cv-name">
                            <h2>Taras Pryimachuk</h2>
                            <span class="cv-name-major" style="opacity: .7;"> front-end developer</span>
                            <a href="#"><div class="cv-btn">portfolio</div></a>
                        </div>
                    </div>
                    <div class="omnie">
                        <section>
                            <h2 class="cv-h2">about me</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo facilis eveniet recusandae earum beatae atque minima aperiam vero quam laborum dolorem, et accusantium, asperiores pariatur deserunt provident fuga esse ut. At temporibus ab harum eius optio tempore eaque, accusamus praesentium fugiat ex quae repellendus tenetur maiores laudantium consectetur nam!</p>
                        </section>
                    </div>
                </div>
                <div class="cv-right">
                    <section>
                        <h2 class="cv-h2">programing languages</h2>
                        <div class="cv-list">
                            <ul>
                                <li>html</li>
                                <li>css</li>
                                <li>js</li>
                                <li>php</li>
                                <li>sql</li>
                            </ul>
                            <ul>
                                <li>python</li>
                                <li>c/c++</li>
                                <li>ruby</li>
                                <li>go</li>
                                <li>rust</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">exp</h2>
                        <div class="cv-list">
                            <ul>
                                <li>2020-2048: google</li>
                                <li>1900-1990: facebook</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">education</h2>
                        <div class="cv-list">
                            <ul>
                                <li>harvard</li>
                                <li>sei</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">languages</h2>
                        <div class="cv-list">
                            <ul>
                                <li>english</li>
                                <li>polish</li>
                            </ul>
                            <ul>
                                <li>ukrainian</li>
                                <li>elvish</li>
                            </ul>
                        </div>
                    </section> 
                </div>
           </div>
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