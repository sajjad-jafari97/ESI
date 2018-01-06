<?php

if(isset($_POST['submit'])){

  $cond = $_POST['cond-affiche'];
  $total = $_POST['total-affiche'];
  $destination = $_POST['destination'];
  $nomsalon = $_POST['nomsalon'];
  $stand = $_POST['stand'];
  $date = $_POST['date'];
  $horaires = $_POST['horaires'];





  header('location:coordonnees.php?cond='.$cond.'&total='.$total.'&destination='.$destination.
  '&nomsalon='.$nomsalon.'&stand='.$stand.'&date='.$date.'&horaires='.$horaires);


};

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ESI</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="icon" href="image/photo.jpg" type="imagegif">
  <style>

  body{
    background-color: #d0d6e0;
  }
  #form{
    border: 1px ;
    margin-top: 50px;
    border-radius: 15px;
    box-shadow: 1px 1px 50px black;
    background-color: #1d3a70;

  }
  th{
    background-color: #1d3a70;
    color: white
  }
  label{
    color:white
  }
  #btn{
    margin-top: 25px;
  }
  .title{
    color:white
  }
  #hide{
    display: none
  }

  </style>


   </head>
   <body>

    <form class="form col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2"  id="form" method="post" >
          <h1 class="text-center title">Entrez vos informations</h1>



        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Destination:</label>
          <select id="destination" class="form-control form-control-lg" name="destination">

            <option>Porte de villepinte</option>
            <option>Planete des congrès</option>
            <option>Porte de versailles</option>



          </select>

        </div>


        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Nom du salon:</label>
          <input id="nom-du-salon" class="form-control" type="text"  name="nomsalon" required>

        </div>

        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Stand:</label>
          <input id="stand" class="form-control" type="text" name="stand"  required>

        </div>

        <div class="form-group col-md-6 col-sm-6 ">
        <label for="usr">Date de livraison sur stand:</label>
        <input id="date" class="form-control" type="date" name="date" required>
        </div>



        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Horaires de livraison sur stand:</label>
          <select class="form-control form-control-lg" name="horaires">

            <option>09H-11H</option>
            <option>11H-13H</option>
            <option>14H-16H</option>
            <option>16H-18H</option>


          </select>

        </div>



        <div class="form-group col-md-6" id="hide">
        <label for="conditionnement">conditionnement</label>
        <input type="text" class="form-control" id="conditionnement"
        placeholder="conditionnement" name="cond-affiche" value="<?php echo $_GET['cond'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="totalt">total</label>
        <input type="text" class="form-control" id="total"
        placeholder="total" name="total-affiche" value="<?php echo $_GET['total'] ?>">
        </div>

        <div class="form-group  col-md-6 col-sm-6 col-xs-12 " id="btn">
            <button type="submit" class="btn btn-success" name="submit">Valider</button>
        </div>

        </form>

  </body>
  </html>
