<?php
// include('command.php');

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ESI</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="image/photo.jpg" type="imagegif">
  <style>
  #form{
    border: 1px ;
    margin-top: 50px;
    border-radius: 15px;
    box-shadow: 1px 1px 50px black;
    background-color: white
  }
  th{
    background-color: #2A926E;
    color: white
  }
  label{
    color: black
  }
  #btn{
    margin-top: 25px
  }
  .title{
    color:black
  }
  #hide{
    display: none
  }

  </style>


   </head>
   <body>


   <!-- <form class="form col-md-8 col-md-offset-2"  id="form" method="post" >
    <h1 class="text-center title">Entrez vos coordonnées</h1>

    <div class="form-group col-md-6">
    <label for="usr">Depart:</label>
    <input type="text" class="form-control" id="usr" name="depart" placeholder="Depart">
    </div>
    <div class="form-group col-md-6">
      <select class="form-control form-control-lg">

        <option>PALETTE</option>
        <option>COLIS</option>
        <option>AUTRE</option>

      </select>

    </div>

    <div class="form-group col-md-6">
    <label for="usr">Arriver:</label>
    <input type="text" class="form-control" id="usr" name="arriver" placeholder="Arriver">
    </div>

    <label for="usr">DATE:</label>
    <input id="date" type="text" value="<?php echo date('Y-m-d');?>">



    <div class="form-group col-md-6">
    <label for="usr">horaires:</label>
    <input type="time" class="form-control" id="usr" name="horaires" value="<?php echo date('H:i');?>">
    </div>


    <div class="form-group col-md-6">
    <label for="usr">Id_client:</label>
    <input type="text" class="form-control" id="usr" name="Id_client" placeholder="Id_client">
    </div>






    <div class="form-group  col-md-6 col-sm-6 col-xs-12 " id="btn">
        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
        <br/>
        <br/>
        <br/>
    </div>




    </form> -->
    <form class="form col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2"  id="form" method="post" >
          <h1 class="text-center title">Entrez vos informations</h1>

        <!-- <div class="form-group col-md-6">
        <label for="usr">Depart:</label>
        <input type="text" class="form-control" id="usr" name="depart" placeholder="depart"  required>
        </div> -->
        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Depart:</label>
          <select class="form-control form-control-lg">

            <option>Roissy</option>
            <option>Saint-denis </option>


          </select>

        </div>
        <!-- <div class="form-group col-md-6">
        <label for="usr">Arrivée:</label>
        <input type="text" class="form-control" id="usr" name="arrivee" placeholder="arrivee"  required>
        </div> -->
        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Arrivée:</label>
          <select class="form-control form-control-lg">

            <option>Villepinte</option>
            <option>Versaille </option>
            <option>Palais De Justice</option>


          </select>

        </div>

        <div class="form-group col-md-6 col-sm-6 ">
        <label for="usr">DATE:</label>
        <input id="date" class="form-control" type="text" value="<?php echo date('d-m-Y');?>">
        </div>

        <!-- <div class="form-group col-md-6">
        <label for="usr">horaires:</label>
        <input type="time" class="form-control" id="usr" name="horaires" value="<?php echo date('H:i');?>">
        </div> -->
        <div class="form-group col-md-6 col-sm-6 ">
          <label for="">Horaires:</label>
          <select class="form-control form-control-lg">

            <option>09H-11H</option>
            <option>11H-13H</option>
            <option>14H-16H</option>
            <option>16H-18H</option>


          </select>

        </div>

        <!-- <div class="form-group col-md-6">
        <label for="usr">Adresse:</label>
        <input type="text" class="form-control" id="usr" name="adresse" placeholder="Adresse"  required>
        </div> -->

        <!-- <div class="form-group col-md-6">
        <label for="usr">Ville:</label>
        <input type="text" class="form-control" id="usr" name="ville" placeholder="Ville"  required>
        </div>

        <div class="form-group col-md-6">
        <label for="usr">Pays:</label>
        <input type="text" class="form-control" id="usr" name="pays" placeholder="Pays"  required>
        </div>

        <div class="form-group col-md-6">
        <label for="usr">Tél Fix:</label>
        <input type="text" class="form-control" id="usr" name="telfix" placeholder="Tél Fix"  required>
        </div>

        <div class="form-group col-md-6">
        <label for="usr">Tél:</label>
        <input type="text" class="form-control" id="usr" name="tel" placeholder="Tél"  required>
        </div>

        <div class="form-group col-md-6">
        <label for="usr">Société:</label>
        <input type="text" class="form-control" id="usr" name="societe" placeholder="Société"  required>
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="depart">Depart</label>
        <input type="text" class="form-control" id="depart"
        placeholder="depart" name="depart" value="<?php echo $_GET['depart'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="arriver" class="dow">Arriver</label>
        <input type="text" class="form-control" id="arriver"
         placeholder="arriver" name="arriver" value="<?php echo $_GET['arriver'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="hauteur">Hauteur</label>
        <input placeholder="hauteur" name="hauteur" onkeyup="calcul()" value="<?php echo $_GET['hauteur'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="largeur" class="dow">Largeur</label>
        <input type="text" class="form-control " id="largeur"
        placeholder="largeur" name="largeur" onkeyup="calcul()" value="<?php echo $_GET['largeur'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="profondeur">Profondeur</label>
        <input type="text" class="form-control" id="profondeur"
        placeholder="profondeur" name="profondeur" onkeyup="calcul()" value="<?php echo $_GET['profondeur'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="nombre" class="dow">Nombre</label>
        <input type="text" class="form-control " id="nombre"
        placeholder="nombre" name="nombre" onkeyup="calcul()" value="<?php echo $_GET['nombre'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" id="prix"
        placeholder="prix" name="prix" onkeyup="calcul()" value="<?php echo $_GET['prix'] ?>">
        </div>

        <div class="form-group col-md-6" id="hide">
        <input class="form-control form-control-lg"  name="horaires"
        value="<?php echo $_GET['horaires']?>">


        </div> -->



        <div class="form-group  col-md-6 col-sm-6 col-xs-12 " id="btn">
            <button type="submit" class="btn btn-primary" name="submit">Send</button>
        </div>

        </form>

  </body>
  </html>
