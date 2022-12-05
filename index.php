<?php
session_start();
?>
<?php
require 'templates/navigation.php';
?>
    <div>
        <main class="index-container">
            <div style="display:flex; flex-direction:column; justify-content:center; align-items:center; top: -20%;">
                <p class="num404">404</p>
                <p class="num404 _pnf">Page not found</p>
            </div>
            <span class="er404">ERROR404</span>
        </main>
    </div>
<?php
require 'templates/footer.php';
?>