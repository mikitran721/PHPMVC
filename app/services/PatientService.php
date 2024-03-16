<?php
require_once APP_ROOT . '/app/models/Patient.php';

class PatientService
{
    public function getAllPatients()
    {
        $patients = [];
        // 1. Ket noi DB
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null) {
            // truy van data
            $sql = "select * from patients order by id desc limit 50";
            $stmt = $conn->query($sql);
            //xu ly data
            while ($row = $stmt->fetch()) {
                //tu array -> object patient
                $patient = new Patient($row['id'], $row['fullname'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['mobile']);
                $patients[] = $patient;
            }
        }

        return $patients;
    }
}
