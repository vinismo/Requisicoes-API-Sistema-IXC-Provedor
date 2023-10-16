<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://host/webservice/v1';
$token = 'token';$selfSigned = true; //true para certificado auto assinado
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);
$params = array(
    'qtype' => 'df_projeto.id',//campo de filtro
    'query' => '',//valor para consultar
    'oper' => '=',//operador da consulta
    'page' => '1',//página a ser mostrada
    'rp' => '20',//quantidade de registros por página
    'sortname' => 'df_projeto.id',//campo para ordenar a consulta
    'sortorder' => 'desc'//ordenação (asc= crescente | desc=decrescente)
);
$api->get('df_projeto', $params);
$retorno = $api->getRespostaConteudo(false);// false para json | true para array
echo '<pre>';
print_r($retorno);

?>
                    