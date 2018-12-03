<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">
		<title>symbianft</title>
		<link rel="shortcut icon" href="style/image/logo.jpg" type="image/x-icon" />
		<link href="style/style.css" rel="stylesheet" type="text/css"/>
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
			<a class="topnav" href="../index.php" target="_top">visit site</a> |
			<a class="topnav" href="" target="_top">about</a>
			<a class="topnav" href="" target="_top"></a> 
		</div>
		<div id="topnavAbout">
			<a class="topnav" href="" target="_blank"><img src="style/image/pg.jpg" width="20px" height="20px"alt="image"></a> |
			<a class="topnav" href="../login/logout.php" target="_top">log out</a>	
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
				<h1><img src="style/image/dash.jpg" width="40px" height="40px"alt="image">   Dashboard</h1>
				<h2>Welcome to Kamrul Islam Anik!</h2>
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