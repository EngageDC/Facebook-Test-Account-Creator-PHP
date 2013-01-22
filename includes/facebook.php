<?php

class Facebook {

	protected $app_id 		= 'YOUR_APP_ID'; // Your Facebook App ID
	protected $app_secret 	= 'YOUR_APP_SECRET'; // Your Facebook App Secret

	public function __construct($user_config = array())
	{
		$default_config = array(
            'app_id' => $this->app_id,
            'app_secret' => $this->app_secret,
        );

        $config = array_merge($default_config, $user_config);

        $this->api_key		= $config['app_id'];
        $this->app_secret 	= $config['app_secret'];
	}
	
	public function get_test_account($name)
	{
		$app_access_token = $this->_curl('https://graph.facebook.com/oauth/access_token?client_id='.$this->app_id.'&client_secret='.$this->app_secret.'&grant_type=client_credentials');
		
		return $this->_curl('https://graph.facebook.com/'.$this->app_id.'/accounts/test-users?installed=false&locale=en_US&method=POST&name='.urlencode($name).'&'.$app_access_token, TRUE);
	}

	private function _curl($url, $decode = FALSE)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		
		if ($decode)
			return json_decode($output);
		else
			return $output;
	}
}