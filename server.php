<?php //print_r($_POST) ;?>
<?php  if(isset($_POST['area_calc_form'])) : ?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Width</th>
        <th>Bread</th>
        <th>Area</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?= $_POST['width'] ?>ft</td>
        <td> <?= $_POST['bread'] ?>ft</td>
        <td> <?= Area($_POST['width'] , $_POST['bread']) ;?>sqft</td>

    </tr>
    </tbody>
</table>
<!--<a href="areacalc.php">Calculate again</a>-->
<?php endif; ?>