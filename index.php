<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FACTURA</title>

  <!--  <style>
      
      img {
        max width: 100%;
      }
    </style> --->
  </head>
  <body>
      <div class="container">

      <form action="index.php" method="post">

  <div class="container">
  <div class="row">
    <div class="col">
    <img src="img\img_epsas.jpg"  height="150" width="380"  alt="...">
    </div>
    <div class="col">
    <center>
    <div class="row ">
  <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">FACTURA</label>
</div>
<div class="row ">
  <label for="colFormLabel" class="col-sm-12 col-form-label">ORIGINAL</label>
</div>
<div class="row ">
  <label for="colFormLabel" class="col-sm-12 col-form-label">Captacion, Depuracion y Distribucion de Agua</label>
</div>
    </center>
    </div>

    <div class="col">
   

    <div class="row ">
  <label for="colFormLabel" class="col-sm-6 col-form-label">NIT:</label>
  <div class="col-sm-6">
    <input type="text-number" class="form-control" id="colFormLabel" name="nit">
  </div>
</div>

<div class="row ">
  <label for="colFormLabel" class="col-sm-6 col-form-label">FACTURA N°:</label>
  <div class="col-sm-6">
    <input type="text-number" class="form-control" id="colFormLabel" name="factura">
  </div>
</div>
<div class="row ">
  <label for="colFormLabel" class="col-sm-6 col-form-label">AUTORIZACION N°:</label>
  <div class="col-sm-6">
    <input type="text-number" class="form-control" id="colFormLabel" name="autorizacion">
  </div>
</div>


    
</div>
<div class="row g-0">
  <div class=" p-1 mb-1 bg-primary text-white"><center>DATOS DEL USUARIO </center></div>
</div>

    <form class="row g-1">
  <div class="col-sm-2 mb-1">
    <label for="staticEmail2" class="visually-hidden">Fecha de emision:</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Fecha de emision:">
  </div>
  <div class="col-sm-5 mb-1">
    <label for="inputPassword2" class="visually-hidden">Fecha de emision</label>
    <input type="text-number" class="form-control" id="inputPassword2" name="fecha_em">
  </div>
  <div class="col-sm-2">
    <label for="staticEmail2" class="visually-hidden">Fecha de Vencimiento:</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Fecha de Vencimiento:">
  </div>
  <div class="col-sm-3">
    <label for="inputPassword2" class="visually-hidden">Fecha de Vencimiento:</label>
    <input type="text-number" class="form-control" id="inputPassword2" placeholder="dd/mm/aa">
  </div>

<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Titular de la cuenta:</label>
  <div class="col-sm-5">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre a facturar:</label>
  <div class="col-sm-5">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion:</label>
  <div class="col-sm-5">
    <input type="text-number" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Categoria:</label>
  <div class="col-sm-5">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">N° de medidor:</label>
  <div class="col-sm-5">
    <input type="text-number" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Recorrido:</label>
  <div class="col-sm-5">
    <input type="text-number" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">N° de Cuenta:</label>
  <div class="col-sm-5">
    <input type="number" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>

</form>

<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-10 col-form-label bg-primary text-white "> <center>CONSUMO </center></label>
  <div class="col-sm-2">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>

<form class="row g-1">

<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Lectura anterior:</label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="colFormLabel" placeholder="dd/mm/aa">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Lectura actual:</label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="colFormLabel" placeholder="dd/mm/aa">
  </div>
</div>

</form>

<div class="row g-0">
  <div class=" p-1 mb-1 bg-primary text-white"><center>DETALLE DE LA FACTURA</center></div>
</div>

<form class="row g-1">

<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-11 col-form-label">AGUA POTABLE</label>
  <div class="col-sm-1">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-11 col-form-label">TOTAL FACTURADO DEL MES </label>
  <div class="col-sm-1">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>

<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-11 col-form-label ">IMPORTE BASE PARA CREDITO FISCAL </label>
  <div class="col-sm-1">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>

</form>


<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-10 col-form-label bg-primary text-white "> TOTAL A PAGAR </label>
  <div class="col-sm-2">
    <input type="text" class="form-control" id="colFormLabel" placeholder="">
  </div>
</div>
<div class="row mb-1">
  <label for="colFormLabel" class="col-sm-1 col-form-label bg-primary text-white "> Literal: </label>
  <div class="col-sm-7">
  <label for="colFormLabel" class="col-sm-11 col-form-label "> VENTITRES CON 10/100 BOLIVIANOS </label>
  </div>
</div>

<div class="container">
  <div class="row row-cols-2">
    <div class="col"><div class="row mb-1">
  <label for="colFormLabel" class="col-sm-4 col-form-label "> Codigo de Control: </label>
  <div class="col-sm-7">
     <input type="text-number" class="form-control" id="colFormLabel" name="codigo_cont">
  </div>
</div></div>
    <div class="col"> 
      
      <?php
    if(isset($_POST["boton"])){

      //$dato=$_POST["dato"];
        $d1=strtoupper(substr($_POST["nit"] ,0,1));
        $d2=strtoupper(substr($_POST["factura"],0,1 ));
        $d3=strtoupper(substr($_POST["autorizacion"],0,1 ));
        $d4=strtoupper(substr($_POST["fecha_em"],0,1 ));
        $d5=strtoupper(substr($_POST["codigo_cont"] ,0,1));
        $codigo = $d1.$d2.$d3.$d4.$d5;
       // echo $codigo;
      echo"<img src='codigo_qr/qr_img.php?d=".$codigo."'>";
      }
    ?>
    </div>
    
  </div>
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="boton">PROCESAR</button>
  </div>

</div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>