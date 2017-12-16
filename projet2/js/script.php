<script type="text/javascript">
function calcul(){

var longer = ((document.getElementById('longueur')||{}).value)||"";
var larger = ((document.getElementById('largeur')||{}).value)||"";
var hauter = ((document.getElementById('hauteur')||{}).value)||"";
var vol = ((document.getElementById('volume')||{}).value = parseInt(longer * larger * hauter))||"";
var nomb = ((document.getElementById('nombre')||{}).value)||"";
var poids = ((document.getElementById('poids')||{}).value = vol * 300 )||"";
var total = ((document.getElementById('total')||{}).value = (poids) + (vol))||"";
var con = ((document.getElementById('conditionnement')||{}).value)||"";
var cond =(( document.getElementById('cond')||{}).value = con)||"";
// var all_tot = document.getElementById('all-totals').value = (total);
if(isNaN(nomb)){
  alert('Vous pouvez utiliser seulement des numéros pour compléter les cases! ');


};

};

calcul();



function genPDF(){

var pdf = new jsPDF();
var name = $('#prenom').val();
var lastname = $('#nom').val();
var email = $('#mail').val();
var adresse = $("#adresse").val();
var city = $('#ville').val();
var country = $('#pays').val();
var telfix = $('#telfix').val();
var tel = $('#tel').val();
var society = $('#societe').val();
var destination = $('#destination').val();
var nameslon = $('#nomsalon').val();
var stall = $('#stand').val();
var date = $('#date').val();
var hours = $('#horaires').val();
var conditioning = $('#conditionnement').val();
var total = $('#total').val();



var img = new Image();
img.onload = function() {
  pdf.addImage(this, 1, 4, 47,30);


  pdf.setFontSize(10);
  pdf.setTextColor(98, 102, 109);
  pdf.text(45,10, '2 rue de Meunier - BP 65065 ROISSY EN FRANCE');
  pdf.text(45,15, '95970 ROISSY CDG CEDEX - France');
  pdf.setFontSize(12);
  pdf.setFontType("bold");
  pdf.text(45,21, 'Tél. :33(0)1.3992.8788 - Fax : 33(0)1.3011.5252');
  pdf.text(45,26, 'E-mail : finance@group-esi.com');
  pdf.setFontSize(10);
  pdf.setFontType("normal");
  pdf.text(45,32, 'www.group-esi.com');

  pdf.setFontSize(8);
  pdf.setFontType("normal");
  pdf.setTextColor(98, 102, 109);
  pdf.text(165,8, 'SAS au capital de 1 106 250 €');
  pdf.text(173,13, 'Siret : 33094312700051');
  pdf.text(182,18, 'RCS 84.B.10958');
  pdf.text(187,23, 'NAF : 5229B');
  pdf.text(172,28, 'TVA : FR55 330 943 127');
  pdf.line(205, 35, 5, 35);

  pdf.setFontSize(20);
  pdf.setTextColor(12, 12, 12);
  pdf.setFontType("bold");
  pdf.text(10, 44, 'Facture n°F010203');

  pdf.setFontSize(10);
  pdf.setFontType("normal");
  pdf.setFontType("bold");
  pdf.text(10,52,'Nom:');
  pdf.setFontType("normal");
  pdf.text(25, 52, lastname);

  pdf.setFontType("bold");
  pdf.text(10,57,'Prénom:');
  pdf.setFontType("normal");
  pdf.text(25, 57, name);

  pdf.setFontType("bold");
  pdf.text(10,62,'E-mail:');
  pdf.setFontType("normal");
  pdf.text(25, 62, email );

  pdf.setFontType("bold");
  pdf.text(10,68,'Adresse:');
  pdf.setFontType("normal");
  pdf.text(26, 68, adresse );

  pdf.setFontType("italic");
  pdf.setFontSize(9);
  pdf.text(27, 73, city );
  pdf.text(40, 73, country );

  pdf.setFontSize(10);

  pdf.setFontType("bold");
  pdf.text(90,52,'Tél-fix:');
  pdf.setFontType("normal");
  pdf.text(105, 52, telfix );

  pdf.setFontType("bold");
  pdf.text(90,57,'Mobile:');
  pdf.setFontType("normal");
  pdf.text(105, 57, tel );

  pdf.setFontType("bold");
  pdf.text(90,62,'Société:');
  pdf.setFontType("normal");
  pdf.text(105, 62, society );






  // pdf.setFontSize(9);
  // pdf.text(90,90, name);


  pdf.save("test.pdf");
}
img.crossOrigin = "";  // for demo as we are at different origin than image
img.src = "image/esi.jpeg";

}
</script>
