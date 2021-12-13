<form action="<?= base_url("/product_edit/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <div class="row">
        <?php foreach ($selected_edit as $edit) { ?>
            <div class="col-md-3 mb-3 mx-4">
                <label for="validationServer01">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $edit->name ?>">
            </div>
            <div class="col-md-3 mb-3 mx-4">
                <label for="validationServer02">Brand</label>
                <input type="text" class="form-control" name="brand" value="<?= $edit->brand ?>">
            </div>
            <div class="col-md-3 mb-3 mx-4">
                <label for="validationServer02">Category</label>
                <select class="form-control form-select" name="category">
                    <option><?= $edit->category ?></option>
                    <?php foreach ($selected_category as $show) { ?>
                        <option> <?= $show->category ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3 mb-3 mx-4">
                <div>
                    <label for="validationServer02 d-block">Gender</label>
                </div>
                <div class="form-check d-inline mr-2">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male">
                    <label class="form-check-label" for="gridRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                    <label class="form-check-label" for="gridRadios2">
                        Female
                    </label>
                </div>
                <div class="form-check d-inline ml-2">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="Unisex">
                    <label class="form-check-label" for="gridRadios3">
                        Unisex
                    </label>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="col-md-12 w-25 offset-8 btn btn-primary my-5 mx-4" type="submit">Submit</button>
</form>