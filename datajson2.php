<?php
$dta["nama"] = "Kadek William Darmawan";
$dta["alamat"] = "Badung, Bali";
$dta["tanggal_lahir"] = "2004-02-07";
$dta["jenis_kelamin"] = "Laki Laki";

    header("Content-Type: application/json; charset=utf-8");    
    echo json_encode($dta);

?>