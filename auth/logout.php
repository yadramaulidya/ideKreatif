<?php
session_start();
session_unset();
sessiion_destroy();
header('Location: login.php');
exit();