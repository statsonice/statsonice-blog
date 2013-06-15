<?php
$production_deployment = `/bin/bash /home/statsonice_production/scripts/deploy_production.sh`;
$staging_deployment = `/bin/bash /home/statsonice_staging/scripts/deploy_staging.sh`;

$message +=  '<h1>';
$message +=  "Production Deployment";
$message += '</h1>';
$message += '<pre>';
$message +=  $production_deployment;
$message += '</pre>';

$message += '<h1>';
$message += "Staging Deployment";
$message += '</h1>';
$message += '<pre>';
$message +=  $staging_deployment;
$message += '</pre>';

$to = 'albertyw@statsonice.com, curranoi@statsonice.com, lekha@statsonice.com';
$subject = 'Deployment Log';
$headers = "From: " . strip_tags('statsonice-deploy@statsonice.com') . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

?>
