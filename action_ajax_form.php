<?php

if (isset($_POST["name"]) && isset($_POST["tel"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'phonenumber' => $_POST["tel"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>