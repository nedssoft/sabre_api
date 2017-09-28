<?php
require_once 'workflow/Workflow.php';
require_once 'soap_activities/BargainFinderMaxSoapActivity.php';


$workflow = new Workflow(new BargainFinderMaxSoapActivity());
$result = $workflow->runWorkflow();
ob_start();
var_dump($result);
$dump = ob_get_clean();
echo $dump;
flush();
