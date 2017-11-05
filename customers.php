<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="customers">
    <h2>Customers</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Mobile..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="container-for-btn-group">
        <a href="add-customer.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Customer
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-2">Name</th>
                    <th class="col-sm-1">Job</th>
                    <th class="col-sm-1">Mobile Number</th>
                    <th class="col-sm-2">E-mail</th>
                    <th class="col-sm-1">Looking for</th>
                    <th class="col-sm-2">Reception Comment</th>
                    <th class="col-sm-1">Date</th>
                    <th class="col-sm-1">Time</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Developer</td>
                <td>01064323735</td>
                <td>mohamedmaher055@gmail.com</td>
                <td>Preschool</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Developer</td>
                <td>01064323735</td>
                <td>mohamedmaher055@gmail.com</td>
                <td>Preschool</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Developer</td>
                <td>01064323735</td>
                <td>mohamedmaher055@gmail.com</td>
                <td>Preschool</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>