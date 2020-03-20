<?php
header('content-type: application/json; charset=utf-8');

$nconto = $_GET["numeroConto"];
?>{
    "config": {
        "conti": [
            {
                "capitaleRisparmiato": 107,
                "conto": "00000 - 0000005059 - EUR",
                "importo_massimo": 999999999999999,
                "importo_minimo": 250,
                "importo_risparmiabile": 32764.16
            },
            {
                "capitaleRisparmiato": 107,
                "conto": "00000 - 0000005060 - EUR",
                "importo_massimo": 999999999999999,
                "importo_minimo": 250,
                "importo_risparmiabile": 32764.16
            },
            {
                "capitaleRisparmiato": 107,
                "conto": "00000 - 0000005061 - EUR",
                "importo_massimo": 999999999999999,
                "importo_minimo": 250,
                "importo_risparmiabile": 32764.16
            }
        ],
        "importi": [
            "1",
            "5",
            "10",
            "20",
            "50"
        ]
    },
    "esito": "ok",
    "listaObiettivi": [
        {
            "conto": "<?php print($nconto); ?>",
            "obiettivi": [
                {
                    "banca": 1,
                    "causaleBonifico": "bonifico per obiettivo condiviso <<1D94WLU4U3C>>",
                    "codiceCondivisione": "9V95Z32NO8",
                    "codiceProdotto": "5",
                    "colore": 3,
                    "coloreHEX": "800000",
                    "coloreRGB": "128,0,0",
                    "condiviso": false,
                    "numeroPartecipanti": 0,
                    "crowdMonetizzato": 0,
                    "crowdRisparmiato": 0,
                    "deviceName": "",
                    "figli": [],
                    "figlio": false,
                    "filialeConto": "00000",
                    "ibanUtente": "",
                    "id": 1442,
                    "idUtente": "0022123",
                    "imgProdotto": "/img/ret/categobi/shopping/sito.jpg",
                    "importoMaturato": 100,
                    "importoObiettivo": 1000,
                    "intestazioneUtente": "",
                    "modificabile": true,
                    "monetizzazioni": [],
                    "nazioneUtente": "",
                    "nomeObiettivo": "www",
                    "note": "",
                    "notificheImp": 0,
                    "notificheScad": 100,
                    "numeroConto": "0000066117",
                    "numeroErosioni": 0,
                    "prodotto": null,
                    "scadenza": "29/06/2014",
                    "stato": "S",
                    "tipologia": "LIB",
                    "tms_ins": "13/05/2014",
                    "tms_upd": "01/07/2014",
                    "totMonetizzazioniEsterne": 0,
                    "valutaConto": "EUR"
                },
                {
                    "banca": 1,
                    "causaleBonifico": "bonifico per obiettivo condiviso <<13ENYY5DAJ1>>",
                    "codiceCondivisione": "1N3LU9IWDQL",
                    "codiceProdotto": "4",
                    "colore": 1,
                    "coloreHEX": "ffa500",
                    "coloreRGB": "255,165,0",
                    "condiviso": true,
                    "numeroPartecipanti": 6,
                    "crowdMonetizzato": 1500,
                    "crowdRisparmiato": 2000,
                    "deviceName": "",
                    "figli": [
                        {
                            "banca": 1,
                            "causaleBonifico": "bonifico per obiettivo condiviso <<2GOZWHQMBV0/3P3>>",
                            "codiceCondivisione": "1N5L3IOBP1N/5VZ",
                            "colore": 1,
                            "filiale": "00000",
                            "id": null,
                            "idPadre": 1447,
                            "importoPromesso": 100,
                            "intestazioneContribuente": "MARCO POMPEO PRADA",
                            "monetizzazioni": [],
                            "numeroConto": "0000003540",
                            "progressivo": 1,
                            "sommaMonetizzazioni": 0,
                            "stato": "I",
                            "tms_ins": "16/07/2014",
                            "tms_upd": "16/07/2014",
                            "userContribuente": "0077963",
                            "valuta": "EUR"
                        }
                    ],
                    "figlio": true,
                    "filialeConto": "00000",
                    "ibanUtente": "IT34Y0558401600000000066117",
                    "id": 1447,
                    "idUtente": "0022123",
                    "imgProdotto": "/img/ret/categobi/automoto/sito.jpg",
                    "importoMaturato": 1000,
                    "importoObiettivo": 3500,
                    "intestazioneUtente": "PAJARDI PAOLO DANIELE",
                    "modificabile": true,
                    "monetizzazioni": [],
                    "nazioneUtente": "ITALIA",
                    "nomeObiettivo": "motorello",
                    "note": "asdf asf asdf asdf asdf asd fasdfa sdfasdfasdf asd asdvas a asd asda das dfasd fasdf asdfa sdfa sdfa sdf as",
                    "notificheImp": 0,
                    "notificheScad": 0,
                    "numeroConto": "0000066117",
                    "numeroErosioni": 0,
                    "prodotto": null,
                    "scadenza": "20/09/2014",
                    "stato": "I",
                    "tipologia": "LIB",
                    "tms_ins": "29/05/2014",
                    "tms_upd": "01/07/2014",
                    "totMonetizzazioniEsterne": 0,
                    "valutaConto": "EUR"
                },
                {
                    "banca": 1,
                    "causaleBonifico": "bonifico per obiettivo condiviso <<26SJPKWFH1S>>",
                    "codiceCondivisione": "9V95Z32NT9",
                    "codiceProdotto": "1",
                    "colore": 1,
                    "coloreHEX": "ffa500",
                    "coloreRGB": "255,165,0",
                    "condiviso": true,
                    "numeroPartecipanti": 4,
                    "crowdMonetizzato": 2500,
                    "crowdRisparmiato": 3500,
                    "deviceName": "",
                    "figli": [],
                    "figlio": false,
                    "filialeConto": "00000",
                    "ibanUtente": "IT34Y0558401600000000066117",
                    "id": 1460,
                    "idUtente": "0022123",
                    "imgProdotto": "/img/ret/categobi/viaggi/sito.jpg",
                    "importoMaturato": 500,
                    "importoObiettivo": 2000,
                    "intestazioneUtente": "PAJARDI PAOLO DANIELE",
                    "modificabile": true,
                    "monetizzazioni": [],
                    "nazioneUtente": "ITALIA",
                    "nomeObiettivo": "viaggio 1",
                    "note": "",
                    "notificheImp": 0,
                    "notificheScad": 0,
                    "numeroConto": "0000066117",
                    "numeroErosioni": 0,
                    "prodotto": null,
                    "scadenza": "16/07/2015",
                    "stato": "I",
                    "tipologia": "LIB",
                    "tms_ins": "15/07/2014",
                    "tms_upd": "15/07/2014",
                    "totMonetizzazioniEsterne": 0,
                    "valutaConto": "EUR"
                }
            ]
        }
    ],
    "profili": [
        {
            "alert_email": true,
            "area": 1,
            "banca": 1,
            "conto_addebito": "00000 - 0000005059 - EUR",
            "descrizione": "Samsung S4",
            "deviceType": "",
            "device_id": "7CE0BE10-E884-4530-B3B5-31B5E3690C92",
            "id": 595,
            "idMobileAnag": 0,
            "id_utente": "0022123",
            "importo_minimo": 250,
            "importo_risparmio": 10,
            "num_alert": 0,
            "pda.easysaving.token": "xuBRrh+1Ba6OEZNVWajY1HTg0BbV68x3qMBRyxMdPsM=",
            "registrationId": "",
            "stato": "A",
            "tentativi": 7,
            "tms_agg": "19/02/2014",
            "tms_ins": "19/02/2014"
        },
        {
            "alert_email": true,
            "area": 1,
            "banca": 1,
            "conto_addebito": "00000 - 00000050560 - EUR",
            "descrizione": "HTC One",
            "deviceType": "",
            "device_id": "7CE0BE10-E884-4530-B3B5-31B5E3690C93",
            "id": 595,
            "idMobileAnag": 0,
            "id_utente": "0022123",
            "importo_minimo": 250,
            "importo_risparmio": 10,
            "num_alert": 0,
            "pda.easysaving.token": "yuBRrh+1Ba6OEZNVWajY1HTg0BbV68x3qMBRyxMdPsM=",
            "registrationId": "",
            "stato": "A",
            "tentativi": 7,
            "tms_agg": "19/02/2014",
            "tms_ins": "19/02/2014"
        },
        {
            "alert_email": true,
            "area": 1,
            "banca": 1,
            "conto_addebito": "00000 - 0000005061 - EUR",
            "descrizione": "iPhone 5",
            "deviceType": "",
            "device_id": "7CE0BE10-E884-4530-B3B5-31B5E3690C94",
            "id": 595,
            "idMobileAnag": 0,
            "id_utente": "0022123",
            "importo_minimo": 250,
            "importo_risparmio": 10,
            "num_alert": 0,
            "pda.easysaving.token": "zuBRrh+1Ba6OEZNVWajY1HTg0BbV68x3qMBRyxMdPsM=",
            "registrationId": "",
            "stato": "A",
            "tentativi": 7,
            "tms_agg": "19/02/2014",
            "tms_ins": "19/02/2014"
        }
    ]
}