<form class="justify-content-center text-center" action="<?= base_url("/change_pass"); ?>" method="POST">
    <div class="form-group text-center">
        <label for="exampleInputEmail1">Enter new Password</label>
        <input type="password" class="form-control w-25 mx-auto" name="new_pass" placeholder="Enter new Password">
    </div>
    <div class="form-group text-center">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control w-25 mx-auto" name="confirm_pass" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary ">Submit</button>
</form>