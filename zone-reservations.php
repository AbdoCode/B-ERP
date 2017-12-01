<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div>
    <h2>co-working space</h2>
    <div class="container-for-btn-group">
        <a href="add-new-reservation.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Reservation
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Mobile/Free Paid/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-1">Mobile</th>
                <th class="col-sm-1">Time In</th>
                <th class="col-sm-1">Time Out</th>
                <th class="col-sm-1">Stay Duration</th>
                <th class="col-sm-1">Free Paid</th>
                <th class="col-sm-1">Date Reserved</th>
                <th class="col-sm-1">Consumed</th>
                <th class="col-sm-1">Remain</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>01064323735</td>
                <td>3:15 PM</td>
                <td>5:30 PM</td>
                <td>2hr 15min</td>
                <td>Blue Visa</td>
                <td>17 Aug 2017</td>
                <td>15 hrs</td>
                <td>5 hrs</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>3:15 PM</td>
                <td>5:30 PM</td>
                <td>2hr 15min</td>
                <td>Blue Visa</td>
                <td>17 Aug 2017</td>
                <td>15 hrs</td>
                <td>5 hrs</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>3:15 PM</td>
                <td>5:30 PM</td>
                <td>2hr 15min</td>
                <td>Normal</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>