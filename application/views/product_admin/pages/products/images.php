<div class="container">
    <nav class="navbar navbar-light bg-light mb-4">
        <span class="navbar-brand mb-0 h1">Images of Varient id = <?= $id ?></span>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th colspan="4" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="<?= base_url("images_add/$id"); ?>" class="btn btn-success px-3 mb-3">Add images</a>
            <a href="<?= base_url("varients/$product_id"); ?>" class="btn btn-primary px-3 mb-3 ml-5">Varients</a>
            <?php
            foreach ($selected_images as $store) {
            ?>
                <tr>
                    <td><?= $store->id; ?></td>
                    <td><?php if ($store->image) { ?>
                            <img src="<?= base_url('assets/uploads/') . $store->image; ?>" style="width: 70px;height: 70px;">
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?= base_url("image_edit/$id/$store->id"); ?>" class="btn btn-warning px-3">Edit </a>
                    </td>
                    <td>
                        <a href="<?= base_url("image_delete/$id/$store->id"); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>