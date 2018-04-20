<?php
include '../../apis/cartodbProxy.php';
//			^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "INSERT INTO park_amenities" . $_POST['ext'] . " (the_geom,park,description,nbrhd_name,park_rating,nbrhd_yrs,flag,loved) VALUES (ST_SetSRID(ST_GeomFromGeoJSON('";
if ( $_POST['ext'] != "_point" ){
  $q .= '{"type":"MultiPolygon","coordinates":[[[' . $_POST['coords'] . "]]]}'";
} else {
  $q .= '{"type":"Point","coordinates":' . $_POST['coords'] . "}'";
}
$q .= "),4326),'". $_POST['park'] ."','" . $_POST['description'] . "','" . $_POST['neighName'] . "','" . $_POST['parkRate'] . "','" . $_POST['hoodYears'] . "','false','0')";
$return = goProxy($q);
echo $return;
?>