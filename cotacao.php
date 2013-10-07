<?php
date_default_timezone_set('America/Recife');
$casasDecimais = 3;

if(date('0') || date('6')) {
	$today = date('Ymd', strtotime('last Friday'));
} else {
	$today = date('Ymd');
}

$csv = file("http://www4.bcb.gov.br/Download/fechamento/$today.csv");

foreach($csv as $line) {
	if (count(explode(';', $line)) > 1)
		list($date, $code, $type, $currency, $taxBuy, $taxSale, $parityBuy, $paritySale) = explode(';', $line);

	$taxBuy = number_format(str_replace(',', '.', $taxBuy), $casasDecimais, ',', '');

	$moeda[$currency] = array(
		'valorCompra'		=> $taxBuy,
		'valorVenda'		=> $taxSale,
		'paridadeCompra'	=> $parityBuy,
		'paridadeVenda'		=> $paritySale
	);
}

echo "Dólar: R$ ". $moeda['USD']['valorCompra'] . "\n";
echo "Euro: R$ " . $moeda['EUR']['valorCompra'];
?>