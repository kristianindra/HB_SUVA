<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>
</head>
<body>
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" style="margin-top: 50px;" id="form">
			<div id="head" style="text-align:center; opacity: 1;">
				<img src="./../asset/image/maxel_logo_2.PNG" style="max-width: 100px;"/>
			</div>
			<div class="body">
			<form action="../C_main/login" method="POST">
			  	<div class="form-group">
			    	<label class="sr-only" for="uname">User Name</label>
				    <input type="text" class="form-control" id="uname" name="uname" placeholder="User Name">
				</div>
				<div class="form-group">
			    	<label class="sr-only" for="upass">User Password</label>
				    <input type="password" class="form-control" id="upass" name="upass" placeholder="User Password">
				</div>
				<button type="submit" class="btn btn-block btn-default">Log In</button>
				<br/>
			</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
	
	<div class="container">
		<a href="../C_main/int_contact">Contact</a>
	</div>
	<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
