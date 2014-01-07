<?php

require "config/common.php";

$submitted_username = '';

if ( !empty( $_POST ) ) {
	$query = "
	SELECT
	id,
	username,
	password,
	salt,
	email
	FROM users
	WHERE
	email = :email
	";

	$query_params = array(
		':email' => $_POST['email']
		);

	try
	{
		$stmt = $db->prepare( $query );
		$result = $stmt->execute( $query_params );
	}

	catch( PDOException $ex ) 
	{
		die( "Failed to run query: "
			);
	}

	$login_ok = false;
	$row = $stmt->fetch();
	if ( $row ) {
		$check_password = hash( 'sha256', $_POST['password'] . $row['salt'] );
		for ( $round = 0; $round < 65536; $round++ ) {
			$check_password = hash( 'sha256', $check_password . $row['salt'] );
		}

		if ( $check_password === $row['password'] ) {

			$login_ok = true;
		}
	}

	if ( $login_ok ) {

		unset( $row['salt'] );
		unset( $row['password'] );

		$_SESSION['user'] = $row;

		header( "Location: private.php" );
		die( "Redirecting to: private.php" );
	}
	else {

		header( "Location: login.php" );
		die( "Redirecting to: login.php" );

		$submitted_username = htmlentities( $_POST['email'], ENT_QUOTES, 'UTF-8' );
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php include '/phpFunction/checklogin.php';?>
<?php include 'views/private/header_guest.php';?>
<!-- login form -->
<div class="container">

	<form action="login.php" method="post">

	<br>

		<div class="row">
			<div class="col-lg-6 col-sm-6 hidden-sm"><br><div style="padding-left: 80px;">  <h1>Login</h1><p>Welcome join Together.<br><br>You will find something <br>you like in here.</p></div></div>
			<div class="col-lg-6 col-sm-6">

				<div class="input-group">
					<h3><legend>ITSC Email</legend></h3><input type="text" name="email" value="@ust.hk" class="form-control" placeholder="@mail.com">
				</div>

				<div class="input-group">
					<h3><legend>Password</legend></h3><input type="password" name="password" value="" class="form-control" placeholder="Password">
				</div><br>

				<div class="input-group">   
					<button    class="btn  btn-success "    type="submit"  />Log In</button>
					<a  class="text-danger" href="#"><h6>Lost your password?</h6></a>
				</div>
			</form>
		</div>
	</div><!--==============================footer=================================-->
	<?php include 'views/private/footer.php';?>

