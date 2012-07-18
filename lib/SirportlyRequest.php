<?php

class SirportlyRequest {

	protected $api_token;

	protected $api_secret;

	function __construct()
	{
		$this->api_token = SirportlyConfuration::SIRPORTLY_API_TOKEN;
		$this->api_secret = SirportlyConfuration::SIRPORTLY_API_SECRET;
	}

	/**
	 * Make the request to sirportly.
	 * 
	 * @return 
	 */
	public function make()
	{
		
	}

}