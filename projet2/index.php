<?php
// include('api.php');
include('js/script.php');

if(isset($_POST['submit'])){

  $cond = $_POST['cond'];

  $longueur = $_POST['longueur'];
  $largeur = $_POST['largeur'];
  $hauteur = $_POST['hauteur'];

  $poids = $_POST['poids'];
  $total = $_POST['total'];
  header('location:affiche.php?cond='.$cond.'&total='.$total);


};


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
      border-radius: 20px;
      background-color: #1d3a70

    }
    .inp{
      height: 40px;
      border-radius: 5px;
      box-shadow: 1px 1px 10px black;
      text-align: center;
      width: 100%


    }

    #total{
      height: 40px;
      border-radius: 5px;
      box-shadow: 1px 1px 10px black;
      text-align: center;
      display: none;


    }


    .b-inps{
      text-align: center;

    }
    .number,.condition{
      color: white
    }
    h1{
      font-size: 4.4vw;
      font-weight: bold;
      color: white
    }
    label{

    }
    #cond{
      display: none;
    }
    @media only screen and (min-width:380px) and (max-width: 768px){
      /*.inp{
        width: 200%
      }*/

    }

  </style>
  <body>
    <div class="form-group container " >

      <div class="col-md-4 col-sm-6 col-xs-6 col-md-offset-4 col-sm-offset-3 col-xs-offset-3 bien">


    <h1 class="text-center">Bienvenue</h1>




  <form method="post"  >


    <div class="form-group col-md-12">

      <label class="number">Nombre</label>
      <input type="number" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
    </div>



    <div class="form-group  col-md-12">
        <button type="submit" class="btn btn-success" name="valid">Valider</button>
        </div>
        <?php
          if(isset($_POST['valid'])){
            echo '<div class="form-group col-md-12">
              <label class="condition">Conditionnement</label>
              <select class="form-control form-control-lg" name="conditionnement" id="conditionnement">

                <option>PALETTE</option>
                <option>COLIS</option>
                <option>CARTON</option>
                <option>FARDEAU</option>
                <option>AUTRE</option>

              </select>

            </div>';


          }
          ?>

    </div>

</div>




  </form>

</div>
<div class="container" >

  <div  class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0   b-inps well" >


  <?php
    if(isset($_POST['valid'])){

   for($i=0;$i<$_POST["nombre"];$i++){




     echo '<form  class="form form-inline container col-md-12 col-md-offset-1 col-xs-12 col-sm-offset-1 col-sm-12 "  method="post" >';




     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="calcul()" >

     <label>Longueur(en m):</label>
     <input type="number" class="inp"  placeholder="longueur" name="longueur"  id="longueur"   required>
     </div>
     ';




     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="calcul()">
     <label>Largeur(en m):</label>
     <input type="number" class="inp"   placeholder="largeur" name="largeur"   id="largeur"   required >
     </div>
     ';

     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="calcul()">
     <label>Hauteur(en m):</label>
     <input type="number" class="inp"   placeholder="hauteur" name="hauteur"   id="hauteur"   required >
     </div>
     ';


     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="calcul()">
     <label>Volume(en m3):</label>
     <input type="number" class="inp"   placeholder="volume" name="volume"     id="volume"      disabled >
     </div>
     ';

     echo'<div class="form-group col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-6 col-xs-offset-3" onkeyup="calcul()">
     <label>Poids en kg:</label>
     <input type="number" class="inp"   placeholder="poids" name="poids"       id="poids"       required>
     </div>
     ';

     echo "<br/>";
     echo "<br/>";
     echo "<br/>";
     echo "<br/>";
     echo "<br/>";


  // echo '<a href="affiche.php" class="btn btn-primary btn-lg col-md-4 col-md-offset-4">OK</a>';

 }

echo '

<input type="text" placeholder="Total" name="total"  id="total"   onkeyup="calcul()">

';
 echo '<input type="text" onkeyup="calcul()" id="cond" name="cond">';
echo '<input type="submit" value="Envoyer" class="btn btn-primary btn-lg col-md-2 col-md-offset-4" name="submit"  >';
echo "</form>";


}





  ?>
    </div>
  </div>

  </body>



</html>
