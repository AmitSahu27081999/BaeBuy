<form action="<?= base_url("/category_update/$id") ?>" method="POST" enctype="multipart/form-data" class=" container">
    <div class="w-25">
        <label for="validationServer02">Category</label>
        <input type="text" class="form-control" name="category">
    </div>
    <button class="col-md-12 w-25 offset-8 btn btn-success my-5 mx-4" type="submit">Change</button>
</form>