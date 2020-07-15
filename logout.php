<?php
	session_start();
	if(session_is_registered(‘username’)){
		session_unset();
		session_destroy();
	}
?>