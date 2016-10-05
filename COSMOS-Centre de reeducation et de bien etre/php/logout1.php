<?php
session_start();
session_unset();
session_destroy(); /* perte de mémoire si on l'utilise pas*/
header('location:../index.html');




?>