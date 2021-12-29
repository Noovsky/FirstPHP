<!DOCTYPE html>
<html>
<head>
    <title>User Options</title>
</head>
<body>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Tblpupilstudies WHERE UserID=:selecteduser");
$stmt->bindParam(':selecteduser', $_POST["Name"]);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Subjectid"]."<br>");
}
?>	
</form>
</body>
</html>