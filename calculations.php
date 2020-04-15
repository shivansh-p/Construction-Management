<?php
include 'DatabaseConnection.php';

#$Name=$_POST['substructurename'];

#$query1="select SubstructureID from newprojectschedule where Name='$Name' ";
#$result1=mysqli_query($conn,$query1);

#$row1=mysqli_fetch_array($result1);
#$id=$row['SubstructureID'];
//$id=1;
echo "ID"+$id;
$query="select * from workreport where SubstructureID='$id' ";
$result=mysqli_query($conn,$query);

$row = $result->fetch_assoc();
$days=0;
$sumActualWork=0;
while($row["ActualWork"]>0) {
  $days=$days+1;
  $sumActualWork=$sumActualWork+$row["ActualWork"];
  $row = $result->fetch_assoc();
}

$query3="select * from newprojectschedule where SubstructureID='$id'";
$result3=mysqli_query($conn,$query3);
$row3=mysqli_fetch_array($result3);
$Quantity=$row3["Quantity"];
$Duration=$row3["Total_Days"];
$RL=$row3["Labour_Rate"];
$RM=$row3["Machine_Rate"];


$Q=$Quantity*(1-($days/$Duration));
$q=(($Quantity/$Duration)*$days)-$sumActualWork;
$Zoptimised=$Q*($RM+$RL)+$q*($RM+(1.5*$RL));
$Z=($Q+$q)*($RM+$RL);
$percentage=($Zoptimised/$Z)*100;

echo "Work should be done in regular time - ".$Q."<br>";
echo "Work should be done in overtime - ".$q."<br>";
echo "Cost of the optimized solution - ".$Zoptimised."<br>";
echo "Cost of the regular solution - ".$Z."<br>";
echo "Percentage cost of optimized solution w.r.t regular solution - ".$percentage."<br>";

?>
