<?php
	require_once("functions.php");
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$bank_account = $_POST["bank_account"];
	$bank_name = $_POST["bank_name"];
	$img_sf_1 = $_POST["img_sf_1"];
	$img_sf_2 = $_POST["img_sf_2"];
	$img_yh_1 = $_POST["img_yh_1"];
	$img_yh_2 = $_POST["img_yh_2"];
	$array_img = array($img_sf_1, $img_sf_2, $img_yh_1, $img_yh_2);
	$array_content = array($name, "用户姓名：".$name."<br/>用户电话：".$phone."<br/>用户住址：".$address."<br/>银行账户：".$bank_account."<br/>银行名称：".$bank_name);
	$flag = sendMail($array_img,$array_content);
	$flag = TRUE;
	if($flag){
	    $data['result'] = "发送邮件成功！";
	}else{
	    $data['result'] = "发送邮件失败！";
	}
	echo json_encode($data);
?>