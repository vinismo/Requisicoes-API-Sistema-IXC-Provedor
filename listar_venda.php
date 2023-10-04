<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'vd_saida.id',
    'query' => '',
    'oper' => '=',
    'page' => '1',
    'rp' => '100',
    'sortname' => 'vd_saida.id',
    'sortorder' => 'desc'
);
$api->get('vd_saida', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>