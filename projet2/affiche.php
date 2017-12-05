<?php
include('command.php');

 ?>
 <!DOCTYPE html>
 <html>                            
   <head>
     <meta charset="utf-8">
     <title></title>

   </head>
   <body>


   <form class="form col-md-8 col-md-offset-2"  id="form" method="post" >
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

    <?php

     for($i=0;$i<$_POST['nombre'];$i++){


       echo'<input type="text" placeholder="hauteur" name="hauteur">';
       echo'<input type="text" placeholder="largeur" name="largeur">';
       echo'<input type="text" placeholder="profondeur" name="profondeur">';

       echo'<br/>';
     }

    ?>


    </form>


  </body>
  </html>
