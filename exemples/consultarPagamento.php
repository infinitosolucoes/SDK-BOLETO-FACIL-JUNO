<?php

/***********************************
* FUNÇÃO DE CONSULTAS DE COBRANÇAS
*
***********************************/

include('../Juno.php');


$juno = new Juno();

//CONFIGURAÇÕES DA API
$juno->options([
	'token' => 'DC668468D1C0F0BE71B32C8BA1298F21E9E57B98B16297948881284FD4A9F210',
	'sandbox' => true
]);

//REALIZANDO CADASTRO DE UMA NOVA COBRANCA
$response = $juno->fetchPaymentDetails([
	'paymentToken'			=> '40050500',
]);

print_r($response);