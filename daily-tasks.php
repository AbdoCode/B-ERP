<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="daily-tasks">
    <h2>Daily Tasks</h2>
    <div class="container-for-btn-group">
        <a href="add-daily-tasks.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Daily Task
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-5">Tasks</th>
                <th class="col-sm-6">Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Task name Task name Task name Task name Task name Task name Task name Task name </td>
                <td>
                    <select class="dailyTasksStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                    <select class="inprogressStatus hide" name="status">
                        <option disabled selected value="">select percentage</option>
                        <option value="10%">10%</option>
                        <option value="20%">20%</option>
                        <option value="30%">30%</option>
                        <option value="40%">40%</option>
                        <option value="50%">50%</option>
                        <option value="60%">60%</option>
                        <option value="70%">70%</option>
                        <option value="80%">80%</option>
                        <option value="90%">90%</option>
                        <option value="100%">100%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Task name</td>
                <td>
                    <select class="dailyTasksStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                    <select class="inprogressStatus hide" name="status">
                        <option disabled selected value="">select percentage</option>
                        <option value="10%">10%</option>
                        <option value="20%">20%</option>
                        <option value="30%">30%</option>
                        <option value="40%">40%</option>
                        <option value="50%">50%</option>
                        <option value="60%">60%</option>
                        <option value="70%">70%</option>
                        <option value="80%">80%</option>
                        <option value="90%">90%</option>
                        <option value="100%">100%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Task name</td>
                <td>
                    <select class="dailyTasksStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                    <select class="inprogressStatus hide" name="status">
                        <option disabled selected value="">select percentage</option>
                        <option value="10%">10%</option>
                        <option value="20%">20%</option>
                        <option value="30%">30%</option>
                        <option value="40%">40%</option>
                        <option value="50%">50%</option>
                        <option value="60%">60%</option>
                        <option value="70%">70%</option>
                        <option value="80%">80%</option>
                        <option value="90%">90%</option>
                        <option value="100%">100%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Task name</td>
                <td>
                    <select class="dailyTasksStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                    <select class="inprogressStatus hide" name="status">
                        <option disabled selected value="">select percentage</option>
                        <option value="10%">10%</option>
                        <option value="20%">20%</option>
                        <option value="30%">30%</option>
                        <option value="40%">40%</option>
                        <option value="50%">50%</option>
                        <option value="60%">60%</option>
                        <option value="70%">70%</option>
                        <option value="80%">80%</option>
                        <option value="90%">90%</option>
                        <option value="100%">100%</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>