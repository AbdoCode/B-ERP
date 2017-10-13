<div class="add-activities">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title text-center">Add Activity</h2>
            <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-xs-1 control-label">Name</label>
                    <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">
                        <input type="text" class="form-control" id="name" placeholder="Activity name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-xs-1 control-label">Date</label>
                    <div class="col-sm-10  col-sm-push-1 col-xs-9 col-xs-push-2">
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="class" class="col-xs-1 control-label">Class</label>
                    <div class="col-sm-10  col-sm-push-1 col-xs-9 col-xs-push-2">
                        <select class="form-control" id="class">
                            <option disabled selected>Select your class</option>
                            <option>All</option>
                            <option>A</option>
                            <option>B</option>
                            <option>c</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photos" class="col-xs-1 control-label">Photos</label>
                    <div class="col-sm-10  col-sm-push-1 col-xs-9 col-xs-push-2">
                        <input multiple type="file" id="photos">
                    </div>
                </div>
                <div class="form-group">
                    <label for="details" class="col-xs-1 control-label">Details</label>
                    <div class="col-sm-10  col-sm-push-1 col-xs-9 col-xs-push-2">
                        <textarea class="form-control" id="details" placeholder="Details"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>