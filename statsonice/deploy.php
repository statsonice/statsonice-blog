<?php

### Authentication ###
function getIP(){
    //Check IP Address
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){   //check ip from share internet
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){   //to check ip is pass from proxy
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$requesterIP = getIP();
if(strpos($requesterIP, '204.232.175') === false && strpos($requesterIP, '192.30.25') === false){
    echo 'IP Address not accepted<br />';
    echo $requesterIP;
    die();
}


### Deployment ###
$production_deployment = `/bin/bash /home/statsonice_production/scripts/deploy.sh production 2>&1`;
$staging_deployment = `/bin/bash /home/statsonice_staging/scripts/deploy.sh master 2>&1`;

$subject = '';
$message = '';
if(strpos($production_deployment, "No new code to deploy") === False){
    $subject = "Production Deployment Log";
    $message .=  "Production Deployment\n\n";
    $message .=  $production_deployment;
}

if(strpos($staging_deployment, "No new code to deploy") === False){
    $subject = "Staging Deployment Log";
    $message .= "Staging Deployment\n\n";
    $message .=  $staging_deployment;
}
echo $message;
echo '<br />';

if($message != ''){
    $to = 'admin@statsonice.com';
    $headers = "From: " . strip_tags('statsonice-deploy@statsonice.com') . "\r\n";
    
    mail($to, $subject, $message, $headers);
    echo '<b>Mail Sent</b>';
}else{
    echo 'No deployments done';
}
?>
