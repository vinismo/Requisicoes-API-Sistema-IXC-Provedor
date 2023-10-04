<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://192.168.27.108/webservice/v1';
$token = '11:6a41b053ec3883877c2cc7651e1412e3790be99425492bd144fb944d3d94bb94';
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