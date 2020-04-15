<?php
include 'DatabaseConnection.php';

#$Name=$_POST['substructurename'];

#$query1="select SubstructureID from newprojectschedule where Name='$Name' ";
#$result1=mysqli_query($conn,$query1);

#$row1=mysqli_fetch_array($result1);
#$id=$row['SubstructureID'];
//$id=1;
if(mb_strtolower($Name)=="earthwork")
{
  $query4="select * from workreport where SubstructureID='$id' ";
  $result4=mysqli_query($conn,$query4);

  $row4 = $result4->fetch_assoc();
  $days=0;
  $sumActualWork=0;
  while($row4["ActualWork"]>0) {
    $days=$days+1;
    $sumActualWork=$sumActualWork+$row4["ActualWork"];
    $row4 = $result4->fetch_assoc();
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
  $Zoptimised=($Q*$RM+$Q*0.01*$RL)+($q*$RM+$q*0.01*(1.5*$RL));
  $Z=($Q*$RM+$Q*0.01*$RL)+($q*$RM+$q*0.01*$RL);
  $percentage=($Zoptimised/$Z)*100;

  echo "Work should be done in regular time - ".round($Q,2)."<br>";
  echo "Work should be done in overtime - ".round($q,2)."<br>";
  echo "Cost of the optimized solution - ".round($Zoptimised,2)."<br>";
  echo "Cost of the regular solution - ".round($Z,2)."<br>";
  echo "Percentage cost of optimized solution w.r.t regular solution - ".round($percentage,2)."<br>";

}
else {
  // code...
  $query4="select * from workreport where SubstructureID='$id' ";
  $result4=mysqli_query($conn,$query4);

  $row4 = $result4->fetch_assoc();
  $days=0;
  $sumActualWork=0;
  while($row4["ActualWork"]>0) {
    $days=$days+1;
    $sumActualWork=$sumActualWork+$row4["ActualWork"];
    $row4 = $result4->fetch_assoc();
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

  echo "Work should be done in regular time - ".round($Q,2)."<br>";
  echo "Work should be done in overtime - ".round($q,2)."<br>";
  echo "Cost of the optimized solution - ".round($Zoptimised,2)."<br>";
  echo "Cost of the regular solution - ".round($Z,2)."<br>";
  echo "Percentage cost of optimized solution w.r.t regular solution - ".round($percentage,2)."<br>";

}

?>
