<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增留言</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<?php
mysql_connect("localhost","ss203242430","ss123452123");//連結伺服器
mysql_select_db("guest");//選擇資料庫
mysql_query("set names utf8");//以utf8讀取資料

$guestName=$_POST['guestName'];
$guestEmail=$_POST['guestEmail'];
$guestGender=$_POST['guestGender'];
$guestSubject=$_POST['guestSubject'];
$guestContent=$_POST['guestContent'];
date_default_timezone_set('Asia/Taipei');
$guestTime = date("Y:m:d H:i:s",time()+28800);

if(isset($guestName)){
	mysql_query("INSERT INTO `guest` value('','$guestName','$guestEmail','$guestGender','$guestSubject','$guestTime','$guestContent','','')");
	header("location:guestText");
}
?>
</head>
<style>
 .container{
  margin:auto;
  background-color:#f5f5f5;
  width:800px;
  padding-bottom: 20px;
 }
 .button{
  text-align:center;
  padding:20px 0;
 }
 .top h3{
  font-family:微軟正黑體;
  text-align:center;
  padding:10px 0;
 }
 .form-group{
  font-family:微軟正黑體;
  font-size:16px;
 }
</style>
<body>
<div class="container">
 <div class="top">
    <h3>新增留言</h3>
    </div>
    <form id="form1" name="form1" method="post" action="" class="form-horizontal">
        <div class="form-group">
            <label for="guestName" class="col-sm-4 control-label">暱稱：</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="您的暱稱" name="guestName" id="guestName" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestEmail" class="col-sm-4 control-label">信箱：</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="您的信箱" name="guestEmail" id="guestEmail" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestGender" class="col-sm-4 control-label">性別：</label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio" value="男" /> 男
            </label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio2" value="女" />女
            </label>
        </div>
        <div class="form-group">
            <label for="guestSubject" class="col-sm-4 control-label">留言主旨：</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="guestSubject" id="guestSubject" />
            </div>
        </div>
        <div class="form-group">
          <label for="guestContent" class="col-sm-4 control-label">留言內容：</label>
          <div class="col-sm-6">
              <textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
          </div>
        </div>
        <div class="button">
            <input type="submit" name="button" id="button" value="送出" class="btn"/>
        </div>
    </form>
    
</div>
</body>
</html>