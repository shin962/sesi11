<?php

    $dta[0]["nama"] = "Kadek William Darmawan";
    $dta[0]["alamat"] = "Badung, Bali";
    $dta[0]["tanggal_lahir"] = "2004-02-07";
    $dta[0]["jenis_kelamin"] = "Laki Laki";

    $dta[1]["nama"] = "Kadek Sriasa";
    $dta[1]["alamat"] = "Denpasar, Bali";
    $dta[1]["tanggal_lahir"] = "2004-12-21";
    $dta[1]["jenis_kelamin"] = "Perempuan";


    $dta[2]["nama"] = "Ngurah Nguyen";
    $dta[2]["alamat"] = "Denpasar, Bali";
    $dta[2]["jenis_kelamin"] = "Laki Laki";
    $dta[2]["tanggal_lahir"] = "2001-04-15";
    
          
       
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);


?>