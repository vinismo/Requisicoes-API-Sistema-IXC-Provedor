<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://192.168.27.108/webservice/v1';
$token = '11:6a41b053ec3883877c2cc7651e1412e3790be99425492bd144fb944d3d94bb94';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$registro = '338';
$api->delete('vd_saida', $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>