<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>

<div class="subject">
    <h2>English</h2>
    <select>
        <option selected disabled>Choose Class</option>
        <option>A</option>
        <option>B</option>
        <option>X</option>
        <option>D</option>
    </select>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th class="col-sm-5">Objective</th>
                <th class="col-sm-7">Work Plan</th>
            </tr>
            <tr>
                <td>
                    <div class="btn-group">
                        <a href="add-objectives.php" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Objective
                        </a>
                    </div>
                    <div class="workplan">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="october">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#octoberm" aria-expanded="true" aria-controls="octoberm">
                                            October 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="octoberm" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="october">
                                    <div class="panel-body">
                                        <div class="panel-group" id="subaccordion1" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#firstwoctober" aria-expanded="true">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="firstwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#secondwoctober" aria-expanded="false">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="secondwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#thirdwoctober" aria-expanded="false">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="thirdwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#fourthwoctober" aria-expanded="false">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="fourthwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="november">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#novemberm" aria-expanded="false" aria-controls="novemberm">
                                            November 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="novemberm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="november">
                                    <div class="panel-body">
                                        <div class="panel-group" id="subaccordion2" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#subaccordion2" href="#firstwnovember" aria-expanded="true" aria-controls="firstw">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="firstwnovember" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion2" href="#secondwnovember" aria-expanded="false" aria-controls="secondw">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="secondwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion2" href="#thirdwnovember" aria-expanded="false" aria-controls="thirdw">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="thirdwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion2" href="#fourthwnovember" aria-expanded="false" aria-controls="fourthw">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="fourthwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="december">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#decemberm" aria-expanded="false" aria-controls="decemberm">
                                            December 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="decemberm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="december">
                                    <div class="panel-body">
                                        <div class="panel-group" id="subaccordion3" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#subaccordion3" href="#firstwdecember" aria-expanded="true" aria-controls="firstw">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="firstwdecember" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion3" href="#secondwdecember" aria-expanded="false" aria-controls="secondw">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="secondwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion3" href="#thirdwdecember" aria-expanded="false" aria-controls="thirdw">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="thirdwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion3" href="#fourthwdecember" aria-expanded="false" aria-controls="fourthw">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="fourthwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th class="col-sm-1">#</th>
                                                                    <th class="col-sm-11">Objectives</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>First Objective</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Second Objective</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="btn-group">
                        <a href="add-workplan.php" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Work plan
                        </a>
                    </div>
                    <div class="workplan">
                        <div class="panel-group" id="accordionWork" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="october">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordionWork" href="#accordionWorkoctobermp" aria-expanded="true">
                                            October 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionWorkoctobermp" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="october">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordionWorkoctoberm" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkoctoberm" href="#accordionWorkfirstwoctober" aria-expanded="true">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfirstwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkoctoberm" href="#accordionWorksecondwoctober" aria-expanded="false">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorksecondwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkoctoberm" href="#accordionWorkthirdwoctober" aria-expanded="false">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkthirdwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkoctoberm" href="#accordionWorkfourthwoctober" aria-expanded="false">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfourthwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="november">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWork" href="#accordionWorknovembermp" aria-expanded="false">
                                            November 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionWorknovembermp" class="panel-collapse collapse" role="tabpanel" aria-labelledby="november">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordionWorknovemberm" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionWorknovemberm" href="#accordionWorkfirstwnovember" aria-expanded="true">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfirstwnovember" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorknovemberm" href="#accordionWorksecondwnovember" aria-expanded="false">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorksecondwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorknovemberm" href="#accordionWorkthirdwnovember" aria-expanded="false">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkthirdwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorknovemberm" href="#accordionWorkfourthwnovember" aria-expanded="false">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfourthwnovember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordionWorkdecember">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWork" href="#accordionWorkdecembermp" aria-expanded="false">
                                            December 2017
                                        </a>
                                    </h4>
                                </div>
                                <div id="accordionWorkdecembermp" class="panel-collapse collapse" role="tabpanel" aria-labelledby="december">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordionWorkdecemberm" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="first">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionWorkdecemberm" href="#accordionWorkfirstwdecember" aria-expanded="true">
                                                            First Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfirstwdecember" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="first">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="second">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkdecemberm" href="#accordionWorksecondwdecember" aria-expanded="false">
                                                            Second Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorksecondwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="third">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkdecemberm" href="#accordionWorkthirdwdecember" aria-expanded="false">
                                                            Third Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkthirdwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" role="tab" id="fourth">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionWorkdecemberm" href="#accordionWorkfourthwdecember" aria-expanded="false">
                                                            Fourth Week
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="accordionWorkfourthwdecember" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th class="col-sm-2">Day</th>
                                                                    <th class="col-sm-4">Lesson</th>
                                                                    <th class="col-sm-4">Activity</th>
                                                                    <th class="col-sm-2">Status</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saturday</td>
                                                                    <td>Lesson name</td>
                                                                    <td>Activity name</td>
                                                                    <td>
                                                                        <select>
                                                                            <option disabled selected value="">select status</option>
                                                                            <option value="completed">Completed</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="inprogress">In progress</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>