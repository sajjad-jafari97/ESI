
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
// function calcul(){
//
// var longer = ((document.getElementById('longueur')||{}).value)||"";
// var larger = ((document.getElementById('largeur')||{}).value)||"";
// var hauter = ((document.getElementById('hauteur')||{}).value)||"";
// var vol = ((document.getElementById('volume')||{}).value = parseInt(longer * larger * hauter))||"";
// var nomb = ((document.getElementById('nombre')||{}).value)||"";
// var poids = ((document.getElementById('poids')||{}).value = vol * 300 )||"";
// var total = ((document.getElementById('total')||{}).value = (poids) + (vol))||"";
// var con = ((document.getElementById('conditionnement')||{}).value)||"";
// var cond =(( document.getElementById('cond')||{}).value = con)||"";
// // var all_tot = document.getElementById('all-totals').value = (total);
// if(isNaN(nomb)){
//   alert('Vous pouvez utiliser seulement des numéros pour compléter les cases! ');
//
//
// };
//
// };

// calcul();

function functionName() {
  let cal = $('.boite').length;

  for (var i = 0; i <= cal; i++) {

    let long = $('#'+i+' .longueur').val();
    let larger = $('#'+i+' .largeur').val();
    let hauter = $('#'+i+' .hauteur').val();
    let vol = $('#'+i+' .volume').val((long * larger * hauter));
    let poid = $('#'+i+' .poids').val((long * larger * hauter) * 300);
    // console.log($('#'+i+' .volume').val());
    // console.log(poid);
    let total = $('#'+i+' .total').val(($('#'+i+' .volume').val() + $('#'+i+' .poids').val()));

  }

}





function changeVal()
{
  if ($('.conditionnement').val()){
    sessionStorage.setItem("conditionnement", $('.conditionnement').val());
  }
}

if (!$('.conditionnement').val()){

  let toto = sessionStorage.getItem("conditionnement")
  $('.cond').val(toto);
}









function gardeVal()
{
  if ($('.nombre').val()){
    sessionStorage.setItem("nombre", $('.nombre').val());
  }
}

if (!$('.nombre').val()){
  console.log('sasa')
  let sasa = sessionStorage.getItem("nombre")
  console.log(sasa)
  $('.numb').val(sasa);
}
</script>
