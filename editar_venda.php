<?php

//editar-----------------------------
require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';//token gerado no cadastro do usuario (verificar permissões)
$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'id_tipo_documento' => '501',
    'id_cliente' => '2',
    'id_condicao_pagamento' => '3',
    'filial_id' => '1',
    'data_emissao' => '06/10/2023',
    'data_saida' => '06/10/2023',
    'valor_total' => '',
    'indFinal' => '1',
    'indPres' => '1',
    'documento' => '',
    'obs' => '',
    'status' => 'A',
    'impresso' => 'N',
    'gera_estoque' => 'N',
    'numero_nf' => '',
    'modelo_nf' => '',
    'serie' => '',
    'previsao' => 'N',
    'id_contrato' => '',
    'id_contrato_avulso' => '',
    'alerta_cliente' => '',
    'status_fat_os' => '',
    'id_produto_ativacao' => '',
    'data_cancelamento' => '',
    'valor_produto_ativacao' => '',
    'difal_vFCPUFDest' => '',
    'difal_vICMSUFDest' => '',
    'difal_vICMSUFRemet' => '',
    'id_im_imovel' => '',
    'nfse_lote' => '',
    'nfse_prot' => '',
    'nfse_status' => 'NE',
    'id_almox_padrao_tipo_doc' => '',
    'id_lote_geracao_financeiro' => '',
    'numeracao_lote_ixc' => '',
    'id_geracao_lote' => '',
    'ultima_atualizacao' => '',
    'id_geracao_lote_assinaturas' => '',
    'id_lote_geracao_fatura' => '',
    'consumidor_final_razao' => '',
    'consumidor_final_cpf' => '',
    'modalidade_frete' => '9',
    'id_transportadora' => '',
    'placa' => '',
    'placa_uf' => '',
    'placa_rntc' => '',
    'valor_frete' => '',
    'id_comissionado' => '4',
    'pcomissao' => '',
    'comissao_perc_recebimento' => '',
    'avalista_1' => '',
    'avalista_2' => ''
);
$registro = '352';//registro a ser editado
$api->put('vd_saida', $dados, $registro);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>