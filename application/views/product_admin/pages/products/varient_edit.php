<form action="<?= base_url("/varient_edit/$product_id/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <?php foreach ($select_varient_edit as $store) { ?>
        <div class="form-group mb-3">
            <div class="position-relative">
                <div class="multi-field-wrapper" style="margin: 0">
                    <div class="multi-fields">
                        <div class="row multi-field">
                            <div class="col-sm-2">
                                <label for>Size</label>
                                <input type="text" class="form-control form-control-alternative" name="size[]" value="<?= $store->size ?>">
                            </div>
                            <div class="col-sm-2">
                                <label for>Color</label>
                                <input type="text" class="form-control form-control-alternative" name="color[]" value="<?= $store->color ?>">
                            </div>
                            <div class="col-sm-2">
                                <label for>Price</label>
                                <input type="text" class="form-control form-control-alternative" name="price[]" value="<?= $store->price ?>">
                            </div>
                            <div class="col-sm-2">
                                <label for>Stock</label>
                                <input type="text" class="form-control form-control-alternative" name="stock[]" value="<?= $store->stock ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="col-md-12 w-25 btn btn-primary my-5" type="submit">Update</button>
        <a href="<?= base_url("images_add/$id"); ?>" class="btn btn-danger">Add images</a>
    <?php } ?>
</form>