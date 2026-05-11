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
  echo "<div class ='container bg-danger text-white  '>
          <div>
          <h1>SOME UINIVERSITY</h1></div><br><br>
          <h1>Student Registration Form</h1>
          <form action=''>
              <div class='mb-2 row'>
                <label for='text' class='col-sm-2 col-form-label'>Name:</label>
                <div class='col-sm-10'>
                  <input type='text' class='form-control' id='text'>
                </div>
              </div>
              <div class='mb-2 row'>
                <label for='start' class='col-sm-2 col-form-label'>DOB</label>
                <div class='col-sm-10'>
                  <input type='date' class='form-control' id='start'>
                </div>
              </div>
                <div class='mb-2 row '>
                  <label for='male'>Sex</label>
                  <label for='male'>Male</label>
                  <div class='col-sm-10'>
                  <input type='radio' id='male' name='drone' value='male' checked />
                  </div>
                </div>
                <div class='mb-2 row'>
                  <label for='female'>Female</label>
                  <div class='col-sm-10'>
                  <input type='radio' id='female' name='drone' value='female' checked />
                  </div>
                </div>
              <div class='mb-2 row'>
                <label for='email' class='col-sm-2 col-form-label'>E-mail:</label>
                <div class='col-sm-10'>
                  <input type='email' class='form-control' id='email'>
                </div>
              </div>
              <div class='mb-2 row'>
                <label for='address' class='col-sm-2 col-form-label'>Address:</label>
                <div class='col-sm-10'>
                  <input type='address' class='form-control' id='address'>
                </div>
              </div>
              <div class='mb-2 row'>
                <label for='Default select example' class='col-sm-2 col-form-label'>School:</label>
                <div class='col-sm-10'>
                  <select class='form-select' aria-label='Default select example'>
                    <option selected>Open this select menu</option>
                    <option value='1'>One</option>
                    <option value='2'>Two</option>
                    <option value='3'>Three</option>
                  </select>
                </div>
              </div>
              <div class='mb-2 row'>
                <label for='pet-select' class='col-sm-2 col-form-label'>Department:</label>
                <div class='col-sm-10'>
                  <select name='pets' id='pet-select'>
                    <option value=''></option>
                    <option value='dog'>Dog</option>
                    <option value='cat'>Cat</option>
                    <option value='hamster'>Hamster</option>
                  </select>
                </div>
            <d iv class='mb-2 row'>
                <label for='pet-select' class='col-sm-2 col-form-label'>Course:</label>
                <div class='col-sm-10'>
                  <select name='pets' id='pet-select'>
                    <option value=''></option>
                    <option value='dog'>Dog</option>
                    <option value='cat'>Cat</option>
                    <option value='hamster'>Hamster</option>
                  </select>
                </div>
              </d>
              <div class='mb-2 row'>
                <label for='phone' class='col-sm-2 col-form-label'>Tel Number</label>
                <div class='col-sm-10'>
                  <input type='tel' class='form-control' id='phone'>
                </div>
              </div>
              <div class='mb-2'>
                <button type='button' class='btn btn-light'>Light</button>
              </div>
              <div class= 'col-form' >
                <button type='button' class='btn btn-light form-control-button'>Light</button>
              </div>
              </form>
        </div>";
  ?>

</body>

</html>