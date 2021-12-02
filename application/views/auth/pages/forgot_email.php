<div class="container mt-5">
    <form class=" justify-content-center" action="forgot_send_email_otp" method="post" enctype="multipart/form-data">
        <div class="form-group text-center">
            <label>Email OTP</label>
            <input type="email" class="form-control w-25 mx-auto" name="enteredemail" placeholder="Enter the registered email">
            <button type="submit" class="btn btn-primary text-center mx-auto mt-2">Send OTP</button>
        </div>
    </form>
    <form class="justify-content-center" action="forgot_check_email_otp" method="post" enctype="multipart/form-data">
        <div class="form-group text-center">
            <input type="password" class="form-control w-25 mx-auto" name="enteredotp" placeholder="Enter OTP">
            <button type="submit" class="btn btn-primary text-center mx-auto">Check OTP</button>
        </div>
    </form>
    <div class="mt-5 text-center">
        <a class="btn btn-success d-inline mx-auto" href="forgot_pass">Verify through mobile</a>
    </div>
</div>