<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$registro = '44';
$api->delete('cliente_contrato', $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>