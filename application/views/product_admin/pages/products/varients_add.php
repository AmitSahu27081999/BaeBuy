<form action="<?= base_url("/varients_add/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <div class="form-group mb-3">
        <div class="position-relative">
            <div class="multi-field-wrapper" style="margin: 0">
                <div class="multi-fields">
                    <div class="row multi-field">
                        <div class="col-sm-2">
                            <label for>Size</label>
                            <select class="form-control chosen-select" name="size[]" multiple>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for>Color</label>
                            <input type="text" class="form-control form-control-alternative" name="color">
                        </div>
                        <div class="col-sm-2">
                            <label for>Price</label>
                            <input type="text" class="form-control form-control-alternative" name="price">
                        </div>
                        <div class="col-sm-2">
                            <label for>Stock</label>
                            <input type="text" class="form-control form-control-alternative" name="stock">
                        </div>
                        <div class="col-sm-10">
                            <label for>Short Description</label>
                            <textarea type="text" class="form-control form-control-alternative" name="sdec">
                            </textarea>
                        </div>
                        <div class="col-sm-10">
                            <label for>Full Descripton</label>
                            <textarea type="text" class="form-control form-control-alternative" name="fdec">
                        </textarea>
                        </div>
                        <div class="col-sm-10">
                            <label for>Manufacturer</label>
                            <textarea type="text" class="form-control form-control-alternative" name="manu">
                        </textarea>
                        </div>
                        <!-- <div class="col-sm-2 remove-field">
                            <button type="button" class="btn btn-danger mt-4">-</button>
                        </div> -->
                    </div>
                </div>
                <!-- <button type="button" class="btn btn-success add-field" style="position: absolute;right: 20px;">+</button> -->
            </div>
        </div>
    </div>
    <button class="col-md-12 w-25 btn btn-primary my-5" type="submit">Submit</button>
</form>