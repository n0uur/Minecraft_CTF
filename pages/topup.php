<?php

if(!isset($REMOTE_PAGING))
    die();

?>

<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-100 p-b-30" style="width: 1000px">
        <form class="login100-form validate-form" method="post">
            <span class="login100-form-title p-b-37">
                CTF-Craft<center><hr width="50%"></center>เติมเงิน
            </span>
            <div class="row">
                <div class="col-6">
                    <img align="center" src="images/default_skin.png">
                </div>
                <div class="col-6" style="text-align: left">
                    <h4>กรอกรหัสบัตรเติมเงิน :<h4>
                    <br>
                    <div class="wrap-input100 validate-input m-b-25" data-validate = "กรอกรหัสบัตรเติมเงิน">
                        <input class="input100" type="password" name="password" placeholder="รหัสบัตรเติมเงิน">
                        <span class="focus-input100"></span>
                    </div>
					<button class="btn btn-success" onclick="alert('รหัสบัตรเติมเงินไม่ถูกต้องหรือถูกใช้ไปแล้ว')">เติมเงิน</button>
					<hr>
                    <input class="btn btn-success" type="button" onClick="location.href='home.php?pages=./pages/home'" value='กลับหน้าหลัก'>
                </div>
            </div>
    </div>
</div>
