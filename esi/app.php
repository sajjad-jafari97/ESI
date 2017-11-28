<script type="text/javascript">
function calcul(){
var larger = document.getElementById('largeur').value;
var hauter = document.getElementById('hauteur').value;
var nomb = document.getElementById('nombre').value;
var pro = document.getElementById('profondeur').value;
var price = document.getElementById('prix').value = (larger * hauter) + (nomb * pro);
if(isNaN(larger) || isNaN(hauter)){
  alert('Vous pouvez utiliser seulement des numéros pour compléter les cases! ')
}







}

calcul();
</script>
