<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'crm_negociacoes.id',
    'query' => '',
    'oper' => '=',
    'page' => '1',
    'rp' => '20',
    'sortname' => 'crm_negociacoes.id',
    'sortorder' => 'desc'
);
$api->get('crm_negociacoes', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>                 