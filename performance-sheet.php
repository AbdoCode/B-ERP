<?php
    session_start();
    $pageTitle = 'Mohamed Maher';
    include 'init.php';
    include 'navbar.php';
?>
<div class="performance-sheet-print hidden-xs">
    <div class="container-for-btn-group">
        <button class="btn btn-default" type="button" onclick="window.print();return false;">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
        </button>
    </div>
</div>
<div class="performance-sheet">
    <div class="row">
        <h2>Mohamed Maher</h2>
        <div class="col-lg-2 col-lg-push-10 col-md-3 col-md-push-9 col-sm-4 col-sm-push-8 col-xs-12">
            <div class="general-info">
                <label>Date:</label>
                <span>17 Aug 2017</span><br/>
                <label>Term:</label>
                <span>Fall 2017</span><br/>
                <label>Job Title:</label>
                <span>Teacher</span><br/>
            </div>
        </div>
        <div class="col-lg-10 col-lg-pull-2 col-md-9 col-md-pull-3 col-sm-8 col-sm-pull-4 col-xs-12">
            <div class="rates">
                <div class="row text-center">
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Task progress</label><br/>
                        <span>80%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Workplan completion Rate</label><br/>
                        <span>20%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Late Attendance Rate</label><br/>
                        <span>40%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Task progress</label><br/>
                        <span>80%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Workplan completion Rate</label><br/>
                        <span>20%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Attendance Rate</label><br/>
                        <span>40%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Task progress</label><br/>
                        <span>80%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Workplan completion Rate</label><br/>
                        <span>20%</span>
                    </div>
                    <div class="rate col-lg-4 col-xs-6">
                        <label>Attendance Rate</label><br/>
                        <span>40%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>