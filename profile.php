<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="profile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-sm-push-9">
                <div class="profile-img">
                    <img src="layout/images/Profile.jpg" class="img-responsive"/>
                    <a href="edit-profile.php" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-edit"></span> Edit Profile
                    </a>
                </div>
            </div>
            <div class="col-sm-9 col-sm-pull-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Main Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="infoRow">
                            <label>Name:</label>
                            <p>Mohamed Maher Mahfouz El-Abyad</p>
                        </div>
                        <div class="infoRow">
                            <label>Date of Birth:</label>
                            <p>5 Sep 1995</p>
                        </div>
                        <div class="infoRow">
                            <label>Address:</label>
                            <p>25A Almatar st. Imbaba, Giza</p>
                        </div>
                        <div class="infoRow">
                            <label>Job Title:</label>
                            <p>Teacher</p>
                        </div>
                        <div class="infoRow">
                            <label>Mobile Number:</label>
                            <p>01064323735</p>
                        </div>
                        <div class="infoRow">
                            <label>Email:</label>
                            <p>mohamedmaher055@gmail.com</p>
                        </div>
                        <div class="infoRow">
                            <label>Date Of Employment:</label>
                            <p>7 Sep 2001</p>
                        </div>
                        <div class="infoRow">
                            <label>Date Of Resignation:</label>
                            <p>8 Aug 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Other Information</h3>
                    </div>
                    <div class="panel-body">
                        More
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>