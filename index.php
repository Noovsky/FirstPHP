<!DOCTYPE html>
<?php
session_start(); 
if (!isset($_SESSION['name']))
{   
    header("Location:login.php");
}
?>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
       
</body>
</html>