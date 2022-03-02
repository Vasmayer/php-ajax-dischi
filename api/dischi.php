<?php

 include '../data/data.php'; 

$search= $_GET['genre'] ?? '';
$filtered = $database;

if(!empty($search))
{
    $filtered = [];
    foreach($database as $song)
    {

    
        if($search === $song['genre'])
        {
            $filtered[] = $song; 
        } 
    } 
    
}
header('Content-Type: application/json');


echo json_encode($filtered); 

?>