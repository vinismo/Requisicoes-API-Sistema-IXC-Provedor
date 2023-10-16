<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';$selfSigned = true;
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$registro = '20';
$api->delete('df_projeto', $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>