<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'filial_id' => '1',
    'valor' => '5000.0',
    'id_cliente' => '1',
    'previsao' => 'N',
    'id_conta' => '1',
    'documento' => '',
    'data_emissao' => '27/09/2023',
    'data_vencimento' => '10/10/2023',
    'id_carteira_cobranca' => '1',
    'obs' => '',
    'tipo_recebimento' => 'Boleto',
    'status' => 'A',
    'aguardando_confirmacao_pagamento' => 'N',
    'nn_boleto' => '',
    'pix_txid' => '',
    'libera_periodo' => 'N',
    'liberado' => 'S',
    'titulo_protestado' => 'N',
    'id_remessa_alteracao' => '0',
    'motivo_alteracao' => '',
);
$registro = '204';
$api->put('fn_areceber', $dados, $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>