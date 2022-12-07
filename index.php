<?php
session_start();

//navigation
require 'templates/navigation.php';
?>

<?php

//default (index)
if(!isset($_GET['p'])){
    echo<<<END
    <!-- content -->
    <div>
        <main class="index-container">
            <div style="display:flex; flex-direction:column; justify-content:center; align-items:center; top: -20%;">
                <p class="num404">404</p>
                <p class="num404 _pnf">Page not found</p>
            </div>
            <span class="er404">ERROR404</span>
        </main>
    </div>
    END;
}

//others pages
if($_GET['p']=='main') {

    include 'internal/main.php';

} else if($_GET['p']=="about me") {

    include 'internal/aboutme.php';

} else if($_GET['p']=='contact') {

    include 'internal/contact.php';
    
} else if ($_GET['p']=='successful sign up') {

    include 'internal/successful_sign_up.php';

} else if ($_GET['p']=='sign up') {

    include 'internal/sign_up_template.php';

} else if ($_GET['p']=='log in') {

    include 'internal/log_in_template.php';

} else if ($_GET['p']=='log in template') {

    include 'internal/successful_sign_up.php';
}
?>

<!-- footer -->
<?php
require 'templates/footer.php';
?>