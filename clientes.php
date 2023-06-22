<?php
include 'dataRequest.php'; // Inclua o arquivo dataRequest.php para ter acesso à classe DataRequest

$dataRequest = new DataRequest(); // Crie uma instância da classe DataRequest

$dadosClientes = $dataRequest->dadosClientes(); // Obtenha os dados dos clientes

header('Content-Type: application/json'); // Defina o cabeçalho para indicar que a resposta é JSON
echo json_encode($dadosClientes); // Imprima os dados dos clientes no formato JSON
