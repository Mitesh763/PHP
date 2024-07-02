<?php

// logout | destroy session
session_start();
session_unset();
session_destroy();
echo "</br> You are logout successully";

?>