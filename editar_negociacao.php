<?php


require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'id_cliente'=> '9',
    'id_plano_negocio'=> '',
    'descricao'=> 'Teste API 4',
    'id_contato'=> '',
    'id_canal_origem'=> '',
    'id_concorrente'=> '1',
    'id_campanha'=> '',
    'id_funil'=> '1',
    'id_estagio'=> '4',
    'id_responsavel'=> '7',
    'id_filial'=> '1',
    'valor_mensal'=> '',
    'valor_fixo'=> '',
    'previsao_fechamento'=> '11/10/2023',
    'substatus'=> '',
    'status'=> 'N',
    'status_reserva_rede_neutra'=> '',
    'id_oss_chamado'=> '0',
    'auto_viabilidade'=> 'N',
    'data_perdemos'=> '',
    'data_vencemos'=> '',
    'obs'=> '',
    'id_plano'=> '',
    'id_tipo_cobranca'=> '',
    'id_modelo_contrato'=> '',
    'id_contrato'=> '',
    'id_login'=> '0',
    'inserir_tarefa'=> 'S',
    'inserir_atendimento'=> 'S',
    'inserir_acesso'=> 'S',
    'inserir_contrato'=> 'S',
    'fidelidade'=> '',
    'autenticacao'=> 'L',
    'tipo_conexao_mapa'=> 'F',
    'id_integracao'=> '',
    'id_grupo'=> '',
    'login'=> '',
    'senha'=> '',
    'id_caixa_ftth'=> '',
    'porta_ftth'=> '0',
    'operador_neutro'=> '',
    'prioridade'=> 'M',
    'id_assunto'=> '',
    'id_wfl_processo'=> '',
    'data_reservada'=> '',
    'melhor_horario_reserva'=> 'Q',
    'menssagem'=> '',
    'id_tipo_agendamento'=> '',
    'hora_inicio'=> '00/00/0000 00=>00=>00'
);
$registro = '84';
$api->put('crm_negociacoes', $dados, $registro);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>