<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">
		<title>symbianft</title>
		<link rel="shortcut icon" href="style/image/logo.jpg" type="image/x-icon" />
		<link href="style/style.css" rel="stylesheet" type="text/css"/>
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
			<a class="topnav" href="" target="_top">visit site</a> |
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
						<li><a href="pages.php"><img src="style/image/pages.jpg" width="20px" height="20px"alt="image"> Categoric</a></li>
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
$i=0;
if(isset($_GET['id'])){
extract($_REQUEST);
include 'sql/config.php';
$id = $_GET['id'];
 
$sqlaa="DELETE FROM catagori WHERE catagoriid = '$id'";

$rsaa=mysqli_query($conn,$sqlaa) or die("Data Not DELETED!"); 

if($rsaa) echo "data DELETED";
}
?>	

<?php

?>

			
			
	<?php 
if(isset($_GET['name'])){
extract($_REQUEST);
$id = $_GET['name'];
include 'sql/config.php';
$sqlss="select * from catagori WHERE catagoriid = '$id'";
$rsss=mysqli_query($conn,$sqlss) or die("Data Not Inserted!");
$i=1;

if(isset($_GET['Update'])){
extract($_REQUEST);
include 'sql/config.php';
$sqla="UPDATE catagori SET catagoriname='$title' where catagoriid='$name' ";

$rsa=mysqli_query($conn,$sqla) or die("Data Not UPDATED!"); 

if($rsa) echo "data UPDATED";
}

	



}
?>			
				
				
<?php
if(isset($_POST['save'])){
extract($_REQUEST);
include 'sql/config.php';
$query=mysqli_query
($conn,"insert into catagori SET catagoriname='$catagoriname'") or die(mysqli_error($conn));

if($query){
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
				<h1><img src="style/image/dash.jpg" width="40px" height="40px"alt="image">   Dashboard</h1>
				<h2>Welcome to ftk!</h2>
				<form action='' method='post' border='1'>
				<h3> Categoric Name </h3>
					<input type='text' name="catagoriname"class="small">
					
					<input type='submit' value='Save' name="save" class="submit"style="padding:6px;"/>
				</form>
				
				<div style="background-color:#ededed;width:800px;padding:10px;margin-top:20px;">
View Categoric
</div>
				<table style="background-color:#ededed;width:820px;padding:10px;margin-top:20px;">
				<?php
while($row=mysqli_fetch_array($rs)){
extract($row);
?>
				<tr>
				
				<td><?php echo $catagoriid; ?></td>
				<td><?php echo $catagoriname; ?></td>
				<td><a href="pages.php?name=<?php echo $catagoriid; ?>">EDIT</a> </td>
				<td><a href="pages.php?id=<?php echo $catagoriid; ?>">Delet</a> </td>
				
				</tr><?php } 
				?>
				
				
				</table>
				<?php
				if($i==1){
				
				?>
				<div style="background-color:#ededed;width:800px;padding:10px;margin-top:20px;">
Update Categoric
</div>
				<table style="background-color:#ededed;width:820px;padding:10px;margin-top:20px;">
				<form action='' method='GET' border='1'>
				<?php
				$rowss=mysqli_fetch_array($rsss);
				extract($rowss);
				?>
				<tr>
				<input type='hidden' name="name"class="small" value="<?php echo $catagoriid; ?>"  >
				<td><input type='text' name="title"class="small" value="<?php echo $catagoriname; ?>"  ></td>
				<td><input type='submit' value='Update' name="Update" class="submit"style="padding:6px;"/></td>
				</tr>
				<?php
				
				?>
				</form>
				</table>
				<?php
				}
				?>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p>.</p>
				
				</div>
			</div>
			<div class="fex footer">
			<p>&copy; koushik</p>
			</div>
		</div>
	</body>
	</html>