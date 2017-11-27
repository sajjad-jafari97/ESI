<script type="text/javascript">
function calcul(){
var larger = document.getElementById('largeur').value;
var hauter = document.getElementById('hauteur').value;
var nomb = document.getElementById('nombre').value;
var pro = document.getElementById('profondeur').value;
var price = document.getElementById('prix').value = (larger * hauter) + (nomb * pro);
if(isNaN(larger) || isNaN(hauter)){
  alert('You have to use the number to complete the inputs!!!!!!! ')
}







}

calcul();
</script>
