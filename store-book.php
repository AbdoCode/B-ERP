<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="store-book">
    <h2>store book</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-3">Kid Name</th>
                    <th class="col-sm-1">Kid Items</th>
                    <th class="col-sm-7">Add or discharge Item</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td><a href="p-store-book.php" class="btn btn-primary btn-sm">View</a></td>
                <td>
                    <form>
                        <select>
                            <option value="item1">Item1</option>
                            <option value="item2">Item2</option>
                            <option value="item3">Item3</option>
                            <option value="item4">Item4</option>
                            <option value="item5">Item5</option>
                            <option value="item6">Item6</option>
                        </select>
                        <select class="number-of-item">
                            <option value="" disabled selected>Choose Number of item</option>
                            <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                        <button class="btn btn-sm btn-success add-number" type="button">Add</button>
                        <button class="btn btn-sm btn-danger discharge-number" type="button">Discharge</button>
                        <label class="badge output-number">1</label>
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td><a href="p-store-book.php" class="btn btn-primary btn-sm">View</a></td>
                <td>
                    <form>
                        <select>
                            <option value="item1">Item1</option>
                            <option value="item2">Item2</option>
                            <option value="item3">Item3</option>
                            <option value="item4">Item4</option>
                            <option value="item5">Item5</option>
                            <option value="item6">Item6</option>
                        </select>
                        <select class="number-of-item">
                            <option value="" disabled selected>Choose Number of item</option>
                            <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                        <button class="btn btn-sm btn-success add-number" type="button">Add</button>
                        <button class="btn btn-sm btn-danger discharge-number" type="button">Discharge</button>
                        <label class="badge output-number">1</label>
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td><a href="p-store-book.php" class="btn btn-primary btn-sm">View</a></td>
                <td>
                    <form>
                        <select>
                            <option value="item1">Item1</option>
                            <option value="item2">Item2</option>
                            <option value="item3">Item3</option>
                            <option value="item4">Item4</option>
                            <option value="item5">Item5</option>
                            <option value="item6">Item6</option>
                        </select>
                        <select class="number-of-item">
                            <option value="" disabled selected>Choose Number of item</option>
                            <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                        <button class="btn btn-sm btn-success add-number" type="button">Add</button>
                        <button class="btn btn-sm btn-danger discharge-number" type="button">Discharge</button>
                        <label class="badge output-number">1</label>
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td><a href="p-store-book.php" class="btn btn-primary btn-sm">View</a></td>
                <td>
                    <form>
                        <select>
                            <option value="item1">Item1</option>
                            <option value="item2">Item2</option>
                            <option value="item3">Item3</option>
                            <option value="item4">Item4</option>
                            <option value="item5">Item5</option>
                            <option value="item6">Item6</option>
                        </select>
                        <select class="number-of-item">
                            <option value="" disabled selected>Choose Number of item</option>
                            <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                        <button class="btn btn-sm btn-success add-number" type="button">Add</button>
                        <button class="btn btn-sm btn-danger discharge-number" type="button">Discharge</button>
                        <label class="badge output-number">1</label>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>