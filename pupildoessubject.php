<?php
session_start(); 
if (!isset($_SESSION['name']))
{ 
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];  
    header("Location:login.php");
}
?>
<!DOCTYPE html>

<html>
<head>
    
    
    <title>Page title</title>
    
</head>
<body>
<form action="addtoclass.php" method = "post">

<select name = "student">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');

}
?>
</select>
<select name = "subject">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');

}
?>
</select>

<input type="submit" value="Add User">
</form>
     
</body>
</html>





