<?php
    session_start();
    $pageTitle = 'Kids Data';
    include 'deploy.php';
    include 'navbar.php';
?>
    <div class="kids-data">
        <h2>Kids Grade</h2>
        <div class="input-group col-sm-5 col-xs-12 center-block">
            <input type="search" class="form-control" placeholder="Kid name..." />
            <div class="input-group-btn center-block">
                <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
            </div>
        </div>
        <div style="margin-top: 10px">
            <label>E = Excellent | V = Very good | G = Good | N = Need More Time</label>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-3">Name</th>
                    <th class="col-sm-1" colspan="2">Subject 1</th>
                    <th class="col-sm-1" colspan="2">Subject 2</th>
                    <th class="col-sm-1" colspan="2">Subject 3</th>
                    <th class="col-sm-1" colspan="2">Subject 4</th>
                    <th class="col-sm-1" colspan="2">Subject 5</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>1<sup>st</sup> MidTerm</th>
                    <th>2<sup>nd</sup> MidTerm</th>
                    <th>1<sup>st</sup> MidTerm</th>
                    <th>2<sup>nd</sup> MidTerm</th>
                    <th>1<sup>st</sup> MidTerm</th>
                    <th>2<sup>nd</sup> MidTerm</th>
                    <th>1<sup>st</sup> MidTerm</th>
                    <th>2<sup>nd</sup> MidTerm</th>
                    <th>1<sup>st</sup> MidTerm</th>
                    <th>2<sup>nd</sup> MidTerm</th>
                </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td><a href="kids-profile.php">Mohamed Maher Mahfouz</a></td>
                    <td>E</td>
                    <td>N</td>
                    <td>G</td>
                    <td>V</td>
                    <td>V</td>
                    <td>G</td>
                    <td>E</td>
                    <td>N</td>
                    <td>G</td>
                    <td>E</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="kids-profile.php">Mohamed Maher Mahfouz</a></td>
                    <td>E</td>
                    <td>N</td>
                    <td>G</td>
                    <td>V</td>
                    <td>V</td>
                    <td>G</td>
                    <td>E</td>
                    <td>N</td>
                    <td>G</td>
                    <td>E</td>
                </tr>
            </table>
        </div>
    </div>
<?php
    include_once $templates . 'footer.php';
?>