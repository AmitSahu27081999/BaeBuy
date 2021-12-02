<div class="container mt-5">
    <form class=" justify-content-center" action="check_mobile_otp" method="post" enctype="multipart/form-data">
        <div class="form-group text-center">
            <label for="exampleInputEmail1">Mobile OTP</label>
            <small id="emailHelp" class="form-text text-muted"><a href="send_mobile_otp">Send OTP</a></small>
            <input type="password" class="form-control w-25 mx-auto" name="enteredotp" aria-describedby="emailHelp" placeholder="Enter OTP">
            <button type="submit" class="btn btn-primary text-center mx-auto">Check OTP</button>
        </div>
    </form>


    <form class=" justify-content-center" action="check_email_otp" method="post" enctype="multipart/form-data">
        <div class="form-group text-center">
            <label for="exampleInputPassword1">Email OTP</label>
            <small id="emailHelp" class="form-text text-muted"><a href="send_email_otp">Send OTP</a></small>
            <input type="password" class="form-control w-25 mx-auto" name="enteredotp" placeholder="Enter OTP">
            <button type="submit" class="btn btn-primary text-center mx-auto">Check OTP</button>
        </div>
    </form>
    <div class="mt-5">
        <a class="btn btn-success d-inline mx-auto" href="completeverify">Confirm</a>
    </div>
</div>