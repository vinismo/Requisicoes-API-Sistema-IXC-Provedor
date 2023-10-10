<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'cliente.id',
    'query' => '1',
    'oper' => '=',
    'page' => '1',
    'rp' => '20',
    'sortname' => 'cliente.id',
    'sortorder' => 'desc'
);
$api->get('crm_canditados', $params);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>