<form action="<?= base_url("/image_edit/$product_id/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <div class="form-group mb-3">
        <div class="position-relative">
            <div class="multi-field-wrapper" style="margin: 0">
                <div class="multi-fields">
                    <div class="row multi-field">
                        <div class="col-sm-3">
                            <label for>Logo</label>
                            <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control-file" name="image[]" multiple>
                            <!-- <img id="output_image"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="col-md-12 w-25 btn btn-primary my-5" type="submit">Submit</button>
</form>