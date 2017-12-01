<?php
    session_start();
    $pageTitle = '404-Not Found';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="error-path">
    <img src="layout/images/404.jpg" class="img-responsive" alt="404 Not Found"/>
</div>
<?php
    include $templates . 'footer.php';
?>