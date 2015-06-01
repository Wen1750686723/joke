<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>笑话</title>
	<style>
	   .content{
	   	width: 700px;
	   	height: 200px;
	   	position: relative;
	   	margin:0 auto;
	   }
	   .img{
	   	width: 400px;
	   	height: 150px;
	   	display: block;
	   	margin:0 auto;
	   }
	   .left{
	   	left: 10px;
	   	top: 50%;
	   	width: 40px;
	   	height: 70px;
	   	display: block;
	   	background:no-repeat url(img/left.png) center center;
	   	position: absolute;
	   }
	    .right{
	   	right: 10px;
	   	top: 50%;
	   	width: 40px;
	   	height: 70px;
	   	background:no-repeat url(img/right.png) center center;
	   	display: block;
	   	position: absolute;
	   }
	   .content1{
	   	width: 400px;
	   	margin:0 auto;
	   	font-size: 18px;
	   	text-align: center;
	   	line-height: 20px;

	   }
	   .content2{
	   	width: 400px;
	   	margin:0 auto;
	   	text-align: center;
	   	font-size: 18px;
	   	line-height: 20px;
       }
        .content3{
	   	width: 400px;
	   	margin:0 auto;
	   	text-align: center;
	   	font-size: 18px;
	   	line-height: 20px;
       }
	</style>
</head>
<body>
<?php
if (empty($_GET["id"])) {
	$id=0;
}else{
	$id=$_GET["id"];
}
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("joke", $con);
$result1 = mysql_query("SELECT count(1) FROM joke_joke",$con);
$count=mysql_fetch_assoc($result1)["count(1)"];

$result = mysql_query("SELECT * FROM joke_joke limit $id,1",$con);
$row=mysql_fetch_array($result);
$id1=$id+1;
$id2=$id-1;
?>
<div class="content">
   <a href="index.php?id=<?php if ($id2<0) {
   	echo "0";
   }else{echo $id2;}  ?>" class="left"></a>
   <a href="index.php?id=<?php if ($id1==$count) {
   	 echo $id;
   }else{echo $id1;} ?>" class="right"></a>
   <img src="" alt="" class="img">
   <div class="content1"><?php echo $row["content1"] ?></div>
   <div class="content2"><?php echo $row["content2"] ?></div>
   <div class="content3"><?php echo $row["content3"] ?></div>
</div>

</body>
</html>