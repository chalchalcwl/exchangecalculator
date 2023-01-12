<?php  include_once "head.php";?>



<div class="p-3">
    <h1>Area Calc</h1>
    <?php include_once "server.php";?>
    <form  method="post">
        <div class="row">
            <div class="col">
                <input class="form-control" type="number" name="width" placeholder="width">
            </div>
            <div class="col">
                <input class="form-control" type="number" name="bread" placeholder="bread" required>
            </div>
            <div class="col">
                <button class="btn btn-primary" name="area_calc_form">Click</button>
            </div>

        </div>

    </form>
</div>


<?php  include_once "footer.php" ?>
