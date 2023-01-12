<?php
$apidata = file_get_contents('http://forex.cbm.gov.mm/api/latest');
$apidata = json_decode($apidata,true);
$rates = $apidata['rates'];
//print_r($rates);
//print_r($_POST);

if (isset($_POST["calc"])){
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];
//echo $amount;
//echo $rates[$from];
    $mmk = $amount * str_replace(",","",$rates[$from]) ;
    $result = $mmk /  str_replace(",","",$rates[$to]) ;
//    echo  $result;



?>

<div class="border-3 p-3 bg-light">
    <p class="mb-0 text-black-50">From <?=$amount ?> <?= $from?> to <?= $to?></p>
    <h1 class="fw-bold">
        <?= round($result,2) ?>
        <?= $to?>
    </h1>
</div>

<?php } ?>