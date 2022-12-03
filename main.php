<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
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
        <main class="container">
            <div class="portfolio">
                <h2 class="cv-h2">also me</h2>
                <div class="portfolio-btns">
                    <div class="portfolio-btn parallax"><span class="parallax-text">PARALLAX</span></div>
                    <div class="portfolio-btn grad"><span class="grad-text">GRADIENT</span>
                    </div>
                    <div class="portfolio-btn animation"><span class="animation-text">ANIMATION</span></div>
                </div>
            </div>
            <hr>
            <div class="borsch">
                <div class="borsch-top">
                    <div class="borsch-left">
                        <h2>Borsch:</h2>
                        <p>Make a warming bowl of borsch (also known as borscht or borshch) with this simple and comforting recipe. Serve this hearty soup with a dollop of soured cream and a chunk of crusty bread</p>
                    </div>
                    <div class="borsch-right">
                        <div class="borsch-meta">
                            <span>prep: 20mins</span>
                            <span>cook: 2hrs</span>
                            <span>difficult: easy</span>
                            <span>serves: 4-6</span>
                        </div>
                        <div class="borsch-nutric">
                            <div class="borsch-nutric-plate"><p>kcal</p><span>651</span></div>
                            <div class="borsch-nutric-plate"><p>fat</p><span>17g</span></div>
                            <div class="borsch-nutric-plate"><p>carbs</p><span>74g</span></div>
                            <div class="borsch-nutric-plate"><p>fibre</p><span>12g</span></div>
                            <div class="borsch-nutric-plate"><p>protein</p><span>43g</span></div>
                            <div class="borsch-nutric-plate"><p>salt</p><span>0.26g</span></div>
                            <div class="borsch-nutric-plate"><p>sugars</p><span>14g</span></div>
                        </div>                        
                    </div>
                </div>
                <div class="borsch-bottom">
                    <div class="borsch-ingredients">
                        <h2>Ingredients</h2>
                        <h3>For the stock</h3>
                        <li>1kg fatty beef shin, (left in large chunks)</li>    
                        <li>1 onion, peeled and left whole</li> 
                        <li>1 bay leaf</li> 
                        <h3>For the broth</h3>
                        <li>2.2kg potatoes, peeled and chopped</li>
                        <li>2 tbsp sunflower oil</li>
                        <li>1 onion, finely diced</li>
                        <li>1 carrot, roughly grated</li>
                        <li>200g beetroot, peeled and chopped into matchsticks</li>
                        <li>1 red pepper, chopped (optional)</li>
                        <li>½ x 400g can chopped tomatoes</li>
                        <li>6 prunes, pitted (we used French Agen prunes)</li>
                        <li>½ white cabbage, shredded</li>
                        <li>400g can red kidney beans, drained and rinsed</li>
                        <li>100ml soured cream or crème fraîche, to serve</li>
                        <li>½ bunch dill, chopped</li>
                        <li>crusty bread, to serve</li>
                    </div>
                    <div class="borsch-method">
                        <h2>Method</h2>
                        <section><h3>STEP 1</h3>
                        <p>To make the stock, put the meat, whole onion, bay leaf and 2 litres of lightly salted cold water in a large saucepan. Cook over a very low heat for 1 hr 30 mins or until the beef shin is soft and falls apart easily – this can take up to 3 hrs. Skim off the scum with a spoon from time to time. Break up any larger pieces of beef into the broth, remove the whole onion and discard.</section>
                        </p>
                        <section><h3>STEP 2</h3>
                        <p>Add the potatoes to the borscht, season well with salt and pepper and cook for 10-15 mins until tender. Meanwhile, heat the sunflower oil in a large, deep frying pan. Add the diced onion and carrot, and cook over a medium heat, stirring, until the carrot is soft and is about to start caramelising.</section>
                        </p>
                        <section><h3>STEP 3</h3>
                        <p>Add the beetroot and cook for around 5 mins, stirring occasionally. Add the red pepper, if using, and cook for another 2 mins, then add the tomatoes and prunes, stir, then increase the heat and boil to reduce slightly, before adding everything to the borscht.</section>
                        </p>
                        <section><h3>STEP 4</h3>
                        <p>Add the shredded cabbage and the kidney beans, and cook for 7-10 mins or until tender. Serve with a dollop of sour cream or crème fraîche, lots of chopped dill and some crusty bread.</section>
                        </p>
                    </div>
                </div>
            </div>
            <div style="height:150px;"></div>
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