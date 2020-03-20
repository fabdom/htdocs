<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
	echo <<<EOD
{
  "esito": {
    "codice": "1",
    "descrizione": "Errore caricamento dati"
  }
}
EOD;
} else {
	echo <<<EOD
{
    "esito": {
        "codice": "0",
        "descrizione": ""
    },
    "saldoNum": "-1850.060",
    "saldoDisponibile": "-1.850,06",
    "esito": "OK"
}
EOD;
}