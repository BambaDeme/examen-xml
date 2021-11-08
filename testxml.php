<?php
$examen = simplexml_load_file('Examen.xml');

echo $examen->module;
libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->Load('Examen.xml');
if ($dom->validate()) {
    echo "This document is valid!\n";
}else{
    echo 'invalid document';
}
// echo '<pre>';
// print_r($examen);
// echo '<pre>';

?>