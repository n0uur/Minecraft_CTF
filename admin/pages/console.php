<?php

if(!isset($REMOTE_PAGING))
    die();

?>

<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-100 p-b-30" style="width: 1000px">
        <form class="login100-form validate-form" method="post">
            <span class="login100-form-title p-b-37">
                CTF-Craft<center><hr width="50%"></center>Server's Logs<h6>Last Update : a few seconds ago..</h6>
            </span>
            <div class="row">
                <iframe src="connect_console.php" width="100%" height="400px" frameborder="0" bgcolor="gray">
				</iframe>
            </div>
			<hr>
			<input class="btn btn-success" type="button" onClick="location.href='home.php?pages=./pages/home'" value='กลับหน้าหลัก'>
    </div>
</div>