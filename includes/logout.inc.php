<?php

session_start();
session_unset();
session_destroy();

header("location: ../kaszaimodul.php?error=emptyinput");
exit();