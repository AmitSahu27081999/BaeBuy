<form action="<?= base_url('/products_edit')?>" method="POST" enctype="multipart/form-data">
    <!-- <div class="col-md-4 mb-3">
        <label for="validationServer01">image</label>
        <input type="text" class="form-control" name="image">
    </div> -->
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Product Id</label>
        <input type="text" class="form-control" name="product_id">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Company Name</label>
        <input type="text" class="form-control" name="comp_name">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Price</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Size</label>
        <div class="form-group row mb-3">
            <div class="col-md-9">
                <div class="input_fields_wrap">
                    <div>
                        <div class="col-12 p-0 mb-2">
                            <input type="text" class="form-control" name="Size[]" placeholder="Enter size">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-success float-right add_field_button" style="margin-right: 30px; margin-top: 30px;">Add more size</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Gender</label>
        <input type="text" class="form-control" name="gender">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Category</label>
        <input type="text" class="form-control" name="category">
    </div>
    <!-- <div class="col-md-4 mb-3">
        <label for="validationServer02">Color</label>
        <input type="text" class="form-control" name="color">
    </div> -->

    <button class="btn btn-primary" type="submit">Update</button>
</form>