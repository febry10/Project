<?php

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbase = 'project_kng';

        $con = mysqli_connect($host, $user, $pass, $dbase)
        OR DIE ("salah");

        mysqli_select_db($con,$dbase)
        OR DIE ("salah");

        
        
?>