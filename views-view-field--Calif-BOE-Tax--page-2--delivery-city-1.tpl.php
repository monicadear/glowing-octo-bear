<?php
 /**
  * This template is a modified version of views-view-field.tpl.php
  * that supports surrounding the output of this field with a text box for affiliate banners
  */
?>




<?php 

$output=ucwords($output);

$search=array(
'Los Angeles',
'Burbank',
'Hillsborough',
'Fremont',
'Larkspur',
'Beverly Hills',
'San Francisco',
'Anaheim Hills',
'Lafayette',
'Huntington Beach',
'Ross',
'Solana Beach',
'Fullerton',
'Napa',
'Brisbane',
'Big Sur');

$replace=array(
'Los Angeles',
'Los Angeles',
'San Mateo',
'Alameda',
'Marin',
'Los Angeles',
'San Francisco',
'Orange',
'Contra Costa',
'Orange',
'Marin',
'San Diego',
'Orange',
'Napa',
'San Mateo',
'Monterey',
);


echo str_replace($search, $replace, $output); 

?>

