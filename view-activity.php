<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-activity">
    <h1 class="text-center">Activity Name</h1>
    <div class="contRow">
        <label class="col-xs-1">Date:</label>
        <p class="col-xs-11">17 Aug 2017</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Class:</label>
        <p class="col-xs-11">A</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Status:</label>
        <p class="col-xs-11">Completed</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Details:</label>
        <textarea disabled class="col-xs-11"></textarea>
    </div>
    <label class="col-xs-12 control-label">Photos:</label>
</div>
<?php
    include $templates . 'footer.php';
?>