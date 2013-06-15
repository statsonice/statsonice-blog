<?php
echo '<pre>';
echo 'Starting Deployment';
echo `/bin/bash /home/statsonice_production/scripts/deploy_production.sh`;
echo `/bin/bash /home/statsonice_staging/scripts/deploy_staging.sh`;
echo '</pre>';
?>
