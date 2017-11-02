<?php
    session_start();
    $pageTitle = 'Bus Check In/Out';
    include 'init.php';
    include 'navbar.php';
?>
<div class="busPage">
    <h2>Bus Check In/Out</h2>
    <div class="container-for-btn-group">
        <ul class="btn-group" role="tablist">
            <li role="presentation" class="btn btn-primary active"><a href="#checkIn" role="tab" data-toggle="tab">Check In</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#checkOut" role="tab" data-toggle="tab">Check Out</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#map" role="tab" data-toggle="tab">Map</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="checkIn">
            <div class="info row text-center">
                <div class="col-sm-2 col-xs-4">
                    <label>Date</label><br/>
                    <span><?php echo date('d M Y'); ?></span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>Time</label><br/>
                    <span><?php echo date('h:m A'); ?></span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>No. kids</label><br/>
                    <span>20</span>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <label>Bus Number</label><br/>
                    <span>ب ض س - 561</span>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <label>Walk line</label><br/>
                    <span>المنيا الجديدة - المنيا</span>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-3">Kid Name</th>
                            <th class="col-sm-1">Bus Check In</th>
                            <th class="col-sm-1">Reception Check In</th>
                            <th class="col-sm-1">Pick up time</th>
                            <th class="col-sm-2">Bus Participation</th>
                            <th class="col-sm-3">Kid Address</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>08:25 AM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>08:25 AM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>08:25 AM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="checkOut">
            <div class="info row text-center">
                <div class="col-sm-2 col-xs-4">
                    <label>Date</label><br/>
                    <span><?php echo date('d M Y'); ?></span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>Time</label><br/>
                    <span><?php echo date('h:m A'); ?></span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>No. kids</label><br/>
                    <span>20</span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>Variation</label><br/>
                    <span>0</span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>Bus Number</label><br/>
                    <span>ب ض س - 561</span>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <label>Walk line</label><br/>
                    <span>المنيا الجديدة - المنيا</span>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-3">Kid Name</th>
                            <th class="col-sm-1">Bus Check Out</th>
                            <th class="col-sm-1">Reception Check Out</th>
                            <th class="col-sm-1">Arrive time</th>
                            <th class="col-sm-2">Bus Participation</th>
                            <th class="col-sm-3">Kid Address</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>01:25 PM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>01:25 PM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>01:25 PM</td>
                            <td>1 week left</td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="map">
            <div class="row">
                <div class="col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d110562.99952698125!2d31.176564889784622!3d30.00546477183886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x1458413be80d13b1%3A0xe500fb3f694fad32!2zT24gdGhlIFJ1biwg2LQg2KfZhNio2LfZhCDYp9it2YXYryDYudio2K8g2KfZhNi52LLZitiy2Iwg2KfZhNmF2YfZhtiv2LPZitmG2IwgR2l6YQ!3m2!1d30.053319799999997!2d31.206691799999998!4m5!1s0x14583864f3e1f397%3A0x6e492bfd4afd8ea0!2z2YXZitiv2KfZhiDYp9mE2KzYstin2KbYsQ!3m2!1d29.9744998!2d31.2763949!5e0!3m2!1sen!2seg!4v1509585344107"
                            width="100%"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>
