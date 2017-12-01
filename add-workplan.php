<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-workplan">
    <h2>Subject Name</h2>
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
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#firstwoctober" aria-expanded="true" aria-controls="firstw">
                                        First Week
                                    </a>
                                </h4>
                            </div>
                            <div id="firstwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="first">
                                <div class="panel-body">
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading" role="tab" id="second">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#secondwoctober" aria-expanded="false" aria-controls="secondw">
                                        Second Week
                                    </a>
                                </h4>
                            </div>
                            <div id="secondwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="second">
                                <div class="panel-body">
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading" role="tab" id="third">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#thirdwoctober" aria-expanded="false" aria-controls="thirdw">
                                        Third Week
                                    </a>
                                </h4>
                            </div>
                            <div id="thirdwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third">
                                <div class="panel-body">
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading" role="tab" id="fourth">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#subaccordion1" href="#fourthwoctober" aria-expanded="false" aria-controls="fourthw">
                                        Fourth Week
                                    </a>
                                </h4>
                            </div>
                            <div id="fourthwoctober" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth">
                                <div class="panel-body">
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
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
                                    <form>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th class="col-sm-2">Day</th>
                                                    <th class="col-sm-5">Lesson</th>
                                                    <th class="col-sm-5">Activity</th>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Saturday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sunday</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type lesson here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="type activity here...">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                                                <button type="submit" class="btn btn-success btn-block">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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