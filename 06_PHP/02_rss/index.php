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



function creerHtmlPour($actus){
	return "<ul>".
		"<li>" . $actus['title'] . "</li>" .
		"<li>" . $actus['description'] . "</li>" .
	"</ul>";;

}
echo creerHtmlPour($actus2);;


$contenuTableau = array(
	'title' => 'Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon',
    'description' => 'Nommé officiellement sélectionneur du Japon le 12 mars, Vahid... ');

foreach ($contenuTableau as $key => $value) {
	1.
}


?>