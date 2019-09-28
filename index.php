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
  <div class="f3">
    <form method="post" action=''>
      <button type="submit" class="b3" name="ViewReport" value="VIEW REPORT">VIEW REPORT
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
   if (isset($_POST['ViewReport']))
   {
     header("Location: viewReport.html");
   }
?>

</body>
</html>
