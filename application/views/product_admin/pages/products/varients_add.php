<form action="<?= base_url("/varients_add/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <div class="form-group mb-3">
        <div class="position-relative">
            <div class="multi-field-wrapper" style="margin: 0">
                <div class="multi-fields">
                    <div class="row multi-field">
                        <div class="col-sm-2">
                            <label for>Size</label>
                            <input type="text" class="form-control form-control-alternative" name="size[]">
                        </div>
                        <div class="col-sm-2">
                            <label for>Color</label>
                            <input type="text" class="form-control form-control-alternative" name="color[]">
                        </div>
                        <div class="col-sm-2">
                            <label for>Price</label>
                            <input type="text" class="form-control form-control-alternative" name="price[]">
                        </div>
                        <div class="col-sm-2">
                            <label for>Stock</label>
                            <input type="text" class="form-control form-control-alternative" name="stock[]">
                        </div>
                        <div class="col-sm-2 remove-field">
                            <button type="button" class="btn btn-danger mt-4">-</button>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success add-field" style="position: absolute;right: 20px;">+</button>
            </div>
        </div>
    </div>
    <button class="col-md-12 w-25 btn btn-primary my-5" type="submit">Submit</button>
    <a href="<?= base_url("images_add/$id"); ?>" class="btn btn-danger">Add images</a>
</form>