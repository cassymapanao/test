<?php
$dbcon = @mysqli_connect(hostname: 'localhost', username: 'cutiepatootie', password: 'cutiepatootie', database: 'cutie_patootie')
OR die('Could not connect to the MySQL Server'. mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf8');