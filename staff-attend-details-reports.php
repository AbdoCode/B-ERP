<?php
    session_start();
    $pageTitle = 'Month';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="staff-attend-details-reports">
    <h2>Month Attendance</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Employee name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-2">Employee Name</th>
                <th class="col-sm-1">Attendance Days</th>
                <th class="col-sm-1">Actual Attendance Days</th>
                <th class="col-sm-1">Fridays</th>
                <th class="col-sm-1">Official Vacations</th>
                <th class="col-sm-1">Paid Vacations</th>
                <th class="col-sm-1">Unpaid Vacations</th>
                <th class="col-sm-1">عدد الاستئذانات</th>
                <th class="col-sm-1">Total Days</th>
                <th class="col-sm-1">Vacations Balance</th>
            </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>24</td>
                <td>22</td>
                <td>4</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>30</td>
                <td>19</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>24</td>
                <td>22</td>
                <td>4</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>30</td>
                <td>19</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>24</td>
                <td>22</td>
                <td>4</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>30</td>
                <td>19</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>24</td>
                <td>22</td>
                <td>4</td>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>30</td>
                <td>19</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>