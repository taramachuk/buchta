<?php
@session_start();

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

<!-- content -->
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
                <textarea maxlength="65535" style="resize: none;" rows="7" cols="103" name="text"></textarea>
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