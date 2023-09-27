<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true;
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
	'qtype' => 'fn_areceber.id_cliente',
	'query' => '2', 
	'oper' => '=', 
	'rp' => '200000', 
	'sortname' => 'fn_areceber.data_vencimento',
	'sortorder' => 'asc',
);

$api->get('fn_areceber', $params);
$retorno = $api->getRespostaConteudo(true); 
echo '<pre>';
print_r($retorno);

?>