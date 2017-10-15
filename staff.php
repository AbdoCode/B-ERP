<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="staff">
    <h2>Staff</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Job title/Period/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-2">Name</th>
                <th class="col-sm-1">Job Title</th>
                <th class="col-sm-1">Date of Birth</th>
                <th class="col-sm-2">Address</th>
                <th class="col-sm-2">Educational Degree</th>
                <th class="col-sm-1">Mobile Number</th>
                <th class="col-sm-1">Date Of Employment</th>
                <th class="col-sm-1">Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>5 Sep 1995</td>
                <td>25A Al-matar, Imbaba, Giza</td>
                <td>Bachelor of Information Technology</td>
                <td>01064323735</td>
                <td>15 Aug 2016</td>
                <td>mohamedmaher055@gmail.com</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>5 Sep 1995</td>
                <td>25A Al-matar, Imbaba, Giza</td>
                <td>Bachelor of Information Technology</td>
                <td>01064323735</td>
                <td>15 Aug 2016</td>
                <td>mohamedmaher055@gmail.com</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>