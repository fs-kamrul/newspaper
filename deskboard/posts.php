<!DOCTYPE html>
<html lang="bn">
	<head>
            <meta charset="utf-8">
		<title>symbianft</title>
		<link rel="shortcut icon" href="style/image/logo.jpg" type="image/x-icon" />
		<link href="style/posts.css" rel="stylesheet" type="text/css"/>
		</head>
	<body>
		<div class="fex main">
			<div class="fex header">
				<h3><img src="style/image/logo.jpg" width="20px" height="20px"alt="image"> ftk</h3>
			</div>
			
			<div class="fex line">
				     <hr noshade size=1> 
			</div>
				<div id="topnav">
		<div id="topnavTut">
			<a class="topnav" href="../php" target="_top">visit site</a> |
			<a class="topnav" href="" target="_top">about</a>
			<a class="topnav" href="" target="_top"></a> 
		</div>
		<div id="topnavAbout">
			<a class="topnav" href="" target="_blank"><img src="style/image/pg.jpg" width="20px" height="20px"alt="image"></a> |
			<a class="topnav" href="" target="_top">log out</a>	
		</div>
	</div>
	
			<div class="fex maincontent">
				<div class="fex sidebar">
					<ul>
						<li><a href="index.php"><img src="style/image/dash.jpg" width="20px" height="20px"alt="image">   Dashboard</a></li>
						<li><a href="posts.php"><img src="style/image/posts.jpg" width="20px" height="20px"alt="image"> Posts</a></li>
						<li><a href="pages.php"><img src="style/image/pages.jpg" width="20px" height="20px"alt="image"> pages</a></li>
						<li><a href=""><img src="style/image/Comments.jpg" width="20px" height="20px"alt="image"> Comments</a></li>
						<li><a href=""><img src="style/image/Menu.jpg" width="20px" height="20px"alt="image"> Menu bar</a></li>
						<li><a href=""><img src="style/image/Slider.jpg" width="20px" height="20px"alt="image"> Slider</a></li>
						<li><a href=""><img src="style/image/site.jpg" width="20px" height="20px"alt="image"> site info</a></li>
						<li><a href=""><img src="style/image/settings.jpg" width="20px" height="20px"alt="image"> settings</a></li>
					</ul>
				</div>
				<div class="fex contact">
				
				
				<?php

    // First we execute our common code to connection to the database and start the session
    require("../login/common.php");
    
    // At the top of the page we check to see whether the user is logged in or not
    if(empty($_SESSION['user']))
    {
        // If they are not, we redirect them to the login page.
        header("Location: ../login/index.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to ../login/index.php");
    }
    
    // Everything below this point in the file is secured by the login system
    
    // We can display the user's username to them by reading it from the session array.  Remember that because
    // a username is user submitted content we must use htmlentities on it before displaying it to the user.
?>
				
				<?php

if(isset($_POST['save'])){

//include database configuration



extract($_REQUEST);
$target = "image/";
$target = $target . basename( $_FILES['image']['name']);
$image=($_FILES['image']['name']);
include 'sql/config.php';

 //include database configuration
$con=mysqli_connect("localhost","root","","newspaper");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sd=1;
  $pra = $_POST['pr'];
 for($c=1;$c<=$pra;$c++) {
$r1="r1".$sd;
$sd++;
//sql insert statement
if(!empty($_POST[$r1])){
$sqlaa="INSERT INTO reala (cid,realtitle)
VALUES ('$_POST[$r1]','$_POST[title]')";

if (!mysqli_query($con,$sqlaa))
  {
  
  }
  }

}
//sql insert statement


$query=mysqli_query
($conn,"insert into my SET title='$title',contain='$contain',image='$image'") or die(mysqli_error($conn));


//insert query to the database

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
echo "The file ". basename( $_FILES['image']['name']). " has been uploaded, and your information has been added to the directory"; 
}
if($query){

//if successful query

echo "New record was saved.";

}

}

?>
<?php

//include database configuration

include 'sql/config.php';
$sql="select * from catagori";	
$rs=mysqli_query($conn,$sql) or die($sql.">>".mysqli_error($conn));	
		
?>				
				
				
				<form action=''enctype="multipart/form-data" method='post' border='1'>
<div class="kkk" style="float:right;background-color:#fff;width:300px;">
<div style="background-color:#ededed;width:280px;padding:10px">
Categoric
</div>
<?php
$sd=1;
while($row=mysqli_fetch_array($rs)){
extract($row);
$r1="r1".$sd;
$r2="cida";
?>
<input class="VUStextBox" id="" size="23" name="pr" type="hidden" value="<?php echo $sd; ?>">
<input type="checkbox" name="<?php echo $r1; ?>" value="<?php echo $catagoriid; ?>"><?php echo $catagoriname; ?><br>
	<?php
$sd++;
	}

?>
</div>

<h3>Post title</h3>
<input type='text' name="title"class="small">
<br/> Photo: <input type="file" name="image"><br>
<h3>About</h3>
<textarea type='text' name="contain"id="element_8"class="element textarea medium"></textarea> <br/>

<input type='submit' value='Public post' name="save" class="submit"/>

</form>
				</div>
			</div>
			<div class="fex footer">
			<p>&copy; koushik</p>
			</div>
		</div>
	</body>
	</html>