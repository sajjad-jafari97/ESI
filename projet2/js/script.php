<script type="text/javascript">
function calcul(){
var longer = document.getElementById('longueur').value;
var larger = document.getElementById('largeur').value;
var hauter = document.getElementById('hauteur').value;
var vol = document.getElementById('volume').value;
var nomb = document.getElementById('nombre').value;
var total = document.getElementById('total').value = parseInt(longer * larger) + parseInt(hauter * vol);
// var all_tot = document.getElementById('all-totals').value = (total);
if(isNaN(nomb)){
  alert('Vous pouvez utiliser seulement des numéros pour compléter les cases! ');


}

}





</script>
