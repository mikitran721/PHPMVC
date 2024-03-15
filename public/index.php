<?php
 require_once('../app/config/config.php');

//  test
require_once APP_ROOT.'/app/services/PatientService.php';
$patientService = new PatientService();
$patients = $patientService->getAllPatients();

echo "<pre>";
print_r($patients);
echo "</pre>"
?>