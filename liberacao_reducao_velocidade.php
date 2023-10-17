<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://192.168.27.108/webservice/v1';
$token = '11:6a41b053ec3883877c2cc7651e1412e3790be99425492bd144fb944d3d94bb94';
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'get_id' => '4', // Id do contrato a ser liberado
);

$api->get('liberacao_reducao_contrato_29157',$params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);

?>