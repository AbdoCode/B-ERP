<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="performance-sheet-print">
    <div class="container-for-btn-group">
        <div class="btn-group">
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
            </button>
        </div>
    </div>
</div>
<div class="performance-sheet">
    <div class="general-info">
        <label>Date:</label>
        <span>17 Aug 2017</span><br/>
        <label>Term:</label>
        <span>Fall 2017</span><br/>
        <label>Job Title:</label>
        <span>Teacher</span><br/>
    </div>
    <h1>Mohamed Maher</h1>
    <div class="table-responsive rate">
        <table class="table text-center">
            <tr>
                <td col-sm-4>
                    <label>Task progress</label><br/>
                    <span>80%</span>
                </td>
                <td col-sm-4>
                    <label>Workplan completion Rate</label><br/>
                    <span>20%</span>
                </td>
                <td col-sm-4>
                    <label>Attendance Rate</label><br/>
                    <span>40%</span>
                </td>
            </tr>
            <tr>
                <td col-sm-4>
                    <label>Attendance Rate</label><br/>
                    <span>40%</span>
                </td>
                <td col-sm-4>
                    <label>Task progress</label><br/>
                    <span>80%</span>
                </td>
                <td col-sm-4>
                    <label>Workplan completion Rate</label><br/>
                    <span>20%</span>
                </td>
            </tr>
            <tr>
                <td col-sm-4>
                    <label>Workplan completion Rate</label><br/>
                    <span>20%</span>
                </td>
                <td col-sm-4>
                    <label>Attendance Rate</label><br/>
                    <span>40%</span>
                </td>
                <td col-sm-4>
                    <label>Task progress</label><br/>
                    <span>80%</span>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>