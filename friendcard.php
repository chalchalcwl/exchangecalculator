<?php  include_once ("head.php")?>
<div class="p-3">
    <h1>Create Friend Card</h1>
    <form action="friendlogic.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="" class="form-label">Friend Name</label>
            <input type="text" name="fri_name" id="" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Phone</label>
            <input type="number" name="fri_phone" id="" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Address</label>
            <textarea rows="5" type="text" name="fri_add" id="" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Friend Name</label>
            <input type="file" name="fri_photo" accept="image/jpeg,image/png" id="" class="form-control" required>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="isreal" id="isreal" value="yes" class="form-check-label">
            <label for="isreal"  class="form-check-label">Real Friend</label>

        </div>
        <button class="btn btn-primary w-100">Create Friend List</button>
    </form>
</div>

<?php include_once ("footer.php") ?>
