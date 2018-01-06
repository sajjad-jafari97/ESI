<?php
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="image/photo.jpg" type="imagegif">
  </head>
  <style media="screen">

    body{
      background-color: #d0d6e0;
    }

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


  </style>
  <body>
    <div class="form-group container " >

      <div class="col-md-4 col-sm-6 col-xs-6 col-md-offset-4 col-sm-offset-3 col-xs-offset-3 bien">


    <h1 class="text-center">Bienvenue</h1>




  <form method="post">

    <div class="form-group col-md-12">
      <label class="condition">Conditionnement</label>
<select class="form-control form-control-lg conditionnement" id="conditionnement" name="conditionnement"  onchange="changeVal()" required >

        <option></option>
        <option>PALETTE</option>
        <option>COLIS</option>
        <option>CARTON</option>
        <option>FARDEAU</option>
        <option>AUTRE</option>

      </select>

    </div>

    <div class="form-group col-md-12">

      <label class="number">Nombre</label>
      <input type="number" class="form-control nombre" id="nombre" placeholder="nombre" name="nombre" required>
    </div>



    <div class="form-group  col-md-12">
        <button type="submit" class="btn btn-success" name="valid">Valider</button>
        </div>



    </div>

</div>




  </form>

</div>
<div class="container" >

  <div  class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0   b-inps well" >


  <?php
    if(isset($_POST['valid'])){

   for($i=0;$i<$_POST["nombre"];$i++){

     if ($i==5)
        break;




     echo '<form  class="form form-inline container col-md-12 col-md-offset-1 col-xs-12 col-sm-offset-1 col-sm-12 "  method="post" >';


     echo '<div id="'.$i.'" class="boite">';

     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6 "  onkeyup="functionName()" >

     <label>Longueur(en m):</label>
     <input type="text" class="inp longueur" id="longueur"  placeholder="longueur" name="longueur"   required>
     </div>
     ';




     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="functionName()">
     <label>Largeur(en m):</label>
     <input type="text" class="inp largeur" id="largeur"  placeholder="largeur" name="largeur"    required>
     </div>
     ';

     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="functionName()">
     <label>Hauteur(en m):</label>
     <input type="text" class="inp hauteur" id="hauteur"  placeholder="hauteur" name="hauteur"   required>
     </div>
     ';


     echo'<div class="form-group col-md-2 col-sm-2 col-xs-6" onkeyup="functionName()">
     <label>Volume(en m3):</label>
     <input type="text" class="inp volume" id="volume"  placeholder="volume" name="volume"       disabled >
     </div>
     ';

     echo'<div class="form-group col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-6 col-xs-offset-3" onkeyup="functionName()">
     <label>Poids en kg:</label>
     <input type="text" class="inp poids" id="poids"  placeholder="poids" name="poids"  disabled>
     </div>
     ';

     echo "<br/>";
     echo "<br/>";
     echo "<br/>";
     echo "<br/>";
     echo "<br/>";



 }

echo '<input type="text" placeholder="Total" name="total" id="total" class="total"  onkeyup="functionName()">';

echo '<input type="text" class="cond" onkeyup="functionName()" id="cond" name="cond" >';


echo '<input type="submit" value="Envoyer" class="btn btn-primary btn-lg col-md-2 col-md-offset-4" name="submit"  >';

echo "</div>";
echo "</form>";


}





  ?>
    </div>
  </div>
  <script type="text/javascript">
    functionName()

let toto = sessionStorage.getItem("conditionnement")
    if (toto) {
      $('.cond').val(toto);
    }

    let sasa = sessionStorage.getItem("nombre")
        if (sasa) {
          $('.numb').val(sasa);
        }
  </script>
  </body>



</html>
