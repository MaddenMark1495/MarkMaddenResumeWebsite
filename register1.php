<?php
	session_start();
?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="page1.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <title>Mark Madden</title>
</head>
    <body>
    
        <div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<h2>Create a user</h2>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
						<div class="row form-group">
                        		<label class='inputdefault'>User Name</label>
								<input class='form-control' type="text" name="username" placeholder="username">
						</div>
						<div class="row form-group">
                        		<label class='inputdefault'>Password</label>
								<input class='form-control' type="password" name="password" placeholder="password">
						</div>
						<div class="row form-group">
								<input class=" btn btn-info" type="submit" name="submit" value="Register"/>
                                <a href="index.php" class="btn btn-primary">Back</a>
						</div>
					</form>
                    
				</div>
                <div class="col-sm-4"></div>
			</div>
			<?php
				if(isset($_POST['submit'])) { // Was the form submitted?
					
					$link = mysqli_connect("#","#","#","#") or die ("Connection Error " . mysqli_error($link));
					$sql = "INSERT INTO users(usertype,username,salt,hashed_password) VALUES ('c',?,?,?)";
					if ($stmt = mysqli_prepare($link, $sql)) {
						$user = $_POST['username'];
						$salt = mt_rand();
						$hpass = sha1($salt.$_POST['password'])  or die("bind param"); 
						mysqli_stmt_bind_param($stmt, "sss", $user, $salt, $hpass) or die("bind param");
						if(mysqli_stmt_execute($stmt)) {
							echo "<h4>Success</h4>";
						} else {
							echo "<h4>Failed</h4>";
						}
						
						
						$query2='INSERT INTO logins(username) VALUES("' . $_POST['username'].'");';
						mysqli_query($link, $query2);
						
					} else {
						die("prepare failed");
					}
				}
			?>
		</div>
    
    
    
    
    </body>
