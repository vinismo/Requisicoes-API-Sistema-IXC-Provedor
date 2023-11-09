<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://token/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'cliente_contrato_servicos.id',
    'query' => '2136',
    'oper' => '=',
    'page' => '1',
    'rp' => '1000',
    'sortname' => 'cliente_contrato_servicos.id',
    'sortorder' => 'desc'
);
$api->get('cliente_contrato_desc_serv', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>