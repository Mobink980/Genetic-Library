<?php

session_start();//we need to start the session in order to end it
session_unset();//it deletes all the values inside the session variables so we are logged out
session_destroy();// end the running session
header("Location: ../signin.php");