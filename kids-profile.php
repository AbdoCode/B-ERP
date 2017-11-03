<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="profile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-sm-push-9">
                <div class="profile-img">
                    <img src="layout/images/Profile.jpg" class="img-responsive"/>
                    <a href="edit-kids-profile.php" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-edit"></span> Edit Profile
                    </a>
                </div>
            </div>
            <div class="col-sm-9 col-sm-pull-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Kid Information</h3>
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
                            <label>Age:</label>
                            <p>5 Years</p>
                        </div>
                        <div class="infoRow">
                            <label>Address:</label>
                            <p>25A Almatar st. Imbaba, Giza</p>
                        </div>
                        <div class="infoRow">
                            <label>Class:</label>
                            <p>A2</p>
                        </div>
                        <div class="infoRow">
                            <label>Bus:</label>
                            <p>No. 6</p>
                        </div>
                        <div class="infoRow">
                            <label>Term Added:</label>
                            <p>Fall 2015</p>
                        </div>
                        <div class="infoRow">
                            <label>Attendance Rate:</label>
                            <p>89.2%</p>
                        </div>
                        <div class="infoRow">
                            <label>Performance Sheet:</label>
                            <p><a href="performance-sheet-kids.php" class="btn btn-primary btn-sm">View</a></p>
                        </div>
                        <div class="infoRow">
                            <label>Material:</label>
                            <p><a href="#">20/50</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Father Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="infoRow">
                            <label>Name:</label>
                            <p>Mohamed Maher Mahfouz El-Abyad</p>
                        </div>
                        <div class="infoRow">
                            <label>Mobile number:</label>
                            <p>01064323735</p>
                        </div>
                        <div class="infoRow">
                            <label>Job:</label>
                            <p>Lawyer</p>
                        </div>
                        <div class="infoRow">
                            <label>Email:</label>
                            <p>mohamedmaher055@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mother Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="infoRow">
                            <label>Name:</label>
                            <p>Mohamed Maher Mahfouz El-Abyad</p>
                        </div>
                        <div class="infoRow">
                            <label>Mobile number:</label>
                            <p>01064323735</p>
                        </div>
                        <div class="infoRow">
                            <label>Job:</label>
                            <p>none</p>
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
                        <div class="infoRow">
                            <label>Mobile number to call in emergency:</label>
                            <p>01064323735</p>
                        </div>
                        <div class="infoRow">
                            <label>The person allowed to take kid "absent parents":</label>
                            <p>bla blablbaalbablabal</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>