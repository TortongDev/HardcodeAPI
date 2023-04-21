<?php
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
$json = array(
    "customer" => array(
        array(),
        array(),
        array(
            "customerName"      => "Kittithat",
            "customerAge"       => "26",
            "customerHeight"    => "171",
            "customerWidth"     => "62",
            "customerID"        => 0001
        ),
        array(
            "customerName"      => "Kittithat1",
            "customerAge"       => "26",
            "customerHeight"    => "171",
            "customerWidth"     => "62",
            "customerID"        => 0002
        ),       
        array(
            "customerName"      => "Kittithat2",
            "customerAge"       => "26",
            "customerHeight"    => "171",
            "customerWidth"     => "62",
            "customerID"        => 0003
        ) 
    )
);

echo json_encode($json);
exit;
?>
