<div class="container">
    <form class="mx-auto my-5" action="login" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="exampleInputEmail1 " class="form-label col-sm-3">Email address</label>
            <input type="email" class="form-control  w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="login_email" required>
        </div>
        <div class="mb-3 row">
            <label for="exampleInputPassword1" class="form-label col-sm-3">Password</label>
            <input type="password" class="form-control w-25" id="exampleInputPassword1" name="login_pass" required>
        </div>
        <button type="submit" class="btn btn-primary col-sm-3">LOGIN</button>
        <button type="button" class="btn btn-primary col-sm-3"><a href='register' class="text-light text-decoration-none anchor">REGISTER</a></button>
        <a href='forgot_pass' class="text-dark text-decoration-none anchor">Forgot Password?</a>
    </form>
</div>