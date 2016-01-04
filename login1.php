<!DOCTYPE html>
<?php
	session_start();
?>
<html>
    <head>
        <title>Mark Madden</title>
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
    </head>
    <body>
                <div class="row">
				<div class="col-sm-4"> </div>
                
				<div class="col-sm-4">
					<h2>Login</h2>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
						<div class="row form-group">
								<input class='form-control' type="text" name="username" placeholder="username">
						</div>
						<div class="row form-group">
								<input class='form-control' type="password" name="password" placeholder="password">
						</div>
						<div class="row form-group">
								<input class=" btn btn-info" type="submit" name="submit" value="Login"/>
						</div>
					</form>
				</div>
                
                <div class="col-sm-4"></div>
                
			</div>
        
        
        
			<?php
			
							
				if(isset($_POST['submit'])) { // Was the form submitted?
					
					$link = mysqli_connect("us-cdbr-azure-central-a.cloudapp.net", "bc78587a76321d", "71997b97", "cs3380-mcmpw6") or die ("Connection Error " . mysqli_error($link));
					//password salted and Hashed
					
					$sql = 'SELECT salt, hashed_password, usertype FROM users WHERE username = "';
					$query=$sql . $_POST['username'].'";';
					$result = mysqli_query($link, $query);
						$row = mysqli_fetch_assoc($result);
						$localhash = sha1( $row['salt'] . $_POST['password'] );
						if ($localhash == $row['hashed_password'])
						{
							echo 'You logged in!';
							// Set session variables
							$_SESSION['username'] = $_POST['username'];
							$_SESSION['usertype'] = $row['usertype'];
							$_SESSION['islogin'] = '1';
							
				           header("Location: page1.php");
							
							
						}
						else
						{
							echo 'Password error!';
							
						}
						
						
   
    
					
				}
			
			?>
		</div>
    </body>
</html>
    