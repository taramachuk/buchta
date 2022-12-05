<?php
session_start();

//navigation
require 'templates/navigation.php';
?>

<!-- content -->
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

<!-- footer -->
<?php
require 'templates/footer.php';
?>