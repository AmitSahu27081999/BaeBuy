<nav class="navbar navbar-light bg-light mb-4">
    <span class="navbar-brand mb-0 h1">Categories</span>
    <span class="mb-0"><a href="category_add" class="btn btn-success text-light">Add category</a></span>
</nav>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category</th>
            <th scope="col" class="colspan-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($selected_category as $store) {
        ?>
            <tr>
                <td><?= $store->id; ?></td>
                <td><?= $store->category; ?></td>
                <td>
                    <a href="<?= base_url("dashcontroller/category_update/$store->id"); ?>" class="btn btn-warning px-3">Edit </a>
                </td>
                <td>
                    <a href="<?= base_url("dashcontroller/category_delete/$store->id"); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>