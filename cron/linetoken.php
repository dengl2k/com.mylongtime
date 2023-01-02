 <?php
	
ignore_user_abort(true);

if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}
    if(isset($_POST['submit'])) {
        // The things that needs to be checked and executed WHEN submitted.

        $username = $_POST['username'];
		$user = get_user_by('login', $username);
		$id = 0;
		if($user)
		{
		   $id = $user->ID;
		} else{
			echo "No user found";
			exit;
		}

        $token = $_POST['token'];

		$data = array(			
			"line_token" => $token
			);
		$payload = json_encode($data);
		$res = update_user_meta($id, "app_data", $payload);
		if($res==1) {
			echo "Result: Success";
		} else {
			echo "Result: Error";
		}	
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Line Token</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="POST">
        <p><label for="username">Username: </label>
		<input type="text" name="username" required>
		</p>
		<p>
		<label for="token">Token: </label>
        <input type="text" name="token" required>
		</p>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>