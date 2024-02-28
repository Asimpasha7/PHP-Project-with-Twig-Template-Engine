<?php

require_once __DIR__ . '/vendor/autoload.php'; 

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '');
$twig = new \Twig\Environment($loader);

// $twig = new \Twig\Environment($loader, [
//     'cache' => __DIR__ . '/cache',
//     'auto_reload' => true,
//     'debug' => true,
// ]);

//Decoding Json files
$widgetData1 = json_decode(file_get_contents(__DIR__ . '/jsons/summary.json'), true);
$widgetData2 = json_decode(file_get_contents(__DIR__ . '/jsons/Project_Progress_Summary.json'), true);
$widgetData3 = json_decode(file_get_contents(__DIR__ . '/jsons/Whats_New.json'), true);
$widgetData4 = json_decode(file_get_contents(__DIR__ . '/jsons/Latest_Activity.json'), true);
$widgetData5 = json_decode(file_get_contents(__DIR__ . '/jsons/New_Products.json'), true);

echo $twig->render('template.php', [
    'widgetData1' => $widgetData1,
    'widgetData2' => $widgetData2,
    'widgetData3' => $widgetData3,
    'widgetData4' => $widgetData4,
    'widgetData5' => $widgetData5,
]);

?>
