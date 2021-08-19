<?php
set_time_limit(0);
date_default_timezone_set("Asia/Makassar");
include_once './conn.php';
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// mysqli_set_charset('utf8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (json_decode(file_get_contents('php://input'), true)) {
        $_POST = json_decode(file_get_contents('php://input'), true);
    };
    $date = date("Ymd-h_i_s");
    $case = $_POST['case'];
    switch ($case) {

            #----------------------------------------------------------------------------------------------------------------------------------------
        case "masjid":
            $type_query = "show";

            $query =  "SELECT * FROM masjid 
                JOIN kategori ON masjid.id_kategory=kategori.id_kategory 
                JOIN bank ON masjid.id_bank=bank.id_bank 
                JOIN infaq ON masjid.id_infaq=infaq.id_infaq";

            include './res.php';
            die();
            break;

            #----------------------------------------------------------------------------------------------------------------------------------------
        case $case:
            $type_query = "show";
            $masjid_id = $_POST['masjid_id'];

            $query = "SELECT * FROM $case WHERE masjid_id='$masjid_id'";

            include './res.php';
            die();
            break;
    }
}
