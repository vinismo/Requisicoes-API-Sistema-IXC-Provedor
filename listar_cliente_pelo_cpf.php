<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'cliente.cnpj_cpf',
    'query' => '111.111.111-11',
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