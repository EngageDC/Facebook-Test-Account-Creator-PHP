Facebook-Test-Account-Creator-PHP
=================================

A very simple and small PHP script for creating app specific test Facebook accounts.

Demo
----

http://code.enga.ge/fb-generator/

About
-----

It's always nice to test a Facebook App your working on from complete scratch. This script will allow you to easily create test Facebook accounts for your applications.  

For more information, please see the Facebook Official Documentation:  

1. https://developers.facebook.com/docs/test_users/
2. https://developers.facebook.com/docs/technical-guides/opengraph/publishing-with-app-token/


How to use
----------

**Easy Way:**  

1. Download files
2. Upload to server
3. Change *includes/facebook.php* APP_ID and APP_SECRET to your application

		<?php

		class Facebook {

			protected $app_id 		= 'YOUR_APP_ID'; // Your Facebook App ID
			protected $app_secret 	= 'YOUR_APP_SECRET'; // Your Facebook App Secret
		
			...

**Slightly Less Easy Way:**  

1. Include Facebook.php in your script
2. Initiate the Facebook class
3. Call the get_test_account($name) function

		<?php

		include 'includes/facebook.php';
		
		$facebook = new facebook(array('app_id' => 'YOUR_APP_ID', 'app_secret' => 'YOUR_APP_SECRET'));
		
		$name = 'Wally West';
		
		$test_account = $facebook->get_test_account($name);


Misc
------------

1. Limitations of Test Accounts versus Real Accounts: https://developers.facebook.com/docs/test_users/#limitations
2. This is free to use. No attribution required. Governed under the MIT license (http://opensource.org/licenses/MIT).
3. Use this script at your own risk
