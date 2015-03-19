
<?php
$string = '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:media="http://search.yahoo.com/mrss/">
		<title>Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon</title>
		<link>http://www.lequipe.fr/Football/Actualites/Vahid-halilhodzic-appelle-31-joueurs-pour-ses-premiers-matches-avec-le-japon/544304#xtor=RSS-1
		</link>
		<description>Nommé officiellement sélectionneur du Japon le 12 mars, Vahid... </description>
		<pubDate>Thu, 19  Mar 2015 10:40:00 +0100</pubDate>
		<enclosure url="http://medias.lequipe.fr/img-photo-jpg/halilhodzic-vahid/1500000000521021/0:126,2048:1159-665-335-70/47b05.jpg" length="50000" type="image/jpeg"/>
</rss>';

$xml = simplexml_load_string($string);

$wantedProperties = array('title', 'description', 'pubDate');

function creerTableauPour($actualite){
	return "<table border='1'>".
	creerHtmlPour($actualite).
	"</table>";;
	
}


function creerHtmlPour($actualite, $wantedProperties){
	$html = '';
	foreach ($actualite as $key => $value) {
		$html .= "<td>" . $value . "</td>";;

	}
	return "<tr>".
	$html .
	"<tr>";

}

echo creerTableauPour($xml);;


?>