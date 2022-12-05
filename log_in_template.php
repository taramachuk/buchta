<?php
session_start();
if((isset($_SESSION['logged']))&&($_SESSION['logged'] == true)){
    header('Location: account.php');
    exit();
}
?>
<?php
require 'templates/navigation.php';
?>

    <div class="container form">
    <h1 class="form__header">log in</h1>
            <form action="log_in.php" method="post">
            <div class="aboutme" style="width: 250px;display: flex; flex-direction: column;">
                    login:
                    <br>
                    <br>
                    <input type="text" name="login">
                    <br>
                    password:
                    <br>
                    <br>
                    <input type="password" name="password">
                    <br>
                    <?php
                    if((isset($_SESSION['login_failed']))&& $_SESSION['login_failed']){
                        echo<<<END
                        <br>
                        {$_SESSION['login_failed']}
                        <br>
                        END;
                    }
                    ?>
                    <br>
                    <input type="submit" value="log in" style="height:25px; width: 70px;">
                </div>
            </form>
    </div>

<?php
require 'templates/footer.php';
?>