<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="zone-prices add-forms">
    <h2>zone prices</h2>
    <form class="form-horizontal">
        <div>
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
                        <td>Bronze (25 Hours)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Silver (50 Hours)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Gold (70 Hours)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Diamond (120 Hours)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Coworking Space (24 Hours)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Meetings (1 Hour)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Meetings & Television (1 Hour)</td>
                        <td>
                            <select>
                                <?php
                                    for ($i = 0; $i <= 500; $i += 5) {
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
                <button class="btn btn-success btn-block">Done</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>