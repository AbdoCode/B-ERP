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
    <h2>Mohamed Maher</h2>
    <div class="general-info">
        <label>Date:</label>
        <span>17 Aug 2017</span><br/>
        <label>Term:</label>
        <span>Fall 2017</span><br/>
        <label>Job Title:</label>
        <span>Teacher Supervisor</span><br/>
    </div>
    <div class="rates text-center">
        <div class="row">
            <div class="rate col-sm-4 col-xs-6">
                <label>Task progress</label><br/>
                <span>80%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Workplan completion Rate</label><br/>
                <span>20%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Attendance Rate</label><br/>
                <span>40%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Task progress</label><br/>
                <span>80%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Workplan completion Rate</label><br/>
                <span>20%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Attendance Rate</label><br/>
                <span>40%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Task progress</label><br/>
                <span>80%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Workplan completion Rate</label><br/>
                <span>20%</span>
            </div>
            <div class="rate col-sm-4 col-xs-6">
                <label>Attendance Rate</label><br/>
                <span>40%</span>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>