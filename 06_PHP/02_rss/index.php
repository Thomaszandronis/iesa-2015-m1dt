<?php

$actus = array(	
	'title' =>'Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon',
	'link' =>'http://www.lequipe.fr/Football/Actualites/Vahid-halilhodzic-appelle-31-joueurs-pour-ses-premiers-matches-avec-le-japon/544304#xtor=RSS-1',
	'description' => 'Nommé officiellement sélectionneur du Japon le 12 mars, Vahid... ',
	'pubDate' => 'Thu, 19  Mar 2015 10:40:00 +0100');;

var_dump($actus);;




?>


<?php
$actus2 = array();;

$actus2['title'] = 'Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon';
$actus2['link'] = 'http://www.lequipe.fr/Football/Actualites/Vahid-halilhodzic-appelle-31-joueurs-pour-ses-premiers-matches-avec-le-japon/544304#xtor=RSS-1';
$actus2['description'] = 'Nommé officiellement sélectionneur du Japon le 12 mars, Vahid... ';
$actus2['pubDate'] = 'Thu, 19  Mar 2015 10:40:00 +0100';;

echo $actus2['title'];;

var_dump($actus2);;

$tab = array();

$tab[] = "a";
$tab[] = "b";
$tab[0] = "c";

var_dump($tab);



function creerHtmlPour($actualite){
	$html = '';
	foreach ($actualite as $key => $value) {
		$html .= "<td>" . $value . "</td>";;
		var_dump($html);;

	}
	return "<tr>".
	$html .
	"<tr>";



	/* "<tr>".
		"<td>" . $actualite['title'] . "</td>" .
		"<td>" . $actualite['description'] . "</td>" .
	"</tr>";;
*/
}



$contenuTableau = array(
	'title' => 'Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon',
    'description' => 'Nommé officiellement sélectionneur du Japon le 12 mars, Vahid... '
   );

var_dump($contenuTableau);

foreach ($contenuTableau as $key => $value) {
	var_dump($key);
	var_dump($value);
}

function creerTableauPour($actualite){
	return "<table border='1'>".
	creerHtmlPour($actualite).
	"</table>";;
	
}

echo creerTableauPour($actus2);;

?>