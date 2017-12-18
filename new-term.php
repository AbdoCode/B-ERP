<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="new-term add-forms">
    <h2>start new term</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="dateFrom" class="col-xs-2 control-label">Date From:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="date" class="form-control" id="dateFrom">
            </div>
        </div>
        <div class="form-group">
            <label for="dateTo" class="col-xs-2 control-label">Date To:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="date" class="form-control" id="dateTo">
            </div>
        </div>
        <div class="form-group">
            <label for="subject" class="col-xs-2 control-label">No. Subjects</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="number" class="form-control noSubjects" id="subject">
            </div>
        </div>
        <div class="subjectNames"></div>
        <div class="form-group">
            <label for="exam" class="col-xs-2 control-label">No. Exam per subject</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="number" class="form-control" id="exam">
            </div>
        </div>
        <div class="form-group">
            <label for="class" class="col-xs-2 control-label">No. Classes</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="number" class="form-control noClasses" id="class">
            </div>
        </div>
        <div class="classNames"></div>
        <div>
            <h3>Officially weekends</h3>
            <div class="container-for-btn-group">
                <button type="button" class="btn btn-primary add-weekend-day">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Day
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered  table-striped weekend-table">
                    <thead>
                        <tr>
                            <th class="col-sm-7">Name</th>
                            <th class="col-sm-5">Date</th>
                        </tr>
                    </thead>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h3>Prices</h3>
            <div class="table-responsive">
                <table class="table table-bordered  table-striped price-table">
                    <thead>
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-6">Name</th>
                            <th class="col-sm-5">Price</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Nursery Participation (First Term)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nursery Participation (Second Term)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nursery Participation (Summer Term)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Daily Hosting</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Weekly Hosting</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Monthly Participation For Nursery</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Discount In Case Brother Participation</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 100; $i += 1) {
                                        echo '<option value="'.$i.'%">'.$i.'%</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Monthly Bus Participation (Minya)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Monthly Bus Participation (New Minya)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Half Monthly Bus Participation (Minya)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Half Monthly Bus Participation (New Minya)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Monthly Bus Participation (One direction only)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Weekly Bus Participation</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 5000; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button class="btn btn-success btn-block">Start</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>