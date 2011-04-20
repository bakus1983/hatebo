<?php

new hatebo("","");

Class hatebo{
	
	function __construct($hatena_id=false,$hatena_pass=false)
	{
		if(!$hatena_id || $hatena_pass) exit("plz input id pass");
		$this->start_booking();
	}

	function __destruct()
	{
		
	}
	
	# main
	function start_booking()
	{
		# chooose
		$this->chooose();
		# login
		# put
		# finish
	}
	
	# maiking list.... 2011/04/20 mugita
	function chooose()
	{
		## I need a list of someSite
		# load list
		$list = file_get_contents("");
		
		
	}
	
}

?>