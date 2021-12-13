<nav class="navbar navbar-light bg-light mb-4">
    <span class="navbar-brand mb-0 h1">Products</span>
    <span class="mb-0"><a href="products_add" class="btn btn-success text-light">Add products</a></span>
</nav>
<table class="table">
    <thead>
        <tr>
            <th >Id</th>
            <th >Name</th>
            <th >Brand</th>
            <th >Gender</th>
            <th>Category</th>
            <th colspan="4" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($selected as $store) {
        ?>
            <tr>
                <td><?= $store->id; ?></td>
                <!-- <td><?php if ($store->logo) { ?>
                            <img src="<?= base_url('assets/uploads/') . $store->logo; ?>" style="width: 70px;height: 70px;">
                        <?php } ?></td> -->
                <td><?= $store->name; ?></td>
                <td><?= $store->brand; ?></td>
                <td><?= $store->gender; ?></td>
                <td><?= $store->category; ?></td>
                <td>
                    <a href="<?= base_url("varients/$store->id"); ?>" class="btn btn-success px-3">Show Varients </a>
                </td>
                <td>
                    <a href="<?= base_url("varients_add/$store->id"); ?>" class="btn btn-success px-3">Add Varients </a>
                </td>
                <td>
                    <a href="<?= base_url("product_edit/$store->id"); ?>" class="btn btn-warning px-3">Update </a>
                </td>
                <td>
                    <a href="<?= base_url("product_delete/$store->id"); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>