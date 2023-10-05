<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';//token gerado no cadastro do usuario (verificar permissões)
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'id_tipo_documento' => 501,
    'id_cliente' => 2,
    'id_condicao_pagamento' => 1,
    'filial_id' => 1,
    'data_emissao' => '05/10/2023',
    'data_saida' => '05/10/2023',
    'valor_total' => null,
    'indFinal' => 1,
    'indPres' => 1,
    'documento' => null,
    'obs' => null,
    'status' => 'A',
    'impresso' => 'N',
    'gera_estoque' => 'S',
    'numero_nf' => null,
    'modelo_nf' => null,
    'serie' => null,
    'previsao' => 'N',
    'id_contrato' => null,
    'id_contrato_avulso' => null,
    'alerta_cliente' => null,
    'status_fat_os' => 0,
    'id_produto_ativacao' => 0,
    'data_cancelamento' => null,
    'valor_produto_ativacao' => null,
    'difal_vFCPUFDest' => null,
    'difal_vICMSUFDest' => null,
    'difal_vICMSUFRemet' => null,
    'id_im_imovel' => null,
    'nfse_lote' => null,
    'nfse_prot' => null,
    'nfse_status' => 'NE',
    'id_almox_padrao_tipo_doc' => null,
    'id_lote_geracao_financeiro' => null,
    'numeracao_lote_ixc' => null,
    'id_geracao_lote' => null,
    'id_geracao_lote_assinaturas' => null,
    'consumidor_final_razao' => null,
    'consumidor_final_cpf' => null,
    'modalidade_frete' => 9,
    'id_transportadora' => null,
    'placa' => null,
    'placa_uf' => null,
    'placa_rntc' => null,
    'valor_frete' => null,
    'id_comissionado' => 4,
    'pcomissao' => 0.00,
    'comissao_perc_recebimento' => 0.00,
    'avalista_1' => null,
    'avalista_2' => null
);
$api->post('vd_saida', $dados);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
