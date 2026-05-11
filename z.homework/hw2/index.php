<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  //declare a variable
  #Product 1
  $a = 240;
  $b = 9.64;
  $c = 1594;
  #Product 2
  $d = 600;
  $e = 8.51;
  $f = 987;
  #Product 03
  $g = 547;
  $h = 17.40;
  $i = 153;
  #Product 04
  $j = 112;
  $k = 11.28;
  $l = 103;
  #Product 05
  $m = 277;
  $n = 3.97;
  $o = 87;



  // print
  echo "<table class= 'table table-striped table-hover'>
        <h1><font color = red >លំហាត់អនុវត្តន៍២</font></h1><br><br>
        <h1><font color = black>Best Selling products</font></h1><br>
        <div></div><button type='button' class='btn btn-secondary'>Download CSV</button></div>
        <button type='button' class='btn btn-secondary'>Email Report</button><br><br>

        <thead class = 'table-secondary '>
          <tr>
            <th scope='col'>Product Name</th>
            <th scope='col'>Inventory</th>
            <th scope='col'>Unit Price</th>
            <th scope='col'>Quantity Sold</th>
          </tr>
        </thead>

        <tbody>
        #Product 01
          <tr>
            <th scope= 'row'>Bacon</th>
            <td>$a</td>
            <td> $ $b </td>
            <td> $c</button></td>
          </tr>
          #Product 02
          <tr>
            <th scope= 'row'>Porterhouse</th>
            <td>$d</td>
            <td> $ $e </td>
            <td> $f</button></td>
          </tr>
          #Product 03
          <tr>
            <th scope= 'row'>Honey Ham</th>
            <td>$g</td>
            <td> $ $h </td>
            <td> $i</button></td>
          </tr>
          #Product 04
          <tr>
            <th scope= 'row'>Roaf Beef</th>
            <td>$j</td>
            <td> $ $k </td>
            <td> $l</button></td>
          </tr>
          #Product 05
          <tr>
            <th scope= 'row'>Pastrime</th>
            <td>$m</td>
            <td> $ $n </td>
            <td> $o</button></td>
          </tr>
        </tbody> ";
  echo "</table>";
  ?>
</body>

</html>