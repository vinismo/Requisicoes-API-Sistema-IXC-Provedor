<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'nome' => 'Teste API',
    'id_filial' => '1',
    'latitude' => '-26.759565',
    'longitude' => ' -52.467137',
    'zoom' => '16',
    'status' => 'A',
    'cor_mapa' => ''
);
$api->post('df_projeto', $dados);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
