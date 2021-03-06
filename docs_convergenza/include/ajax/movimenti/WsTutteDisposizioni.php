<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 99) < 99;

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
    "esitiRicerca": [
        {
            "data": "22/10/13&#160;",
            "data-key": "20131022123525",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852462&tipoDisposizione=BFB",
            "importo": "28.000,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.16965090484172285&numeroCRO=27852462&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.41607156419068125&numeroCRO=27852462&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021171945",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Ricariche prepagate",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852442&tipoDisposizione=BFB",
            "importo": "2,35 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.34264563725023767&numeroCRO=27852442&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.8838928083220192&numeroCRO=27852442&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021171921",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Delega F24",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852441&tipoDisposizione=BFB",
            "importo": "1,40 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.9754067901415614&numeroCRO=27852441&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.2711980069458413&numeroCRO=27852441&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021162923",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bonifici",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852439&tipoDisposizione=BFB",
            "importo": "2,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.9898614358719768&numeroCRO=27852439&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.655159032503301&numeroCRO=27852439&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021162917",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852438&tipoDisposizione=BFB",
            "importo": "2,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.5198449044356274&numeroCRO=27852438&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.3662901507593074&numeroCRO=27852438&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021162854",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Ricariche cellulari/TV",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852437&tipoDisposizione=BFB",
            "importo": "2,27 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.41627322941462985&numeroCRO=27852437&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.9788652423204938&numeroCRO=27852437&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021162517",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Delega F24",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852436&tipoDisposizione=BFB",
            "importo": "1,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.7147534464759083&numeroCRO=27852436&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.621374045891847&numeroCRO=27852436&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021162505",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852435&tipoDisposizione=BFB",
            "importo": "1,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.7738080905260314&numeroCRO=27852435&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.33005584127978593&numeroCRO=27852435&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021161833",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Ricariche cellulari/TV",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852434&tipoDisposizione=BFB",
            "importo": "1,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.484938335137409&numeroCRO=27852434&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.20815824372756275&numeroCRO=27852434&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021161810",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852433&tipoDisposizione=BFB",
            "importo": "1,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.3787439258128865&numeroCRO=27852433&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.8713900141243239&numeroCRO=27852433&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "21/10/13&#160;",
            "data-key": "20131021160226",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852425&tipoDisposizione=BFB",
            "importo": "1,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.7013193438809271&numeroCRO=27852425&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.9100362271103388&numeroCRO=27852425&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "17/09/13&#160;",
            "data-key": "20130917161341",
            "desc": "TELECOM ITALIA SPA ROMA&#160;",
            "tipo": "Bollettini postali",
            "stato": "Eseguito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852245&tipoDisposizione=BFB",
            "importo": "2,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.785144255730874&numeroCRO=27852245&tipoDisposizione=BFB'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "<a href='/pri/wbOnetoone/3l/do/banking/postalforms/WsPostalFormsActionDetailCopia.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bollettini_postali&OBSKEY3=nav_priv_wbx_nuovo_bollet&cf=0.34820500709353863&numeroCRO=27852245&tipoDisposizione=BFB&verificaPagamento=1'><img border='0' alt='Crea una nuova dispositiva con gli stessi dati' src='/WB/fe/img/ico/ico1gr_copia.gif'/></a>",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "17/09/13&#160;",
            "data-key": "20130917000000",
            "desc": "232 /3232323&#160;",
            "tipo": "Ricariche cellulari/TV",
            "stato": "Inserito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852241&tipoDisposizione=CEL",
            "importo": "20,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/WsCellRechargeActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_ricaric_cell&OBSKEY3=nav_priv_wbx_ricarica&cf=0.33020412417964917&numeroCRO=27852241&tipoDisposizione=CEL'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "&#160;",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "17/09/13&#160;",
            "data-key": "20130917000000",
            "desc": "232 /3232323&#160;",
            "tipo": "Ricariche cellulari/TV",
            "stato": "Inserito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852239&tipoDisposizione=CEL",
            "importo": "8,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/WsCellRechargeActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_ricaric_cell&OBSKEY3=nav_priv_wbx_ricarica&cf=0.11452451119443852&numeroCRO=27852239&tipoDisposizione=CEL'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "&#160;",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        },
        {
            "data": "17/09/13&#160;",
            "data-key": "20130917000000",
            "desc": "232 /3232323&#160;",
            "tipo": "Ricariche ATM",
            "stato": "Inserito&#160;",
            "info": "/pri/banking/webank/WsStatoDispDetailedJson.jsp?d=0&numeroCRO=27852237&tipoDisposizione=ATM",
            "importo": "2,00 &euro;&#160;",
            "dettaglio": "<a href='/pri/wbOnetoone/3l/do/banking/WsCellRechargeActionDetail.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_ricaric_atm&OBSKEY3=nav_priv_wbx_ricarica&cf=0.7819215697467842&numeroCRO=27852237&tipoDisposizione=ATM'><img border='0' alt='Visualizza, stampa dettagli o creane una nuova con gli stessi dati' src='/WB/fe/img/ico/ico1gr_dettaglio.gif'/></a>",
            "copia": "&#160;",
            "annulla": "<img border='0' alt='Annulla disposizione' title='Funzione non disponibile.' src='/wscmn/img/ico/ico1gr_revoca_off.gif'>"
        }
    ]
}
EOD;
}