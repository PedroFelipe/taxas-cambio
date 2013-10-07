## Taxas de câmbio ##
Obtém a última taxa de câmbio de 157 moedas a partir do Banco Central do Brasil.

## Como funciona? ##
A partir do CSV disponibilizado pelo Banco Central do Brasil em dias úteis,
o sistema converte para uma array a data da cotação, código, tipo, código da moeda (3 letras, ISO 4217), taxa da compra, taxa da venda, paridade de compra e paridade de venda.

O código procura pelo último dia útil antes de obter a cotação, uma vez que as taxas de câmbio não são calculadas em finais de semana.

## Obtendo valores ##
`$moeda['USD']['valorCompra']` para obter o valor de compra do dólar americano.
Altere o `USD` pelo código ISO (EUR, AUD, CAD) para alternar a moeda e `valorCompra` por `valorVenda`, `paridadeCompra`, `paridadeVenda` para obter os campos explicados no parágrafo anterior.