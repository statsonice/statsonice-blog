<?php
$production_deployment = `/bin/bash /home/statsonice_production/scripts/deploy.sh production 2>&1`;
$staging_deployment = `/bin/bash /home/statsonice_staging/scripts/deploy.sh master 2>&1`;

$message = '';
if(strpos($production_deployment, "No new code to deploy") === False){
    $message .=  '<h1>';
    $message .=  "Production Deployment";
    $message .= '</h1>';
    $message .= '<pre>';
    $message .=  $production_deployment;
    $message .= '</pre>';
}

if(strpos($staging_deployment, "No new code to deploy") === False){
    $message .= '<h1>';
    $message .= "Staging Deployment";
    $message .= '</h1>';
    $message .= '<pre>';
    $message .=  $staging_deployment;
    $message .= '</pre>';
    echo $message;
    echo '<br />';
}

if($message != ''){
    $to = 'admin@statsonice.com';
    $subject = 'Deployment Log';
    $headers = "From: " . strip_tags('statsonice-deploy@statsonice.com') . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($to, $subject, $message, $headers);
    echo '<b>Mail Sent</b>';
}else{
    echo 'No deployments done';
}
?>
