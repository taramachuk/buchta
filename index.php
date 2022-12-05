<?php
session_start();

//navigation
require 'templates/navigation.php';
?>

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

<!-- footer -->
<?php
require 'templates/footer.php';
?>