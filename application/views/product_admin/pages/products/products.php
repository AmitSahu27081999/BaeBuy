<nav class="navbar navbar-light bg-light mb-4">
    <span class="navbar-brand mb-0 h1">Products</span>
    <span class="mb-0"><a href="products_add" class="btn btn-success text-light">Add products</a></span>
</nav>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product_id</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Gender</th>
            <th scope="col">Category</th>
            <th scope="col" class="colspan-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($selected as $store) {
        ?>
            <tr>
                <td><?= $store->id; ?></td>
                <td><?= $store->product_id; ?></td>
                <td><?= $store->name; ?></td>
                <td><?= $store->brand; ?></td>
                <td><?= $store->price; ?></td>
                <td><?= $store->gender; ?></td>
                <td><?= $store->category; ?></td>
                <td>
                    <a href="<?= base_url("dashboard/slider_edit/$store->id"); ?>" class="btn btn-warning px-3">Edit </a>
                </td>
                <td>
                    <a href="<?= base_url("dashboard/slider_delete/$store->id"); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>