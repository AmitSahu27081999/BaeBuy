<form class="row g-3" id="contactform" action="register" method="post" enctype="multipart/form-data">
    <div class="col-sm-12">
        <div class="col-md-6 mx-auto">
            <label for="inputUser4" class="form-label">Username</label>
            <input type="text" class="form-control" id="inputUser4" placeholder="Enter your Username" name="name" required>
        </div>
        <div class="col-md-6 mx-auto">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your Email" name="email" required>
        </div>
        <div class="col-md-6 mx-auto">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Your Password" name="password" required>
        </div>
        <div class="col-md-6 mx-auto">
            <label for="inputPhone" class="form-label">Phone number</label>
            <input type="number" class="form-control" id="inputPhone" placeholder="Enter you Phone Number" name="mobile" pattern="[1-9]{1}[0-9]{9}" required>
        </div>
        <div class="col-1 mx-auto">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>