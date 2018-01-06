<script type="text/javascript">
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
var namesalon = $('#nomsalon').val();
var stall = $('#stand').val();
var date = $('#date').val();
var hours = $('#horaires').val();
var conditioning = $('#conditionnement').val();
var totale = $('#total').val();



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
  pdf.text(163,8, 'SAS au capital de 1 106 250 €');
  pdf.text(171,13, 'Siret : 33094312700051');
  pdf.text(180,18, 'RCS 84.B.10958');
  pdf.text(185,23, 'NAF : 5229B');
  pdf.text(170,28, 'TVA : FR55 330 943 127');
  pdf.line(205, 38, 5, 38);

  pdf.setFontSize(20);
  pdf.setTextColor(12, 12, 12);
  pdf.setFontType("bold");
  pdf.text(14, 47, 'Facture n°F010203');

  pdf.setFontSize(10);
  pdf.setFontType("normal");
  pdf.setFontType("bold");
  pdf.text(14,55,'Nom:');
  pdf.setFontType("normal");
  pdf.text(30, 55, lastname);

  pdf.setFontType("bold");
  pdf.text(14,62,'Prénom:');
  pdf.setFontType("normal");
  pdf.text(30, 62, name);

  pdf.setFontType("bold");
  pdf.text(14,69,'E-mail:');
  pdf.setFontType("normal");
  pdf.text(30, 69, email );

  pdf.setFontType("bold");
  pdf.text(14,76,'Adresse:');
  pdf.setFontType("normal");
  pdf.text(30, 76, adresse );

  pdf.setFontType("italic");
  pdf.setFontSize(9);
  pdf.text(31, 81, city );
  pdf.text(44, 81, country );

  pdf.setFontSize(10);

  pdf.setFontType("bold");
  pdf.text(130,55,'Tél-fix:');
  pdf.setFontType("normal");
  pdf.text(146, 55, telfix );

  pdf.setFontType("bold");
  pdf.text(130,62,'Mobile:');
  pdf.setFontType("normal");
  pdf.text(146, 62, tel );

  pdf.setFontType("bold");
  pdf.text(130,69,'Société:');
  pdf.setFontType("normal");
  pdf.text(146, 69, society );

  pdf.setFontType("bold");
  pdf.text(130,76,'Date:');
  pdf.setFontType("normal");
  pdf.text(146, 76, date );

  pdf.setFontSize(18);
  pdf.setTextColor(12, 12, 12);
  pdf.setFontType("bold");
  pdf.text(14 , 95, 'Dossier n° EXE102030');

  pdf.setFontSize(10);
  pdf.setTextColor(12, 12, 12);
  pdf.setFontType("bold");
  pdf.text(105 , 93, 'Affaire suivie par : LABARRERE Laurent');




  pdf.line(205, 99, 5, 99);
  pdf.line(5, 99, 5, 124);// the first one on the left
  pdf.line(205, 110, 5, 110);
  pdf.line(205, 124, 5, 124);
  pdf.line(88, 99, 88, 124);
  pdf.line(45, 99, 45, 124); // the third one
  pdf.line(128, 99, 128, 124); // the forth one
  pdf.line(156, 99, 156, 124); // the fifth one
  pdf.line(205, 99, 205, 124);// the last one at the end

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(10,106,'conditionnement');
  pdf.setFontType("normal");
  pdf.setFontSize(10);
  pdf.text(15, 118, conditioning );

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(54,106,'Destination');
  pdf.setFontType("normal");
  pdf.setFontSize(10);
  pdf.text(50, 118, destination );

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(95,106,'Nom du salon');
  pdf.setFontType("normal");
  pdf.setFontSize(10);
  pdf.text(95, 118, namesalon );

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(136,106,'stand');
  pdf.setFontType("normal");
  pdf.setFontSize(10);
  pdf.text(139, 118, stall );

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(160,106,'Montant de la prestation');
  pdf.setFontType("bold");
  pdf.setFontSize(10);
  pdf.text(165, 118, totale );

  pdf.line(205, 135, 5, 135);
  pdf.line(5, 135, 5, 190);// the first one on the left
  pdf.line(205, 142, 5, 142);
  pdf.line(205, 190, 5, 190);
  pdf.line(105, 135, 105, 190);
  pdf.line(125, 135, 125, 190);
  pdf.line(155, 135, 155, 190); // the third one
  pdf.line(175, 135, 175, 190);
  pdf.line(205, 135, 205, 190);// the last one at the end

  pdf.setFontType("bold");
  pdf.setFontSize(10);
  pdf.text(10, 140,'Désignation ');
  pdf.setFontType("normal");
  pdf.setFontSize(8);
  pdf.text(10,150,'TRANSPORT ORSAY RENDU A ROISSY CDG');
  pdf.text(10,155,'AIRFREIGHT - [CDG-NRT] [[3.50/Kg All in]');
  pdf.text(10,160,'Création Carnet ATA [Hors frais chambre de Commerce)');
  pdf.text(10,165,'Frais Cautionnement Chambre de Commerce');
  pdf.text(10,170,'Dédouanement Export');
  pdf.text(10,175,'Dédouanement Import');
  pdf.text(10,180,'Terminal Handling Charge [0.40€/kg] (minimum 150) ');
  pdf.text(10,185,'Customs Inspections and Quarantine Fee (si applicable: 650€)  ');

  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(112, 140,'Qté');
  pdf.setFontType("normal");
  pdf.setFontSize(8);
  pdf.text(112, 150, '1,00 ');
  pdf.text(112, 155, '1,00 ');
  pdf.text(112, 160, '1,00 ');
  pdf.text(112, 165, '1,00 ');
  pdf.text(112, 170, '1,00 ');
  pdf.text(112, 175, '1,00 ');
  pdf.text(112, 180, '1,00 ');
  pdf.text(112, 185, '1,00 ');

  pdf.setFontType("bold");
  pdf.setFontSize(10);
  pdf.text(134, 140,'P.U. HT');
  pdf.setFontType("normal");
  pdf.setFontSize(8);
  pdf.text(134, 150,'250,00 €');
  pdf.text(134, 155,'371,00 €');
  pdf.text(134, 160,'300,00 €');
  pdf.text(134, 165,'168,00 €');
  pdf.text(134, 170,'100,00 €');
  pdf.text(134, 175,'200,00 €');
  pdf.text(134, 180,'150,00 €');
  pdf.text(134, 185,'280,00 €');



  pdf.setFontType("bold");
  pdf.setFontSize(10);
  pdf.text(161, 140,'TVA');
  pdf.setFontType("normal");
  pdf.setFontSize(8);
  pdf.text(161, 150,'C20');
  pdf.text(161, 155,'C20');
  pdf.text(161, 160,'C20');
  pdf.text(161, 165,'C20');
  pdf.text(161, 170,'C20');
  pdf.text(161, 175,'C20');
  pdf.text(161, 180,'C20');
  pdf.text(161, 185,'C20');

  pdf.setFontType("bold");
  pdf.setFontSize(10);
  pdf.text(181, 140,'Montant HT');
  pdf.setFontType("normal");
  pdf.setFontSize(8);
  pdf.text(181, 150,'250,00 €');
  pdf.text(181, 155,'371,00 €');
  pdf.text(181, 160,'300,00 €');
  pdf.text(181, 165,'168,00 €');
  pdf.text(181, 170,'100,00 €');
  pdf.text(181, 175,'200,00 €');
  pdf.text(181, 180,'150,00 €');
  pdf.text(181, 185,'280,00 €');


  pdf.line(175, 200, 37, 200);
  pdf.line(37, 200, 37, 235);// the first one on the left
  pdf.line(175, 235, 37, 235);
  pdf.line(175, 200, 175, 235);


  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(55, 205, 'Conditions de règlement :');
  pdf.setFontSize(10);
  pdf.setFontType("bold");
  pdf.text(55, 215, 'Echéance');
  pdf.text(88, 215, 'Mode de règlement');
  pdf.text(139, 215, 'Montant');
  pdf.setFontSize(9);
  pdf.setFontType("normal");
  pdf.text(55, 222, date);
  pdf.text(95, 222, 'Chèque ');
  pdf.text(139, 222, '2057,59 €');

  pdf.line(205, 245, 5, 245);
  pdf.line(205, 255, 5, 255);
  pdf.line(5, 255, 5, 245);
  pdf.line(45, 255, 45, 245);
  pdf.line(100, 255, 100, 245);
  pdf.line(165, 255, 165, 245);
  pdf.line(205, 255, 205, 245);


  pdf.setFontSize(8);
  pdf.setFontType("bold");
  pdf.text(10, 251,'Banque : CIC EST');
  pdf.text(48, 251,'RIB : 30087 33831 00022777301 19 ');
  pdf.text(104, 251,'IBAN : FR76 3008 7338 3100 0227 7730 119 ');
  pdf.text(172, 251,'Code BIC : CMCIFRPP');





  pdf.save("test.pdf");
}
img.crossOrigin = "";  // for demo as we are at different origin than image
img.src = "image/esi.jpeg";

}
</script>
