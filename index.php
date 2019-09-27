<html>
<head>
<title>CONMAN</title>

<link rel="stylesheet"  href="main.css">
</head>
<body>
<div class="f">
  <div class="f1">
  <form method="post" action=''>
    <button type="submit" class="b1" name="addSubstructure" value="ADD SUBSTRUCTURE">ADD SUBSTRUCTURE
    </button>
  </form>
  </div>
  <div class="f2">
    <form method="post" action=''>
      <button type="submit" class="b2" name="dailyReport" value="DAILY REPORT">DAILY REPORT
      </button>
    </form>
  </div>
</div>
<?php
  if (isset($_POST['addSubstructure']))
{
   header("Location: addSubstructure.html");
}
   if (isset($_POST['dailyReport']))
   {
     header("Location: dailyReport.html");
   }
?>

</body>
</html>
