<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://192.168.27.108/webservice/v1';
$token = '11:6a41b053ec3883877c2cc7651e1412e3790be99425492bd144fb944d3d94bb94';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'cliente.id',
    'query' => '114',
    'oper' => '=',
    'page' => '1',
    'rp' => '20',
    'sortname' => 'cliente.id',
    'sortorder' => 'desc'
);
$api->get('cliente', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>