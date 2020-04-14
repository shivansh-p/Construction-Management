<?php
include 'DatabaseConnection.php';


$Name = $_POST['Name'];
$Start_Date = $_POST['Start_Date'];
$Total_Days = $_POST['Total_Days'];


$Quantity =$_POST['Quantity'];
$Labour_Rate= $_POST['Labour_Rate'];
$Machine_Rate= $_POST['Machine_Rate'];

echo "$Name ";


$query= "insert into newprojectschedule ( Name, Start_Date, Total_Days,Quantity,Labour_Rate,Machine_Rate )
	VALUES ('$Name','$Start_Date', '$Total_Days','$Quantity','$Labour_Rate','$Machine_Rate' )";
$result = mysqli_query($conn, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$query2= "select SubstructureID from newprojectschedule where Name= '$Name' ";
$result2= mysqli_query($conn, $query2);

$row = mysqli_fetch_array($result2);
$id= $row['SubstructureID'];

$query4="insert into progressreport ( SubstructureID )
	VALUES ('$id' )";
$result4= mysqli_query($conn, $query4);
if (!$result4) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
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
header("Location: index.php");


?>
