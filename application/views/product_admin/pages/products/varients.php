<div class="container">
    <nav class="navbar navbar-light bg-light mb-4">
        <span class="navbar-brand mb-0 h1">Varients of Product id = <?= $id ?></span>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price</th>
                <th>Stock</th>
                <th colspan="4" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="<?= base_url("varients_add/$id");?>" class="btn btn-success px-3 mb-3">Add Varients</a>
            <a href="<?= base_url("images/$id"); ?>" class="ml-5 btn btn-primary px-3 mb-3">Show Images</a>
            <a href="<?= base_url("images_add/$id");?>" class="ml-5 btn btn-danger px-3 mb-3">Add images</a>
            <?php
            foreach ($selected as $store) {
            ?>
                <tr>
                    <td><?= $store->id; ?></td>
                    <td><?= $store->size; ?></td>
                    <td><?= $store->color; ?></td>
                    <td><?= $store->price; ?></td>
                    <td><?= $store->stock; ?></td>
                    <td>
                        <a href="<?= base_url("varient_edit/$store->id"); ?>" class="btn btn-warning px-3">Edit </a>
                    </td>
                    <td>
                        <a href="<?= base_url("varient_delete/$store->id"); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>