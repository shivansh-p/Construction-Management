<?php
include 'DatabaseConnection.php';

$Name = $_POST['substructureInput'];
$Date = $_POST['DateInput'];
$workDone=$_POST['ActualWork'];

$query="select SubstructureID from newprojectschedule where Name='$Name'";
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

//$progress=(($workDone-$idealWork)*100)/$idealWork;
$progress=$idealWork-$workDone;
$query4="update workreport set Progress='$progress'
where SubstructureID='$id' and Date='$Date' ";
echo "Ideal work : $idealWork Workdone: $workDone ok ok ";
$result4=mysqli_query($conn,$query4);
if (!$result4) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$query5="select Overall_Progress from progressreport where SubstructureID='$id' ";
$result5=mysqli_query($conn,$query5);
$row5=mysqli_fetch_array($result5);
$cumulative=$row5['Overall_Progress'];
$cumulative=$cumulative+$workDone;

$query6="update progressreport set Overall_Progress='$cumulative'
where SubstructureID='$id' ";

$result6=mysqli_query($conn,$query6);
echo "$progress";
mysqli_close($conn);
?>
