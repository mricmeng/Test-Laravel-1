<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $x = 2;
  $y = 5;
  if ($x > $y) {
    echo "x is max";
  } else {
    echo "y is max";
  }
  ?>;

  <h1>
    <font color=red>condition of overtime</font>
  </h1><br>
  <?php
  $overtime = 60;
  if ($overtime <= 50) {
    $pay_amt = 1000;
    $medical = 1500;
    echo "Pay amount : $$pay_amt ";
  } else {
    $pay_amt = 2000;
    $medical = 2700;
    echo "Pay amount : $$pay_amt and Medical amount: $$medical";
  }
  ?>

  <h1>
    <font color=red">Check Number</font>
  </h1><br>
  <?php
  $i = 20;

  if ($i == 10) {
    if ($i < 15) {
      echo " i is smaller than 15<br>";
    }
    if ($i < 12) {
      echo " i is smaller thand 12 too";
    }
  } else {
    echo "i is greater than 15";
  }

  ?>
</body>

</html>