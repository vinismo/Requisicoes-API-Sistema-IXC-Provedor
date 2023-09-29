<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true;
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'id_contrato' => '37'
);
$api->get('cliente_contrato_15464', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>