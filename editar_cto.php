<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'descricao' => 'Teste API 4',
    'tipo' => 'P',
    'id_projeto' => '1',
    'id_transmissor' => '1',
    'id_interface' => '',
    'id_tecnologia' => '',
    'capacidade' => '16',
    'latitude' => '',
    'longitude' => '',
    'codigo_estilo_caixa' => '50r7nh0u',
    'obs_caixa_ftth' => '',
    'status' => 'A',
    'idx' => '',
    'ultima_atualizacao' => '',
    'cep' => '',
    'endereco' => '',
    'numero' => '',
    'bairro' => '',
    'id_cidade' => ''
);
$registro = '475';//registro a ser editado
$api->put('rad_caixa_ftth', $dados, $registro);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
