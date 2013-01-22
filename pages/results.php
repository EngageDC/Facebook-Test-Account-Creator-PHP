<?php
	include 'includes/facebook.php';
		
	//$facebook = new facebook(array('app_id' => 'YOUR_APP_ID', 'app_secret' => 'YOUR_APP_SECRET'));
	$facebook = new facebook();
	
	$test_account = $facebook->get_test_account($_GET['name']);
	
	echo '<a href="'.$test_account->login_url.'">Login URL</a><br>';
	
	foreach ($test_account as $key => $value) :
		echo '<label for="'.$key.'">'.$key.': </label><input id="'.$key.'" value="'.$value.'"><br>'."\n";
	endforeach;