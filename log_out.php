<?php
   // start session
  session_start();

?>

<?php

	//remove all session variable
	session_unset();

	// destroy the session
    session_destroy();

    include 'index.php';

?>