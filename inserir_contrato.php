<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'tipo' => 'I',
    'id_cliente' => '2',
    'id_vd_contrato' => '3',
    'descricao_aux_plano_venda' => 'Teste API',
    'contrato' => 'Teste',
    'id_tipo_contrato' => '1',
    'id_modelo' => '1',
    'assinatura_digital' => 'P',
    'integracao_assinatura_digital' => 'P',
    'liberacao_bloqueio_manual' => 'P',
    'id_filial' => '1',
    'indicacao_contrato_id' => '',
    'data_ativacao' => '21/09/2023',
    'data' => '21/09/2023',
    'dica_data_base' => '',
    'data_renovacao' => '',
    'dica_data_expiracao_contrato' => '',
    'pago_ate_data' => '',
    'status' => 'P',
    'status_internet' => 'D',
    'status_velocidade' => 'N',
    'tipo_produtos_plano' => 'P',
    'motivo_inclusao' => 'I',
    'id_indexador_reajuste' => '',
    'url_assinatura_digital' => '',
    'token_assinatura_digital' => '',
    'id_tipo_documento' => '1',
    'id_carteira_cobranca' => '1',
    'id_vendedor' => '1',
    'moeda' => '',
    'comissao' => '',
    'cc_previsao' => 'P',
    'tipo_cobranca' => 'P',
    'renovacao_automatica' => 'S',
    'gerar_finan_assin_digital_contrato' => 'P',
    'base_geracao_tipo_doc' => 'P',
    'id_contrato_principal' => '',
    'num_parcelas_atraso' => '',
    'nf_info_adicionais' => '',
    'credit_card_recorrente_bandeira_cartao' => '',
    'credit_card_recorrente_token' => '',
    'tipo_doc_opc' => '',
    'tipo_doc_opc2' => '',
    'tipo_doc_opc3' => '',
    'tipo_doc_opc4' => '',
    'id_tipo_doc_ativ' => '',
    'id_produto_ativ' => '',
    'taxa_instalacao' => '0.00',
    'id_cond_pag_ativ' => '',
    'id_responsavel' => '',
    'id_vendedor_ativ' => '',
    'ativacao_numero_parcelas' => '',
    'ativacao_vencimentos' => '',
    'btn_nf_ativacao' => '',
    'ativacao_valor_parcela' => '',
    'fidelidade' => '',
    'data_expiracao' => '',
    'dica_data_expiracao' => '',
    'desconto_fidelidade' => '0.00',
    'id_instalador' => '',
    'taxa_improdutiva' => '',
    'venc_personalizado' => '',
    'com_entrada' => '',
    'dia_fixo_vencimento' => '',
    'tipo_condicao_pag' => '',
    'bloqueio_automatico' => 'S',
    'nao_bloquear_ate' => '',
    'aviso_atraso' => 'S',
    'nao_avisar_ate' => '',
    'desbloqueio_confianca' => 'P',
    'desbloqueio_confianca_ativo' => 'N',
    'restricao_auto_desbloqueio' => 'N',
    'motivo_restricao_auto_desbloq' => '',
    'obs' => '',
    'nao_susp_parc_ate' => '',
    'liberacao_suspensao_parcial' => 'P',
    'utilizando_auto_libera_susp_parc' => 'N',
    'restricao_auto_libera_susp_parcial' => 'N',
    'motivo_restri_auto_libera_parc' => '',
    'contrato_suspenso' => 'N',
    'data_inicial_suspensao' => '',
    'data_final_suspensao' => '',
    'data_acesso_desativado' => '',
    'data_cancelamento' => '',
    'motivo_cancelamento' => '',
    'obs_cancelamento' => '',
    'data_negativacao' => '',
    'protocolo_negativacao' => '',
    'id_motivo_negativacao' => '',
    'obs_negativacao' => '',
    'data_desistencia' => '',
    'motivo_desistencia' => '',
    'obs_desistencia' => '',
    'obs_contrato' => '',
    'alerta_contrato' => '',
    'imp_realizado' => 'S',
    'imp_inicial' => '',
    'imp_carteira' => 'N',
    'imp_importacao' => 'N',
    'imp_treinamento' => 'N',
    'imp_rede' => 'N',
    'imp_bkp' => 'N',
    'imp_obs' => '',
    'imp_final' => '',
    'imp_status' => 'A',
    'imp_motivo' => '',
    'dt_ult_bloq_auto' => '',
    'dt_ult_bloq_manual' => '',
    'dt_ult_finan_atraso' => '',
    'dt_ult_des_bloq_conf' => '',
    'dt_ult_liberacao_susp_parc' => '',
    'dt_ult_ativacao' => '',
    'dt_utl_negativacao' => '',
    'dt_ult_desiste' => '',
    'data_cadastro_sistema' => '',
    'ultima_atualizacao' => 'CURRENT_TIMESTAMP',
    'data_retomada_contrato' => 'NULL',
    'endereco_padrao_cliente' => 'S',
    'id_condominio' => '',
    'condominio_novo' => '',
    'bloco' => '',
    'bloco_novo' => '',
    'apartamento' => '',
    'apartamento_novo' => '',
    'cep' => '',
    'cep_novo' => '',
    'endereco' => '',
    'endereco_novo' => '',
    'numero' => '',
    'numero_novo' => '',
    'bairro' => '',
    'bairro_novo' => '',
    'cidade' => '',
    'cidade_novo' => '',
    'complemento' => '',
    'complemento_novo' => '',
    'referencia' => '',
    'referencia_novo' => '',
    'latitude' => '',
    'latitude_novo' => '',
    'longitude' => '',
    'longitude_novo' => '',
    'avalista_1' => '',
    'avalista_2' => '',
    'testemunha_assinatura_digital' => '',
    'document_photo' => 'P',
    'selfie_photo' => 'P'
);
$api->post('cliente_contrato', $dados);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>