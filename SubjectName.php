

<? //php include_once('connection.php');
//$stmt = $conn->prepare("SELECT * FROM Tblpupilstudies WHERE UserID=:selecteduser");
//$stmt->bindParam(':selecteduser', $_POST["Name"]);
//$stmt->execute();
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
//{
    //method 1 - looking up using a separate query
    //$stmt2 = $conn->prepare("SELECT *  FROM tblsubjects WHERE SubjectID=:subject");
    //$stmt2->bindParam(':subject', $row["Subjectid"]);
    //$stmt2->execute();
    //while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
    //{
        //echo($row2["Subjectname"]."<br>");
    //}
//}
//?>

<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT tblsubjects.Subjectname as sn FROM Tblpupilstudies 
INNER JOIN tblsubjects 
ON tblsubjects.SubjectID=tblpupilstudies.SubjectID 
WHERE UserID=:selecteduser");

$stmt->bindParam(':selecteduser', $_POST["Name"]);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        echo($row["sn"]."<br>");
}
?>