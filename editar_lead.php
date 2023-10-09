<?php



require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://192.168.27.108/webservice/v1';
$token = '11:6a41b053ec3883877c2cc7651e1412e3790be99425492bd144fb944d3d94bb94';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$dados = array(
    'principal' => 'N',
    'id_cliente' => '',
    'nome' => 'Teste API',
    'tipo_pessoa' => 'E',
    'cnpj_cpf' => '',
    'data_nascimento' => '',
    'razao' => '',
    'id_filial' => '',
    'id_contato_tipo' => '',
    'id_candidato_tipo' => '',
    'id_campanha' => '',
    'id_concorrente' => '',
    'id_responsavel' => '',
    'indicado_por' => '',
    'data_cadastro' => '09/10/2023 16:00:00',
    'data' => '',
    'id_vd_contrato' => '',
    'id_tipo_elemento' => '',
    'velocidade_calculada' => '',
    'id_fornecedor' => '',
    'lead' => 'S',
    'ativo' => 'S',
    'id_caixa_ftth' => '',
    'distancia_caixa_mais_proxima' => '',
    'id_prospeccao' => '',
    'ultima_atualizacao' => 'CURRENT_TIMESTAMP',
    'id_estagio' => '',
    'ordem_kanban' => '',
    'fone_residencial' => '',
    'fone_comercial' => '',
    'fone_celular' => '',
    'fone_whatsapp' => '',
    'email' => 'teste@teste.com.br',
    'skype' => '',
    'facebook' => '',
    'website' => '',
    'cep' => '',
    'endereco' => '',
    'numero' => '',
    'bairro' => '',
    'complemento' => '',
    'cidade' => '',
    'uf' => '',
    'referencia' => '',
    'moradia' => 'P',
    'tipo_localidade' => 'U',
    'latitude' => '',
    'longitude' => '',
    'external_id' => '',
    'external_system' => '',
    'pipe_id_pessoa' => '',
    'cadastro_site' => 'N',
    'status_viabilidade' => '',
    'tipo_rede' => 'P',
    'operador_neutro' => '',
    'data_ult_verificacao_viab' => '',
    'caixa_mais_proxima' => '',
    'data_cadastro_lead' => '',
    'velocidade_calculada_lead' => '',
    'quantidade_pessoas_lead' => '',
    'quantidade_smart_lead' => '',
    'frequencia_smart_lead' => '',
    'quantidade_celular_lead' => '',
    'frequencia_celular_lead' => '',
    'quantidade_computador_lead' => '',
    'frequencia_computador_lead' => '',
    'quantidade_console_lead' => '',
    'frequencia_console_lead' => '',
    'obs' => '',
    'alerta' => '',
    'identificador' => '',
    'origem_medium' => '',
    'origem_campaing' => '',
    'origem_source' => '',
    'identificador_ultima_conversao' => '',
    'conversao_duplicada_marketing' => ''
);
$registro = '49';
$api->put('contato', $dados, $registro);
$retorno = $api->getRespostaConteudo(false);
echo '<pre>';
print_r($retorno);

?>