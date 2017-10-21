<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="profile edit-profile">
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-sm-3 col-sm-push-9">
                    <div class="profile-img">
                        <img src="layout/images/Profile.jpg" class="img-responsive"/>
                        <div style="position: relative" class="uploads">
                            <label for="image_uploads" class="btn btn-primary">
                                <span class="glyphicon glyphicon-upload"></span> Upload Image
                            </label>
                            <input type="file" id="image_uploads" class="btn btn-primary" accept=".jpg, .jpeg, .png">
                        </div>
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Date of Birth:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Address:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Job Title:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Mobile Number:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Email:</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Date Of Employment:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="infoRow">
                                <label>Date Of Resignation:</label>
                                <input type="date" class="form-control">
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
            <div class="row">
                <div class="col-sm-4 col-sm-push-4 col-xs-12">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>