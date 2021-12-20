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
                <th>Short Description</th>
                <th>Full Description</th>
                <th>Manufacturer</th>
                <th colspan="4" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="<?= base_url("varients_add/$id"); ?>"class="btn btn-success px-3 mb-3">Add Varients</a>
            <?php
            foreach ($selected as $store) {
            ?>
                <tr>
                    <td><?= $store->id; ?></td>
                    <td><?= $store->size; ?></td>
                    <td><?= $store->color; ?></td>
                    <td><?= $store->price; ?></td>
                    <td><?= $store->stock; ?></td>
                    <td><?= $store->sdec; ?></td>
                    <td><?= $store->fdec; ?></td>
                    <td><?= $store->manu; ?></td>
                    <td>
                        <a href="<?= base_url("images/$store->id/$id"); ?>" class="btn btn-primary">Show Images</a>
                    </td>
                    <td>
                        <a href="<?= base_url("images_add/$store->id"); ?>" class="btn btn-danger">Add images</a>
                    </td>
                    <td>
                        <a href="<?= base_url("varient_edit/$id/$store->id"); ?>" class="btn btn-warning">Edit </a>
                    </td>
                    <td>
                        <a href="<?= base_url("varient_delete/$store->id/$id"); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>