<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-reception-logistics">
    <h2>Add Reception Logistics</h2>
    <form>
        <div class="container-for-btn-group">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Item
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <select>
                    <option disabled selected value="">Receptionist</option>
                    <option value="">Mohamed</option>
                    <option>Ahmed</option>
                    <option>Ali</option>
                </select>
            </div>
            <div class="col-sm-6">
                <select>
                    <option disabled selected value="">Operation Manager</option>
                    <option value="">Mohamed</option>
                    <option>Ahmed</option>
                    <option>Ali</option>
                </select>
            </div>
        </div>
        <button type="submit" class="col-sm-4 col-sm-push-4 col-xs-12 btn btn-primary">Add</button>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>