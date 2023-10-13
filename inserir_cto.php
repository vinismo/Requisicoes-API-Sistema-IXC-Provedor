<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'descricao' => 'Teste API 2',
    'tipo' => 'P',
    'id_projeto' => '1',
    'id_transmissor' => '1',
    'id_interface' => '',
    'id_tecnologia' => '',
    'capacidade' => '',
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
$api->post('rad_caixa_ftth', $dados);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
