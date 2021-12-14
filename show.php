<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>New News
</title>

<link href="stylec.css" rel="stylesheet" type="text/css"/>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>
<?php

//include database configuration

include 'sql/config.php';

//selecting records

$sql="select id, title, contain, image, modified from my
order by  id desc";
$sqlmanu="select * from catagori";


//query the database


$rsmanu=mysqli_query($conn,$sqlmanu) or die($sqlmanu.">>".mysqli_error($conn));


?>





<div class="Cover">
<div class="">
<div class="BannerAt">
<div class="BannerAt1">
<img src="image/Untitled-qq1.jpg"/>
</div>
<div class="BannerAt2">
<img src="image/kidz-top2.jpg"/>
</div>
<div class="BannerAt3">
<img src="image/chld-300x50.jpg"/>
</div>

</div>


<div class="mainmenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<?php
while($rsmanua=mysqli_fetch_array($rsmanu)){
extract($rsmanua);
?>
					<li><a href=" catagori.php?id= <?php echo $catagoriid; ?>"><?php echo $catagoriname; ?></a></li>
	<?php
}
?>				
					
					
					<li><a href="login/index.php">Login</a></li>
				</ul>
			</div>
	<div class="headline">
<div class="headline1">
Headline:
</div>
<div class="headline2">
<marquee direction="left">koushik</marquee>
</div>
</div>
<div class="mainmunuaa">
<div class="mainmunuaa1">
<?php

if(isset($_REQUEST['id'])){
include('sql/config.php');
$id=$_REQUEST['id'];
$query=mysqli_query($conn,"select * from my where id='$id'") or die(mysqli_error($conn));
$num=mysqli_num_rows($query);
if($num>0){



?>

<?php

while($row=mysqli_fetch_assoc($query)){

extract($row);


if($image != null) {
?>

<div class="lin"><h2><a href="show.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h2></div>
<div class="time"><?php echo $modified; ?></div><br/>

<div class="lina">

<img src="deskboard/image/<?php echo $image?>"/></div>
<div class="line"><p><?php echo $contain; ?></p><br/></div>
<?php
}
else {
?>
<div class="lin"><h2><a href="show.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h2></div>
<div class="time"><?php echo $modified; ?></div><br/>
<div class="line"><p><?php echo $contain; ?></p><br/></div>
<?php
}
}
}else{

echo "<div>User with this id is not found.</div>";

}

}

else{

echo "<div> You are not authorized to view this page</div>";

}

echo "<a href='index.php'>Back To Home</a>";

?>

	
	

</div>
<div class="mainmunuaa2">
<div class="textwidget">
<div>
<img src="image/airtel-bn.png" />
</div>
<div>
<img src="image/ee3f7e0087919cf4e50800c03523b6d4.gif" />
</div>



</div>
</div>
</div>

<div class="footer">




</div>


</div>
</div>
</body>
</html>
