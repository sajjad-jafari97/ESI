<?php

include('js/script.php');

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESI</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="image/photo.jpg" type="imagegif">
  </head>
  <style media="screen">
    .bien{

      box-shadow: 1px 1px 50px black;
      margin-top: 20px;
      border-radius: 20px
    }
    .inp{
      height: 40px;
      border-radius: 5px;
      box-shadow: 1px 1px 10px black;
      text-align: center;


    }
    .b-inps{
      text-align: center;

    }
    h1{
      font-size: 4.4vw;
      font-weight: bold;
      color: #21637c
    }
    @media only screen and (min-width: 768px){
      .inp{
        width: 20%
      }

    }

  </style>
  <body>
    <div class="form-group container" >

      <div class="col-md-4 col-sm-6 col-xs-6 col-md-offset-4 col-sm-offset-3 col-xs-offset-3 bien">


    <h1 class="text-center">Bienvenue</h1>




  <form method="post" >

    <div class="form-group col-md-12">
      <label for="">Produit</label>
      <select class="form-control form-control-lg">

        <option>PALETTE</option>
        <option>COLIS</option>
        <option>AUTRE</option>

      </select>

    </div>
    <div class="form-group col-md-12">

      <label class="">Nombre</label>
      <input type="number" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
    </div>


    <div class="form-group  col-md-12">
        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
        </div>

    </div>

</div>




  </form>

</div>
<div class="container" >

  <div  class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2   b-inps well" >


  <?php
    if(isset($_POST['submit'])){
   for($i=0;$i<$_POST["nombre"];$i++){


     echo '<form  class="form"  method="post" >';

     echo'<input type="number" class="inp"  placeholder="longueur" name="longueur"  id="longueur"  onkeyup="calcul()" required>';

     echo'<input type="number" class="inp"   placeholder="largeur" name="largeur"   id="largeur"   onkeyup="calcul()" required >';

     echo'<input type="number" class="inp"   placeholder="hauteur" name="hauteur"   id="hauteur"   onkeyup="calcul()" required >';

     echo'<input type="number" class="inp"   placeholder="volume" name="volume"     id="volume"    onkeyup="calcul()" required>';

     echo'<input type="number" class="inp"   placeholder="total" name="total"       id="total"     onkeyup="calcul()" disabled  value="0" required>';


     echo'<br/>';
     echo'<br/>';

   }
   echo '<input type="number" placeholder="Total" class="inp" id="all-totals" onkeyup="calcul()" disabled>';
   echo "<br>";
   echo "<br>";
  //  echo '<input type="button" value="Send" class="btn btn-primary btn-lg" name="send">';
  echo '<a href="affiche.php" class="btn btn-primary btn-lg">OK</a>';

   echo "</form>";
}




  ?>
    </div>
  </div>

  </body>




</html>
