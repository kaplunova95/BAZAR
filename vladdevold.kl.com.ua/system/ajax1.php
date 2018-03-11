<?php 
    session_start();
    $gid = $_REQUEST['gid'];
    $_SESSION['gid']= $gid;
    
    echo($gid.'- OK');
?>	