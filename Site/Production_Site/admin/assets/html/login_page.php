<div id="return-website">
	<a href="#" class="button dark">Return to website</a>
</div>
<!-- end full-width -->
<div id="wrap-logo-center">
	<img src="images/logo_nodesc.png">
</div>
<div id="wrap-login">
	<form action="<?php echo $rootpath; ?>assets/html/login_process.php" method="post" id="login-form">

		<fieldset>

			<p>
				<label for="login-username">username</label>
				<input name="username" type="text" id="login-username" class="round full-width-input" autofocus />
			</p>

			<p>
				<label for="login-password">password</label>
				<input name="password" type="password" id="login-password" class="round full-width-input" />
			</p>

			<input type="submit" value="Submit">

		</fieldset>
<?php
		if ($_POST["login_messaage"] == "login_false") {
			echo "Username or Password incorrect.";
		}
?>
	</form>
</div><!--end container_16 -->