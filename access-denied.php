<?php
session_start();
$pageTitle = 'Access Denied';
include 'deploy.php';
include 'navbar.php';
$var=$_GET['page'];
?>
    <div class="error-path">
        <br><br><center><b><?php echo 'You are not authorized to access '.$var.' page.' ?></b></center>
        <img src="layout/images/access-denied.jpg" class="img-responsive" alt="Access Denied"/>
    </div>
<?php
include $templates . 'footer.php';
?>