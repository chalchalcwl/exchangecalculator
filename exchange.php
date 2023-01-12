<?php  include_once ("head.php")?>
<div class="p-1">
    <h1>Exchanged Calc</h1>
    <?php
    include 'exlogic.php';
    ?>
</div>
<form id="exform" method="POST"></form>

<div class="row g-3">
    <div class="col-12">
        <label  class="form-label" for="">Amount</label>
        <input class="form-control" type="number" name="amount" form="exform"  required>
    </div>
       <div class="col-6">
           <label class="form-label">From Currency</label>
           <select name="from" id="" form="exform" class="form-select" required>
               <option value="">Choice</option>
               <?php foreach ($rates as $key =>$value): ?>
                   <option value="<?= $key?>">
                     <?= $key ?>
                   </option>
               <?php endforeach ; ?>

           </select>
       </div>
    <div class="col-6">
        <label class="form-label">To Currency</label>
        <select name="to" id="" form="exform" class="form-select" required>
            <option value="">Choice</option>
            <?php foreach ($rates as $key=> $value) :  ?>
                <option value="<?= $key?>">
                    <?= $key ?>
                </option>
            <?php endforeach ; ?>

        </select>
    </div>
    <div class="col-12 mt-3">
        <button name="calc" form="exform" class="btn btn-primary w-50 btn-lg">Continue</button>
    </div>
</div>
<?php  include_once ("footer.php") ?>
