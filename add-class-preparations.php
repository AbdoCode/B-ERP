<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-class-preparations add-forms">
    <h2>Weekly Preparations</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="class" class="col-xs-1 control-label">Class</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="class" placeholder="Class Name">
            </div>
        </div>
        <div class="form-group">
            <label for="teacher" class="col-xs-1 control-label">Teacher</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="teacher" placeholder="Teacher Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-1 control-label">Date</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select>
                    <option>week 1</option>
                    <option>week 2</option>
                    <option>week 3</option>
                    <option>week 4</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th class="col-sm-6 text-center">Items</th>
                    <th class="col-sm-6 text-center">Rate</th>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="type item" />
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control normalSelect">
                                <option disabled selected>Choose Rate</option>
                                <option value="10%">10%</option>
                                <option value="20%">20%</option>
                                <option value="30%">30%</option>
                                <option value="40%">40%</option>
                                <option value="50%">50%</option>
                                <option value="60%">60%</option>
                                <option value="70%">70%</option>
                                <option value="80%">80%</option>
                                <option value="90%">90%</option>
                                <option value="100%">100%</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="type item" />
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select class="form-control normalSelect">
                                <option disabled selected>Choose Rate</option>
                                <option value="10%">10%</option>
                                <option value="20%">20%</option>
                                <option value="30%">30%</option>
                                <option value="40%">40%</option>
                                <option value="50%">50%</option>
                                <option value="60%">60%</option>
                                <option value="70%">70%</option>
                                <option value="80%">80%</option>
                                <option value="90%">90%</option>
                                <option value="100%">100%</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form-group add-item-button-container">
            <div class="add-item-button">
                <button type="button" class="btn btn-primary btn-block">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Preparation
                </button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Add</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>