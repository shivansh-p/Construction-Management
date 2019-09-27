<?php
include 'DatabaseConnection.php';


$Name = $_POST['Name'];
$Start_Date = $_POST['Start_Date'];
$Total_Days = $_POST['Total_Days'];

echo "$Name ";


$query= "insert into projectschedule ( Name, Start_Date, Total_Days )
	VALUES ('$Name','$Start_Date', '$Total_Days' )";
$result = mysqli_query($conn, $query);

$query2= "select SubstructureID from projectschedule where Name= '$Name' ";
$result2= mysqli_query($conn, $query2);
if (!$result2) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result2);
$id= $row['SubstructureID'];
//echo  $row['SubstructureID'] ;
//echo "$result2";
//  $date = strtotime("+1 day", strtotime("2007-02-28"));
// echo date("Y-m-d", $date);
 $date= $Start_Date;
 $IdealWork= 100/$Total_Days;
 for ($x = 1; $x <= $Total_Days; $x++)
 {

      $query3= "insert into workreport (SubstructureID, Date, IdealWork)
      VALUES ('$id', '$date', '$IdealWork')";
      $result3= mysqli_query($conn, $query3);
      $date = date("Y-m-d", strtotime("+1 day", strtotime("$date")));
 }




	mysqli_close($conn);
//header("Location: index.php");


?>
