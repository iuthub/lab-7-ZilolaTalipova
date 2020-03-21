<?php
include_once 'includes/connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>My Personal Page PHP and MySQL Logged In</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class="logout_panel"><a href="register.php">My Profile</a>&nbsp;|&nbsp;<a href="index.php?logout=1">Log Out</a></div>
		<h2>New Post</h2>
		<form action="index.php" method="post">
			<ul class="form">
				<input type="hidden" name="id" />
				<li>
					<label for="title">Title</label>
					<input type="text" name="title" id="title" />
				</li>
				<li>
					<label for="body">Body</label>
					<textarea name="body" id="body" cols="30" rows="10"></textarea>
				</li>
				<li>
					<input type="submit"  name="posted" value="Post" />
				</li>
			</ul>
		</form>

		<div class="onecol">
			<?php foreach ($result as $row) { ?>


			<div class="card">
				<h2><?php echo $row['title']; ?></h2>
				<h5><?php echo $row['publishDate']; ?></h5>
				<p><?php echo $row['body']; ?></p>
			</div>
			<?php } ?>
			<div class="card">
				<h2>TITLE HEADING</h2>
				<h5>Author, Sep 2, 2017</h5>
				<p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		</div>
  </body>
</html>
