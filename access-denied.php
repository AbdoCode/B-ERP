<?php
    session_start();
    $pageTitle = '404-Not Found';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="error-path">
    <img src="layout/images/access-denied.jpg" class="img-responsive" alt="Access Denied"/>
</div>
<?php
    include $templates . 'footer.php';
?>