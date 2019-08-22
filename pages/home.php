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
                    <h3>ชื่อตัวละคร : <b><?php echo $_SESSION['USERNAME']?></b></h3>
                    <p>เงินที่มี : 0 $</p>
                    <p>เงินโบนัส : 0 เหรียญ</p>
                    <input class="btn btn-success" type="button" onClick="location.href='home.php?pages=./pages/topup'" value='เติมเงิน'>
                    <button class="btn btn-success" onclick="alert('ยังไม่เปิดขาย')">เติม VIP</button>
                    <button class="btn btn-success" onclick="alert('ยังไม่เปิดขาย')">ซื้อขวานวิเศษ</button>
                    <p>โลกล่าสุด : ยังไม่เคยเข้าสู่เกม</p>
                    <p>สถานะ : บัญชีธรรมดา</p>
                    <p>เวลาออนไลน์ : 0 ชั่วโมง 0 นาที 0 วินาที</p>
                    <input class="btn btn-danger" type="button" onClick="location.href='./sessionmanager/logout.php'" value='ออกจากระบบ'>
                </div>
            </div>
    </div>
</div>
