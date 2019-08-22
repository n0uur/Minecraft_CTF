<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// include("../database.php");

// if(isset($_POST) && isset($_POST['submit']))
// {
// 	$sql ='SELECT * from userdata where USERNAME="'.$_POST["username"].'";';
// 	$ret = $database->query($sql);
// 	while($row = $ret->fetchArray(SQLITE3_ASSOC) )
// 	{
//     	$id = $row['id'];
//     	$username = $row["username"];
//     	$password = $row['password'];
// 	}
// 	if ($id!=""){
// 		if ($password == $_POST["password"])
// 		{
// 			$_SESSION["USERNAME"] = $username;
// 			header('Location: home.php');
// 		}
// 		else
// 		{
// 			header('Location: index.php?msg=รหัสผ่านผิด');
// 		}
// 	}
// 	else
// 	{
// 		header('Location: index.php?msg=ไม่พบบัญชีนี้ในระบบ');
// 	}
// }
// else
// 	header( "location: ../index.php" );

?>