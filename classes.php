<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="classes">
    <h2>Class Name</h2>
    <div class="container-for-btn-group">
        <ul class="btn-group" role="tablist">
            <li role="presentation" class="btn btn-primary active"><a href="#kidsData" role="tab" data-toggle="tab">Kids Data</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#classTable" role="tab" data-toggle="tab">Class Table</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#kidsGrade" role="tab" data-toggle="tab">Kids Grade</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#workPlan" role="tab" data-toggle="tab">Work Plan</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#kidsAttendance" role="tab" data-toggle="tab">Kids Attendance</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#preparations" role="tab" data-toggle="tab">Preparations</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#teachers" role="tab" data-toggle="tab">Teachers</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="kidsData">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-3">Name</th>
                        <th class="col-sm-1">Age</th>
                        <th class="col-sm-2">Attendance Rate <br/>(14 Sep 2017 - 20 Nov 2017)</th>
                        <th class="col-sm-2">Bus</th>
                        <th class="col-sm-1">Matarials</th>
                        <th class="col-sm-1">Performance sheet</th>
                        <th class="col-sm-1">Issue</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="kids-profile.php">Mohamed Maher Mahfouz</a></td>
                        <td>22</td>
                        <td>20.3%</td>
                        <td>Not Participant</td>
                        <td>16/50</td>
                        <td><a href="performance-sheet-kids.php" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>22</td>
                        <td>20.3%</td>
                        <td>Not Participant</td>
                        <td>16/50</td>
                        <td><a href="performance-sheet-kids.php" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="classTable">
            <div class="container-for-btn-group">
                <a href="add-class-table.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Class Table
                </a>
                <a href="add-class-table.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Class Table
                </a>
                <a href="view-class-table.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View last Tables
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr class="info">
                        <th class="col-sm-2">Day</th>
                        <th class="col-sm-2">7-9</th>
                        <th class="col-sm-2">9-11</th>
                        <th class="col-sm-2">11-1</th>
                        <th class="col-sm-2">1-3</th>
                        <th class="col-sm-2">3-5</th>
                    </tr>
                    <tr>
                        <td class="info">Saturday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="info">Sunday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="info">Monday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="info">Tuesday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="info">Wednesday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="info">Thursday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="kidsGrade">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="workPlan">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Teacher name/term..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-4">Teacher name</th>
                        <th class="col-sm-2">Subject</th>
                        <th class="col-sm-2">Term</th>
                        <th class="col-sm-2">Completion rate</th>
                        <th class="col-sm-1">Details</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>English</td>
                        <td>Fall 2017</td>
                        <td>20.3%</td>
                        <td><a href="view-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>Arabic</td>
                        <td>Fall 2017</td>
                        <td>20.3%</td>
                        <td><a href="view-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="kidsAttendance">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name/attendance rate..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-4">Name</th>
                        <th class="col-sm-3">Attendance (<?php echo date('d M Y'); ?>)</th>
                        <th class="col-sm-3">Attendance Rate</th>
                        <th class="col-sm-1">Term</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>Absence</td>
                        <td>20.3%</td>
                        <td>Fall 2017</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>Presence</td>
                        <td>20.3%</td>
                        <td>Fall 2017</td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane preparations" id="preparations">
            <div class="container-for-btn-group">
                <a href="add-class-preparations.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Preparations
                </a>
            </div>
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Teacher name..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-2">Teacher name</th>
                        <th class="col-sm-6">Preparations check</th>
                        <th class="col-sm-1">Rate</th>
                        <th class="col-sm-2">Week</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>
                            <form>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Air condition</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Books</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Books</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Books</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Pens</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                            </form>
                        </td>
                        <td>20.3%</td>
                        <td>10 / 16 Sep 2017</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>
                            <form>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Air condition</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Books</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Pens</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                                <div class="preparations-check">
                                    <label for="" class="control-label">Board</label>
                                    <input type="checkbox" class="form-control" id="">
                                </div>
                            </form>
                        </td>
                        <td>20.3%</td>
                        <td>10 / 16 Sep 2017</td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="teachers">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Teacher name/term..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-5">Name</th>
                        <th class="col-sm-2">Term</th>
                        <th class="col-sm-2">Attendance rate</th>
                        <th class="col-sm-2">Performance sheet</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="profile.php">Mohamed Maher Mahfouz</a></td>
                        <td>Fall 2017</td>
                        <td>20.3%</td>
                        <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>Fall 2017</td>
                        <td>20.3%</td>
                        <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mohamed Maher Mahfouz</td>
                        <td>Fall 2017</td>
                        <td>20.3%</td>
                        <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>