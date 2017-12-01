<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
    include 'pics_view.php';
?>
<div class="view-event-request">
    <h2>Event Title</h2>
    <div class="row">
        <div class="form-horizontal col-sm-5">
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Requester Name:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Date Requested:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Time From:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Time To:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Segment:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Location:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Kids Number:</label>
                <div class="col-sm-8 col-xs-7">
                    <p class="form-control-static">This is Test Text</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Photos:</label>
                <div class="col-sm-8 col-xs-7">
                    <button class="col-xs-4 btn btn-sm btn-primary viewEventPhotos">
                        <span class="glyphicon glyphicon-picture"></span> View
                    </button>
                    <div class="col-xs-8">
                        <div style="position: relative" class="uploads">
                            <label for="photos_upload" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-upload"></span> Upload
                            </label>
                            <input type="file" id="photos_upload" class="btn btn-primary" accept="image/*" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Videos:</label>
                <div class="col-sm-8 col-xs-7">
                    <button class="col-xs-4 btn btn-sm btn-primary viewEventVideos">
                        <span class="glyphicon glyphicon-picture"></span> View
                    </button>
                    <div class="col-xs-8">
                        <div style="position: relative" class="uploads">
                            <label for="videos_upload" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-upload"></span> Upload
                            </label>
                            <input type="file" id="videos_upload" class="btn btn-primary" accept="video/*" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-xs-5 control-label">Files:</label>
                <div class="col-sm-8 col-xs-7">
                    <form method="get" action="<?php ?>">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span class="glyphicon glyphicon-download"></span> Download
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="tableSum col-sm-7">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th class="col-sm-5">Objectives</th>
                        <th class="col-sm-5">Activities</th>
                        <th class="col-sm-2">Budget</th>
                    </tr>
                    <tr>
                        <td>This is Objective</td>
                        <td>This is Activity</td>
                        <td>900 LE</td>
                    </tr>
                    <tr>
                        <td>This is Objective</td>
                        <td>This is Activity</td>
                        <td>900 LE</td>
                    </tr>
                    <tr>
                        <td>This is Objective</td>
                        <td>This is Activity</td>
                        <td>900 LE</td>
                    </tr>
                    <tr>
                        <td>This is Objective</td>
                        <td>This is Activity</td>
                        <td>900 LE</td>
                    </tr>
                    <tr>
                        <td>This is Objective</td>
                        <td>This is Activity</td>
                        <td>900 LE</td>
                    </tr>
                </table>
            </div>
            <div class="form-horizontal sum">
                <div class="form-group">
                    <label class="col-sm-4 col-xs-5 control-label">Total Budget:</label>
                    <div class="col-sm-8 col-xs-7">
                        <p class="form-control-static">6800 LE</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-xs-5 control-label">All Objectives:</label>
                    <div class="col-sm-8 col-xs-7">
                        <p class="form-control-static">7</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-xs-5 control-label">All Activities:</label>
                    <div class="col-sm-8 col-xs-7">
                        <p class="form-control-static">7</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-success btn-block">Approve</button>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-danger btn-block">Reject</button>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <textarea class="form-control" placeholder="Type your Comment" rows="3"></textarea>
                </div>
                <div class="form-group col-sm-push-8 col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-warning btn-block">Send back for modification</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-danger btn-block">Cancelled</button>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-warning btn-block">Postpone</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>