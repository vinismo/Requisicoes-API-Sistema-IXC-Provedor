<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$registro = '475';//registro a ser deletado
$api->delete('rad_caixa_ftth', $registro);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
                   