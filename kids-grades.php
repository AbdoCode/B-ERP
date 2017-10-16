<?php
    session_start();
    $pageTitle = 'Kids Data';
    include 'init.php';
    include 'navbar.php';
?>
    <div class="kids-data">
        <h2>Kids Grade</h2>
        <div class="input-group col-sm-5 col-xs-12 center-block">
            <input type="search" class="form-control" placeholder="Kid name..." />
            <div class="input-group-btn center-block">
                <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
            </div>
        </div>
    </div>
<?php
    include_once $templates . 'footer.php';
?>