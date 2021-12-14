<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>New News </title>

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

$sql="select  id, title, contain, image, modified from my order by id desc LIMIT 5";
$sqlmanu="select * from catagori"; 
$sqla="SELECT *
FROM my
LEFT JOIN reala ON my.title = reala.realtitle LEFT JOIN catagori ON reala.cid=catagori.catagoriid
WHERE reala.cid =catagori.catagoriid   order by  my.id desc";

//query the database

$rs=mysqli_query($conn,$sqla) or die($sqla.">>".mysqli_error($conn));
$rsslide=mysqli_query($conn,$sql) or die($sql.">>".mysqli_error($conn));
$rshead=mysqli_query($conn,$sql) or die($sql.">>".mysqli_error($conn));
$rsslidea=mysqli_query($conn,$sql) or die($sql.">>".mysqli_error($conn));
$rsmanu=mysqli_query($conn,$sqlmanu) or die($sqlmanu.">>".mysqli_error($conn));
$rscategoric=mysqli_query($conn,$sqlmanu) or die($sqlmanu.">>".mysqli_error($conn));


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
					<li><a href=" catagori.php?id= <?php echo $catagoriid; ?> "><?php echo $catagoriname; ?></a></li>
	<?php
} 
?>				
					
					
					<li><a href="login/index.php">Login</a></li>
				</ul>
			</div>

<div id="wowslider-container1">
	<div class="ws_images"><ul>
	
<?php
while($rowslide=mysqli_fetch_array($rsslide)){
extract($rowslide);
?>
<?php
if(!empty($image)){
?>	
	
<li>

<img src="deskboard/image/<?php echo $image?>" width= "800px" 	height="401px" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" id="wows1_0"/><?php echo $contain; ?>

</li>
<?php
}else{

?>
<li>

<img src="deskboard/image/imageNotFound.jpg" width= "800px" 	height="401px" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" id="wows1_0"/><?php echo $contain; ?>

</li>



<?php
}
}
?>
</ul></div>
<div class="ws_bullets"><div>
<?php
while($rowslidea=mysqli_fetch_array($rsslidea)){
extract($rowslidea);
?>
<a href="#" title="<?php echo $title; ?>">1</a>
<?php
}
?>
</div></div>
<span class="wsl"><a href="http://wowslider.com">css slider</a> by WOWSlider.com v5.3</span>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<div class="headline">
<div class="headline1">
Headline:
</div>
<div class="headline2">
<marquee direction="left">
<?php
while($rowhead=mysqli_fetch_array($rshead)){
extract($rowhead);
?>
<?php echo $title." | "; ?>


<?php
}
?>

</marquee>
</div>
</div>
<div class="mainmunuaa">
<div class="mainmunuaa1">

<?php

//retrieve our table contents

while($rowc=mysqli_fetch_array($rscategoric)){

extract($rowc);

//creating new table row per record

?>

	<div class="catagori">
	
		<div class="catagori11">
			<div class="catagoriname"><p><a href="catagori.php?id= <?php echo $catagoriid; ?>"><?php echo $catagoriname; ?></a></p></div>
			<?php

//include database configuration

include 'sql/config.php';

//selecting records
			$sqlone="SELECT *
FROM my
LEFT JOIN reala ON my.title = reala.realtitle LEFT JOIN catagori ON reala.cid=catagori.catagoriid
WHERE reala.cid ='$catagoriid'  order by  my.id desc";
$sqlonea="SELECT *
FROM my
LEFT JOIN reala ON my.title = reala.realtitle LEFT JOIN catagori ON reala.cid=catagori.catagoriid
WHERE reala.cid ='$catagoriid' order by  my.id desc limit 3";

	$rsone=mysqli_query($conn,$sqlone) or die($sqlone.">>".mysqli_error($conn));
	$rsonea=mysqli_query($conn,$sqlonea) or die($sqlonea.">>".mysqli_error($conn));
	
$rowone=mysqli_fetch_array($rsone);
extract($rowone);
?>		
			
			
			<div class="catagori1" ><b><a href="show.php?id= <?php echo $id; ?>"><?php echo $title; ?></a></b></div>
			<div class="catagori2" style="background:#fff;width:180px;float:left;height: 105px;
overflow:hidden;font-size:14px;"><?php echo $contain; ?></div>
			<div class="catagori3">	<img src="deskboard/image/<?php echo $image?>" style="width:150px;padding:5px;height: 97px;"/>		</div>
			
			
			
		</div>
		<?php
		while($rowonea=mysqli_fetch_array($rsonea)){
		extract($rowonea);
		?>
		
		
		<div class="catagoria"><b><a href="show.php?id= <?php echo $id; ?>"><?php echo $title; ?></a></b></div>	
			<?php } ?>
	</div>
	
	<?php
}

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
