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

}
?>

<!-- footer -->
<?php
require 'templates/footer.php';
?>