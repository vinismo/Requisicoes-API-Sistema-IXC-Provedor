<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true;
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$registro = '1';
$api->delete('produtos', $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>