<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php'; // google-api-php-client path
    //echo json_encode($_SERVER['DOCUMENT_ROOT']);
    
    $client = new Google_Client();
    $client->setApplicationName('diplom');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('params.json');
    $client->setAccessType('offline');

    $array = $_POST["data"];
    $service = new Google_Service_Sheets($client);

    $value = new Google_Service_Sheets_ValueRange();
    $value->setValues(["values" => $array]);
    $conf = ["valueInputOption" => "USER_ENTERED"];
    $service->spreadsheets_values->append("1pb4tyfXlLxjIJcRLcJ5cyOmlgX9ZPjKID_3KA-p7jDQ", "Patients!A2:A", $value, $conf);
    exit();

?>