<?php
include 'DatabaseConnection.php';

$Name = $_POST['substructureInput'];
$Date = $_POST['DateInput'];
$workDone=$_POST['ActualWork'];

$query="select SubstructureID from projectschedule where Name='$Name'";
$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

$id=$row['SubstructureID'];

$query2="update workreport set ActualWork='$workDone'
where SubstructureID='$id' and Date='$Date' ";

$result2=mysqli_query($conn,$query2);
if (!$result2) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$query3="select IdealWork from workreport where SubstructureID='$id'";
$result3=mysqli_query($conn,$query3);
if (!$result3) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row3=mysqli_fetch_array($result3);
$idealWork=$row3['IdealWork'];

$progress=($workDone-$idealWork)*100/$idealWork;
$query4="update workreport set Progress='$progress'
where SubstructureID='$id' and Date='$Date' ";

$result4=mysqli_query($conn,$query4);
if (!$result4) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

echo "$progress";
mysqli_close($conn);
?>
