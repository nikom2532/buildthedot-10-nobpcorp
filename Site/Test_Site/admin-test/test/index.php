<?php
$rootpath ="./";
include($rootpath."assets/html/header.php");
	if($_SESSION["username"]!=""){
?>
<br />User: <?php echo $_SESSION["username"];?><br />
<a href="./logout_process.php">Logout</a><br />

<form action="./upload_process4.php" method="post" enctype="multipart/form-data" >
  item name: <input type="text" name="item_name"><br/>
  image: <input type="file" name="imagefile"><br/>
  pdf file: <input type="file" id="pdffile" name="pdffile"><br />
  <input type="submit" value="Submit" />
</form>

<?php
	}
	else{
?>
		<form action="./login_process.php" method="post">
		  Username: <input type="text" name="username"><br />
		  Password: <input type="password" name="password"><br />
		  <input type="submit" value="Submit" /><br />
		</form>
<?php
		if($_POST["login_messaage"]=="login_false"){
			echo "Username or Password incorrect.";
		}
	}
include($rootpath."assets/html/footer.php");
?>