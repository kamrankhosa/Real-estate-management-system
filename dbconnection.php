<?php
     $db_connect =mysqli_connect('localhost','root','','project');
     if(!$db_connect) 
     {
     	echo "there is something went wrong in database";
     }
?>