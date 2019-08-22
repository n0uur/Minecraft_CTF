<?php

if(!isset($REMOTE_PAGING))
    die();

?>

<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-100 p-b-30" style="width: 1000px">
        <form class="login100-form validate-form" method="post">
            <span class="login100-form-title p-b-37">
                CTF-Craft<center><hr width="50%"></center>จัดการตัวละคร
            </span>
            <div class="row">
                <div class="col-6">
                    <img align="center" src="images/default_skin.png">
                </div>
                <div class="col-6" style="text-align: left">
                    <h3>ชื่อตัวละคร : <b><?php echo $_SESSION['ADMIN_USERNAME']?></b></h3>
                    <p>สถานะ :  <?php
					if($USER_DATA['permission'] >= 20) echo "แอดมิน"; else echo "ผู้เล่นธรรมดา";?></p>
                    <p>ผู้เล่นออนไลน์ :  RCON_ERROR_NO_CONNECTION_TO_MINECRAFT_SERVER</p>
                    <p>จำนวน ID ในระบบ :  $usercount</p>
                    <input class="btn btn-warning" type="button" onClick="location.href='home.php?pages=./pages/config'" value='ตั้งค่าระบบ'>
                    <input class="btn btn-warning" type="button" onClick="location.href='home.php?pages=./pages/console'" value='คอนโซลเซิร์ฟเวอร์'>
                    <input class="btn btn-danger" type="button" onClick="location.href='./sessionmanager/logout.php'" value='ออกจากระบบ'>
                </div>
            </div>
    </div>
</div>
