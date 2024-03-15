<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients(){
        $patients = [];
        try{
            //ket noi DB
            $conn = new PDO('mysql:host=localhost;dbname=phpmvc','root','');
            // truy van data
            $sql = "select * from patients";
            $stmt = $conn->query($sql);
            //xu ly data
            while($row = $stmt->fetch()){
                //tu array -> object patient
                $patient = new Patient($row['id'],$row['fullname'],$row['gender'],$row['dateOfBirth'],$row['address'],$row['mobile']);
                $patients[]=$patient;
            }
            return $patients;
        }catch(PDOException $e){
            // $conn = null;
            // echo $e->getMessage();
            return $patients;
        }
    }
}